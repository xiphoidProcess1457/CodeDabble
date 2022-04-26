<?php namespace App\Controllers;

use App\Model\UserModel;
use App\Models\ForumModel;
use App\Models\ForumReplyModel;
class Search extends BaseController
{


    public function index()
    {
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
        echo view('search', $data);
        echo view('footer');
    }


}
