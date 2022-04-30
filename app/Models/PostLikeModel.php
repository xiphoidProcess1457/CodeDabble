<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class PostLikeModel extends Model{
    protected $table = 'post-likes';
    protected $allowedFields = ['user_id', 'post_id', 'description'];
}