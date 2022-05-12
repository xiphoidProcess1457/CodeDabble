<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class AdminModel extends Model{
    protected $table = 'admin-users';
    protected $allowedFields = ['username','name','email','role','password', 'status','created_at'];
}