<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class GetForumModel extends Model{
   public function getForum(){
    $query = $this->db->get('forumquestion');
    return $this->findAll();
   }
}