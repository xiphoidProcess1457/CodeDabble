<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ForumModel;
use App\Models\UserModel;
use App\Models\ForumReplyModel;
use App\Models\CourseModel;
use App\Models\AdminModel;
  
class Admin extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('header-tags');
        echo view('admin-login');
    } 

    public function addlesson()
    { 
        helper(['form']);
        $data = [];
        
        echo view('header-tags');
        echo view('sidebar');
        echo view('add-lesson' , $data);
    }
  
   

    public function lessonList()
    {

        $model = new CourseModel();
        helper('text');
  
        $data['lessons'] =$model->get()->getResultArray();

    
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        echo view('header-tags');;
        echo view('sidebar');
        echo view('lesson-list', $data);
    }




    public function edit($id)
    {
        $db = db_connect();
        
        $model = new CourseModel($db);
        helper('form', 'url');
        $data['lessons'] =$model->find($id);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        echo view('header-tags');
        echo view('sidebar');
        echo view('edit-lesson', $data);
    }

    

    public function delete($id = null){
        $model = new CourseModel($db);
        $data['lessons'] = $model->where('id', $id)->delete();
        return redirect()->to('/Admin/lessonlist');
        }















  
    public function update($id){
        $model = new CourseModel();
        $data = $model->find($id);
        $data = [
            'title' =>$this->request->getVar('title'),
            'language'  =>$this->request->getVar('language'),
            'course'  =>$this->request->getVar('course'),
            'description'  =>$this->request->getVar('description'),
            'code-snippet'  =>$this->request->getVar('code-snippet'),
            'body'  =>$this->request->getVar('body'),
        ];
        $model->update($id, $data);
        return redirect()->to('/Admin/lessonlist', $id);
        } 
    

   








        public function save()
        {
    
            $db = db_connect();
            
            helper('form', 'url');
            $usermodel = new UserModel($db);
            $forummodel = new ForumModel($db);
            $usermodel = new CourseModel($db);
    
    
    
            $rules = [
                'title' => 'required|min_length[3]|max_length[65535]',
                'course' => 'min_length[3]|max_length[200]',
                'description' => 'min_length[3]|max_length[65535]',
                'code-snippet' => 'min_length[3]|max_length[65535]',
                'body' => 'min_length[3]|max_length[65535]'
            ];
            
            if($this->validate($rules)){
            $data = [
                'title' =>$this->request->getVar('title'),
                'language'  =>$this->request->getVar('language'),
                'course'  =>$this->request->getVar('course'),
                'description'  =>$this->request->getVar('description'),
                'code-snippet'  =>$this->request->getVar('code-snippet'),
                'body'  =>$this->request->getVar('body'),
            ];
            
            $usermodel->save($data);
            return redirect()->to('/Admin/lessonlist');
        }else{
            $data['validation'] = $this->validator;
            echo view('header-tags');
            echo view('Admin/addlesson', $data);
        }
    
    
    
    
        }


    public function catalog()
    {
        $model = new CourseModel();
        helper('text');
  
        $data['lessons'] =$model->get()->getResultArray();

        echo view('header-tags');
        echo view('navbar');
        echo view('catalog', $data);
        echo view('footer');
    }





    public function editor($id)
    {
        $url = "http://localhost:8080/fetchCode?fileName=Solution";
        
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_POST,1);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        
        $result = json_decode($response,true);
        $data['codeBody']=$result['codeBody'];

        $db = db_connect();
        
        $model = new CourseModel($db);
        $usermodel = new UserModel($db);
        $builder = $db->table('lessons');        // 'mytablename' is the name of your table

        $builder->select('code-snippet', 'id');       // names of your columns
        $builder->where('id', $id);                // where clause
        $query = $builder->get()->getResult();
       
        $data['lessons'] =$model->find($id);
        $data['TOKEN']="1234";
        //$gg['lessons'] =$model->find('code-snippet', $id);
      

        $data['CODE']=$query;

        //print_r($ss);
        echo view('header-tags');
        echo view('es-navbar');
        echo view('editor', $data);
        echo view('es-footer');
    }



    public function adduser(){
        $model = new AdminModel();
        helper('text');
  
        $data['users'] =$model->get()->getResultArray();

        echo view('header-tags');;
        echo view('sidebar');
        echo view('add-user', $data);
    }



    public function saveuser()
    {
        //include helper form
        helper(['form']);
        // set rules validation form
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $password = array(); 
        $alpha_length = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) 
        {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        $newPassword = implode($password);
        $rules = [
            'username'          => 'required|min_length[3]|max_length[20]',
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[admin-users.email]',
            'role'          => 'required|min_length[3]|max_length[20]',
        ];
          
        if($this->validate($rules)){
            $model = new AdminModel();
            $data = [
                'username'     => $this->request->getVar('username'),
                'name'     => $this->request->getVar('name'),
                'email'     => $this->request->getVar('email'),
                'role'    => $this->request->getVar('role'),
                'status'    => 'activated',
                'password' => password_hash($newPassword, PASSWORD_DEFAULT),
            ];


            
            $model->save($data);
           
         
            $email = \Config\Services::email();
            $to =$data['email'];
                    
            $subject = 'Password Change';
            $message = 'Hello &nbsp' . $data['role'].'&nbsp;&nbsp;    '. $data['name']. '&nbsp;&nbsp;Please Login using your credentials which is your email<br>'
            . $data['email'].'<br>and your password<br>'
             .$newPassword.'<br>and Change your password to a more secure one';
            
         
            $email->setTo($to);
            $email->setFrom('johndoe@gmail.com', 'CodeDabble.Inc');
            
            $email->setSubject($subject);
            $email->setMessage($message);
    
            if($email->send()){
                return redirect()->to('/Admin/adduser');
            }

           
        }else{
            $data['validation'] = $this->validator;
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('add-admin', $data);
        }
          
    }






    public function authAdmin()
    {
        $session = session();
        $userModel = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email', $email)->first();
        //$admin = $userModel->where('email', $email)->first();
        //$data['user']=$userModel->where("admin-users.id", session("id"))->first();
        // print_r($data);
        // echo $password;
        if($data){
            $pass = $data['password'];
            
            $authenticatePassword = password_verify($password, $pass);
            
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'role' => $data['role'],
                    'status' => $data['status'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                if ($data['status'] =='deactivated'){ 
                 $session = session();
                 $session->setFlashdata("message", "Your Account Has been Deactivated");
                 return redirect()->to('/Admin');
                      }else{
                 return redirect()->to('/Admin/dashboard');
                     }
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/Admin');
                // $w = $data['password'];
                // $q = $this->request->getVar('password');
                // print_r($password);
                // echo '<br>';
                // print_r($pass);
                // echo '<br>';
                // echo password_verify($q, $q);
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/Admin');
        }
    }






    public function users()
    {

        $model = new userModel();
        helper('text');
        $email = 'jbareta2@gmail.com';
        $data['users'] =$model->get()->getResultArray();
    
        echo view('header-tags');;
        echo view('sidebar');
        echo view('user-list', $data);
    }



   
    public function deleteuser($id = null){
        $model = new UserModel();
        helper('text');
        $data['users'] = $model->where('id', $id)->delete();
        return redirect()->to('/Admin/users');
        }





    public function userstatus($id){
        $model = new UserModel();
        $data = $model->find($id);
        

        if($data['status'] =='deactivated' ){
            $status = 'activated';
        }else{
            $status = 'deactivated';
            $session = session();
            $session->destroy($data['user_email']);
        }
            $data = [
                'status'     => $status,
            ];
            $model->update($id,$data);


        return redirect()->to('/Admin/users');
    }





    public function admins()
    {
        $db = db_connect();
        $model = new AdminModel($db);
        helper('text');
        

        
        $builder = $db->table('admin-users');
        //$users = $builder->like('title', $this->request->getVar('search'))->get();
        $builder->where('role', 'moderator');
        $query = $builder->get()->getResultArray();
        


        // $he = ;
        // echo '<pre>';
        // print_r($he);
        $data['admins'] =$query;
    
        echo view('header-tags');;
        echo view('sidebar');
        echo view('admin-list', $data);
    }


    public function deleteadmin($id = null){
        $model = new AdminModel();
        helper('text');
        $data['admin'] = $model->where('id', $id)->delete();
        return redirect()->to('/Admin/admins');
        }




        public function adminstatus($id){
            $model = new AdminModel();
            $data = $model->find($id);
            
    
            if($data['status'] =='deactivated' ){
                $status = 'activated';
            }else{
                $status = 'deactivated';
                $session = session();
                $session->destroy($data['email']);
            }
                $data = [
                    'status'     => $status,
                ];
                $model->update($id,$data);
    
    
            return redirect()->to('/Admin/admins');
        }


        public function dashboard(){

            $db = db_connect();
        
            helper('form', 'url');
            $usermodel = new AdminModel($db);
            $coursemodel = new CourseModel($db);
            $student = new UserModel($db);
            

            $data['lessons'] =$coursemodel->countAllResults();
            $data['student'] =$student->countAllResults();
            $data['user']=$usermodel->where("admin-users.id", session("id"))->first();
            $data['admins'] = $usermodel->where('role', 'moderator')->countAllResults();
        


            // echo '<pre>';
            // print_r($s);
            echo view('header-tags');
            echo view('sidebar');
            echo view('dashboard', $data);
        }


        public function updateadminpassword($id){
            $db = db_connect();
            
            helper('form', 'url');
            $model = new AdminModel($db);
            $data['user'] =$model->find($id);
            $data = [
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->update($id, $data);
            $session = session();
            $session->destroy();
            return redirect()->to('/Admin');
        } 



        
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Admin');
    }
}

