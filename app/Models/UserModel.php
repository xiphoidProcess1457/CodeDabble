<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_email', 'uploaded_flleinfo','address', 'bio','status','user_password','user_created_at'];
}