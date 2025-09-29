<?php

namespace App\Models;

use CodeIgniter\Model;

class KeeperFormModel extends Model
{
    protected $table            = 'keeper_forms';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'timing',
        'date',
        'num_kitchens',
        'num_rooms',
        'name',
        'num_bathrooms',
        'town_area',
        'phone',
        'postal_code',
        'city',
        'address',
        'plan',
        'selected_date',
        'selected_days',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}


