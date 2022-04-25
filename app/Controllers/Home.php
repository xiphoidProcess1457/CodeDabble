<?php namespace App\Controllers;

use App\Model\UserModel;
use App\Model\ForumModel;
class Home extends BaseController
{





    public function index()
    { 
        echo view('header-tags');
        echo view('navbar');
        echo view('homepage');
        echo view('footer');
    }


    public function catalog()
    {
        echo view('header-tags');
        echo view('navbar');
        echo view('catalog');
        echo view('footer');
    }

    public function about()
    {
        echo view('header-tags');
        echo view('navbar');
        echo view('about');
        echo view('footer');
    }


    public function editor()
    {
        echo view('header-tags');
        echo view('es-navbar');
        echo view('editor');
        echo view('es-footer');
    }

    public function questions()
    {
        echo view('header-tags');
        echo view('navbar');
        echo view('questions');
        echo view('footer');
    }




}
