<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class ForumReplyModel extends Model
{
    protected $table = 'forumreply';
  
    protected $allowedFields = ['forum_reply','slug','post_id','user_id','created_at'];
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('forumreply');
    }
     
    public function insert_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
}
?>