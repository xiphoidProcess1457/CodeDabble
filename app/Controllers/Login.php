<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('header-tags');
        echo view('login');
    } 
  
    // public function auth()
    // {
    //     $session = session();
    //     $model = new UserModel();
    //     $email = $this->request->getVar('email');
    //     $password = $this->request->getVar('password');
    //    //include helper form
    // helper(['form']);
    // //set rules validation form
    // $rules = [
        
    //     'email'=>'required|min_length[3]|max_length[30]|valid_email',
    //     'password'=>'required|min_length[3]|max_length[255]|validateUser[email,password]',
    // ];

    // $errors = [
    //     'password' => [
    //         'validateUser' => 'Email/Password is incorrect'
    //     ]
    // ];
      
    // if($this->validate($rules,$errors)){
    //     $data = $model->where('user_email', $email)->first();
    //     $data['user']=$model->where("users.id", session("id"))->first();
    //     if($data){
    //         $pass = $data['user_password'];
    //         $verify_pass = password_verify($password, $pass);
    //         if($verify_pass){
    //             $ses_data = [
    //                 'id'       => $data['id'],
    //                 'user_name'     => $data['user_name'],
    //                 'user_email'    => $data['user_email'],
    //                 'uploaded_flleinfo'    => $data['uploaded_flleinfo'],
    //                 'logged_in'     => TRUE
    //             ];
              
    //             $session->set($ses_data);
    //             return redirect()->to('/Home');
    //         }else{
    //             $session->setFlashdata('msg', 'Wrong Password');
    //             return redirect()->to('/login');
    //         }
    //     }else{
    //             $session->setFlashdata('msg', 'Email not Found');
    //             return redirect()->to('/login');
    //     }
    // }else{
    //     $data['validation'] = $this->validator;
    //     echo view('header-tags');
    //     echo view('login', $data);
    // }
    // }





    public function auth(){
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
       //include helper form
        helper(['form']);
		$data = [];
		helper(['form']);

		
		if($this->request->getMethod()=='post'){
            $rules = [
        
                'email'=>'required|min_length[3]|max_length[30]|valid_email',
                'password'=>'required|min_length[3]|max_length[255]|validateUser[email,password]',
            ];
        
            $errors = [
                'password' => [
                    'validateUser' => 'Email/Password Does not Match'
                ]
            ];
              
            if($this->validate($rules,$errors)){
                $data = $model->where('user_email', $email)->first();
                $data['user']=$model->where("users.id", session("id"))->first();
                if($data){
                    $pass = $data['user_password'];
                    $verify_pass = password_verify($password, $pass);
                    if($verify_pass){
                        $ses_data = [
                            'id'       => $data['id'],
                            'user_name'     => $data['user_name'],
                            'user_email'    => $data['user_email'],
                            'uploaded_flleinfo'    => $data['uploaded_flleinfo'],
                            'logged_in'     => TRUE
                        ];
                      
                        $session->set($ses_data);
                        return redirect()->to('/Home');
                    }else{
                        $session->setFlashdata('msg', 'Wrong Password');
                        return redirect()->to('/login');
                    }
                }else{
                        $session->setFlashdata('msg', 'Email not Found');
                        return redirect()->to('/login');
                }
            }else{
                
                echo view('header-tags');
                echo view('login', $data);
            }
		}

		echo view('login', $data);

	}














   


    





  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Home');
    }
} 