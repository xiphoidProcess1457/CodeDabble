<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ForumModel;
use App\Models\UserModel;
use App\Models\ForumReplyModel;
  
class AskQuestion extends Controller
{





    
    public function question()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('header-tags');
        echo view('navbar');
        echo view('ask-question', $data);
        echo view('footer');
    }
  

    

  

    

    public function save()
    {
        helper('form');
        $model = new ForumModel();
        $data['news'] = $model->getPosts();
        
        if(! $this->validate([
            'title' => 'required|min_length[3]|max_length[65535]',
            'body' => 'min_length[3]|max_length[65535]'
            
        ])){
            return view('/AskQuestion', $data);
            
        }
        else{
            $model->save(
                [
                'forum_title' =>$this->request->getVar('title'),
                'forum_body'  =>$this->request->getVar('body'),
                'slug'        => url_title($this->request->getVar('title')),
                'user_id'     =>session("id")
                ]
            );

            
            $session = \Config\Services::session();
            return redirect()->to('/AskQuestion/forum');
        }
        
    }






    // function post($id)
    // {
    //     // $userModel = new UserModel();
    //     $forumModel = new ForumModel();
    //     $data['forumquestion'] =$model->find($id);
    //     // $fetch_user_info = $userModel->where("users.id", session("id"))->join('forumquestion', 'users.id = forumquestion.user_id')->first();
    //     // $fetch_forum_info = $forumModel->where("id", $id)->first();
    //     // $data['post'] = $forumModel->getPosts($slug);
    //     // //$data['post'] =$model->getPosts($id);
    //     // $data['id'] = session("id");
    //     // $data['user_name'] = $fetch_user_info['user_name'];
    //     //$data['user_id'] = $fetch_forum_info['user_id'];
    //     // echo view('header-tags');
    //     // echo view('navbar');
    //     //echo view('viewforum', $data);
    //     echo view('footer');
    // }
   

    public function post($id){
    
        // $model = new StudentModel();
        // echo 'kingina';
        $db = db_connect();
        
        helper('form', 'url');
        $userModel = new UserModel($db);
        $forumModel = new ForumModel($db);
        $model = new ForumReplyModel($db);
        //$reply['reply'] = $model->where("forumquestion.id",$id)->join('forumquestion', 'forumquestion.id = forumreply.post_id')->get()->getResult();
        $data['forumquestion'] = $userModel->where("forumquestion.id",$id)->join('forumquestion', 'users.id = forumquestion.user_id')->first();
        // $reply = json_decode(json_encode($model->where("forumquestion.id",$id)->join('forumquestion', 'forumquestion.id = forumreply.post_id', 'left')
        // ->get()->getResult()), true);		
        $comment = json_decode(json_encode($model->where("forumreply.post_id",$id)->join('users', 'forumreply.user_id = users.id')
        ->get()->getResult()), true);	

        //$comment['comment'] = $model->where("forumreply.post_id",$id)->join('users', 'forumreply.user_id = users.id')->get()->getResult();
        //JOIN CODE->join('forumreply', 'users.id = forumreply.user_id', 'left')
        //$data ['reply'] = $reply;
        $data ['reply'] = $comment;
        //$user = $model->where("users.id", session("id"))->first();
        $user=$userModel->where("users.id", session("id"))->first();
 	

        $comment_num = json_decode(json_encode($model->where("forumreply.post_id",$id)->join('users', 'forumreply.user_id = users.id')
        ->countAllResults()), true);	

        $data ['num_row'] = $comment_num;
        //$data['reply'] =$model->find();
        //$reply['forumreply'] = $model->getPosts();
        //$reply['forumreply'] =$model->findAll();
        //$gg= json_decode(json_encode($forumModel->join()), true);
        //$data['user_name'] = $fetch_user_info['user_name']
        //$data['forumreply'] = $model->findAll();
       
        //$data['forumreply'] = $model->getPosts();
        //$fetch_forum_info = $forumModel->where("id", $id)->first();
        //$data['forumquestion'] = $forumModel->find($id);
        //echo '<pre>';
        //print_r ($fetch_user_info);
        //$data['user_name'] = $fetch_user_info['user_name'];
        //$data['user_id'] = $fetch_forum_info['user_id'];
        echo view('header-tags');
        echo view('navbar');
        //echo 'pota';
        // $s['user'] =$forumModel->find($id);
        // echo '<pre>';
        // print_r($num);
        // echo '<pre>';
        //$tangina = $dd->find($id);
        //print_r($tangina);
        return view('viewforum' ,$data);
        echo json_encode(array("status" => true , 'data' => $data));
        echo view('footer');
        
    }

  

    public function forum(){
        $model = new ForumModel();
        // echo '<pre>';
        // $gg = $model->join();
        // print_r ($gg);

        helper('text');
  
        $data = [
          'news' => $model->paginate(10),
          'pager' => $model->pager,
      ];
      

        echo view('header-tags');
        echo view('navbar');
        //echo 'kingina';
        echo view('questions', $data);
        echo view('footer');   
    }




    // public function forumreply(){
        
    //     echo view('viewforum', $data);
       
    // }

  



  






    // public function store()
    // {  
    //     helper(['form', 'url']);
    //     $db = db_connect();
    //     $userModel = new UserModel($db);
    //     $forumModel = new ForumModel($db); 
    //     $model = new ForumReplyModel();
         
    //     $data = [
    //         'forum_reply' => $this->request->getVar('reply'),
    //         'post_id'     =>118,
    //         'user_id'     =>session("id")
    //         ];
    //     $save = $model->insert_data($data);
    //     if($save != false)
    //     {
    //         $data = $model->where('id', $save)->first();
    //         echo json_encode(array("status" => true , 'data' => $data));
    //     }
    //     else{
    //         echo json_encode(array("status" => false , 'data' => $data));
    //     }
    // }


    public function store($id)
    {  
        $db = db_connect();
        
        helper('form', 'url');
        $usermodel = new UserModel($db);
        $forummodel = new ForumModel($db);
        $model = new ForumReplyModel($db);
        $session = session();

        $linkId=$forummodel->where("forumquestion.id", $id)->first();
        
        $link = $forummodel->where("/AskQuestion/post/",$id);
        $data = [
            'forum_reply' => $this->request->getVar('reply'),
            'post_id'     =>$this->request->getVar('custId'),
            'user_id'     =>session("id")
            ];
            $save = $model->insert_data($data);
            $data = $model->where('id', $save)->first();
            
            return redirect()->to('/AskQuestion/post/'.$linkId['id']);
            
            
    }


    // $db = db_connect();
        
    // helper('form', 'url');
    // $usermodel = new UserModel($db);
    // $forummodel = new ForumModel($db);
    // $usermodel = new ForumReplyModel($db);
    // $session = session();
    // $data['user'] =$forumModel->find($id);
    // $data = [
    //     'forum_reply' => $this->request->getVar('reply'),
    //     'post_id'     =>$this->request->getVar('custId'),
    //     'user_id'     =>session("id")
    //     ];
    // $session->set($data);
    // $usermodel->update($id, $data);
    // return redirect()->to('/AskQuestion/post');



  
}