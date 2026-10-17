<?php 

namespace App\Models;//required

use CodeIgniter\Model;//required

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['username', 'full_name', 'role'];
    
    protected $useTimestamps = false;
}