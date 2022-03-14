<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ForumModel;
use App\Models\ForumReplyModel;
  
class AskQuestion extends Controller
{





    
    public function index()
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
                
                ]
            );

            
            $session = \Config\Services::session();
            return redirect()->to('/AskQuestion/forum');
        }
        
    }






    function post($slug)
    {
        $model = new ForumModel();
        $data['post'] = $model->getPosts($slug);
        echo view('header-tags');
        echo view('navbar');
        echo view('viewforum', $data);
        echo view('footer');
    }
   





    public function forum(){
        $model = new \App\Models\ForumModel();
        
        
        helper('text');
        
        $news['news'] = $model->getPosts();
        
        $data = [
            'news' => $model->paginate(10),
            'pager' => $model->pager,
        ];
        
        echo view('header-tags');
        echo view('navbar');
        echo view('questions', $data);
        echo view('footer');
        
    }



    public function forumreply(){
        //view all data
        $model = new ForumReplyModel();
        $data['news'] = $model->getPosts();
        echo view('viewforum', $data);
    }




    public function savereply()
    {
        helper('form');
        $model = new ForumReplyModel();
        $data['news'] = $model->getPosts();
        
        if(! $this->validate([
            'reply' => 'min_length[3]|max_length[65535]'
            
        ])){
            return view('/AskQuestion/viewforum', $data);
            
        }
        else{
            $model->save(
                [
                'forum_reply'  =>$this->request->getVar('reply'),
                'slug'        => url_title($this->request->getVar('reply')),
                
                ]
            );

            
            $session = \Config\Services::session();
            return redirect()->to('/AskQuestion');
        }
    }






  
}