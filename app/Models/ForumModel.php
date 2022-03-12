<?php namespace App\models;

use CodeIgniter\Model;

class ForumModel extends Model{
    protected $table = 'forumquestion';
    protected $allowedFields = ['forum_title','forum_body','slug','body'];
    public function getPosts($slug = null){
        if (!$slug){
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['slug'=>$slug])
                ->first();
    }

}