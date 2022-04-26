<?php namespace App\models;

use CodeIgniter\Model;

class ForumModel extends Model{
    protected $table = 'forumquestion';
    protected $allowedFields = ['forum_title','forum_body','slug', 'created_at', 'updated_at', 'user_id'];
    public function getPosts($slug = null){
        if (!$slug){
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['slug'=>$slug])
                ->first();
    }

    function join(){
        return $this->db->table('users')
        ->join('forumquestion', 'users.id = forumquestion.user_id')
        ->where(['forumquestion.id' => 113])
        ->get()
        ->getResult();
    }

}

