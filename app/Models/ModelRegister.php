<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class ModelRegister extends Model
{
    protected $table = "users";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password_hash', 'fullname', 'email'];
}