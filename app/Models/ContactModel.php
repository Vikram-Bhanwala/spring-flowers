<?php
namespace App\Models;
use CodeIgniter\Model;

class ContactModel extends Model{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'name',
        'phone',
        'email',
        'service',
        'message',
        'created_at',
    ];
}