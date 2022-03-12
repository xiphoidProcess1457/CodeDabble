<?php namespace App\models;

use CodeIgniter\Model;

class ForumReplyModel extends Model{
    protected $table = 'forumreply';
    protected $allowedFields = ['forum_reply', 'created_at'];
   

}