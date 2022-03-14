<?php namespace App\models;

use CodeIgniter\Model;

class ForumReplyModel extends Model{
    protected $table = 'forumreply';
    protected $allowedFields = ['forum_reply','slug','created_at'];
    public function getPosts($slug = null){
        if (!$slug){
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['slug'=>$slug])
                ->first();
    }

}