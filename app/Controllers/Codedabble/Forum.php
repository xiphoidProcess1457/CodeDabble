<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ForumModel;
  
class AskQuestion extends Controller
{
   
  

    function post($slug)
    {
        $model = new ForumModel();
        $data['post'] = $model->getPosts($slug);
        echo view('viewforum', $data);
    }
   

    

    public function save()
    {
        
        helper('form');
        $model = new ForumModel();
        $data['news'] = $model->getPosts();
        
        if(! $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'min_length[3]|max_length[255]'
            
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








  
}