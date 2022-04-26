<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ForumModel;
use App\Models\UserModel;
use App\Models\ForumReplyModel;
  
class Profile extends Controller
{





    
    public function index()
    {
        $db = db_connect();
        
        helper('form', 'url');
        $usermodel = new UserModel($db);
        $forummodel = new ForumModel($db);
        $data['user']=$usermodel->where("users.id", session("id"))->first();
        // echo '<pre>';
        // print_r($user);
        // echo '<pre>';
        echo view('header-tags');
        echo view('navbar');
        echo view('profile', $data);
        echo view('footer');
    }
  

    

    public function editprofile($id){
        $db = db_connect();
        
        helper('form', 'url');
        $usermodel = new UserModel($db);
        $forummodel = new ForumModel($db);
        $usermodel = new UserModel($db);
        $data['user'] =$usermodel->find($id);
        
        echo view('header-tags');
        echo view('navbar');
        echo view('editprofile', $data);
        echo view('footer');
        //echo 'kingina';
    }

    
    public function update($id){
        $db = db_connect();
        
        helper('form', 'url');
        $usermodel = new UserModel($db);
        $forummodel = new ForumModel($db);
        $usermodel = new UserModel($db);
        $session = session();
        $data['user'] =$usermodel->find($id);
        $data = [
            'user_name'     => $this->request->getVar('name'),
            'user_email'    => $this->request->getVar('email'),
            'address'    => $this->request->getVar('address'),
            'bio'    => $this->request->getVar('bio'),
        ];
        $session->set($data);
        $usermodel->update($id, $data);
        return redirect()->to('/Profile');
    } 


    public function updatepassword($id){
        $db = db_connect();
        
        helper('form', 'url');
        $usermodel = new UserModel($db);
        $forummodel = new ForumModel($db);
        $usermodel = new UserModel($db);
        $data['user'] =$usermodel->find($id);
        $data = [
            'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $usermodel->update($id, $data);
        $session = session();
        $session->destroy();
        return redirect()->to('/Login');
    } 






//sdadas
public function photo($id)
{
    $db = db_connect();
        
    helper('form', 'url');
    $usermodel = new UserModel($db);
    $forummodel = new ForumModel($db);
    $usermodel = new UserModel($db);
    $session = session();


    $img = $this->request->getFile('userfile');

    
        $imageName = $img->getRandomName();
        $file =  $img->move('uploads/user', $imageName);
        

        $data = [
          'uploaded_flleinfo' => $imageName
        ];
       
      
        $session->set($data);
        $usermodel->update($id, $data);
        return redirect()->to('/Profile');
    

    //echo $imageName;
}

  
}