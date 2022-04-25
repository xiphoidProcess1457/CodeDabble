<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ForumModel;
use App\Models\UserModel;
use App\Models\ForumReplyModel;
  
class Admin extends Controller
{
    public function index()
    {
        echo view('header-tags');;
        echo view('sidebar');
        echo view('add-lesson');
    }
  
    public function lessonList()
    {
        echo view('header-tags');;
        echo view('sidebar');
        echo view('lesson-list');
    }

    public function edit()
    {
        echo view('header-tags');;
        echo view('sidebar');
        echo view('edit-lesson');
    }

    public function delete()
    {
        echo view('header-tags');;
        echo view('sidebar');
        return view('lesson-list');
    }
  
}