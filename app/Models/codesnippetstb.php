<?php namespace App\Models;

use CodeIgniter\Model;

class codesnippetstb extends Model{
  protected $table = 'codesnippetstb';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $allowedFields = ['topic', 'description'];
}