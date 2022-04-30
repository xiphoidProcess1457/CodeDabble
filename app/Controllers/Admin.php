<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ForumModel;
use App\Models\UserModel;
use App\Models\ForumReplyModel;
use App\Models\CourseModel;
  
class Admin extends Controller
{
    public function index()
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
        return redirect()->to('/Admin');
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
        return redirect()->to('/Admin', $id);
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
        return redirect()->to('/Admin');
    }else{
        $data['validation'] = $this->validator;
        echo view('header-tags');
        echo view('Admin', $data);
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



}