<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'job_type',
        'name',
        'phone',
        'email',
        'country_of_living',
        'county',
        'type_of_work',
        'availability_type',
        'start_date',
        'message',
        'cv_filename',
        'cv_path',
        'status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'job_type' => 'required|in_list[House Keeper,Companion,Cook,Groundman,Nanny,Security,Head House Keeper]',
        'name' => 'required|min_length[2]|max_length[255]',
        'phone' => 'required|min_length[10]|max_length[50]',
        'email' => 'required|valid_email|max_length[255]',
        'country_of_living' => 'required|min_length[2]|max_length[100]',
        'county' => 'required|min_length[2]|max_length[100]',
        'type_of_work' => 'required|in_list[live_in_work,live_out_work,flexible_work]',
        'availability_type' => 'required|in_list[full_time_availability,part_time_availability,flexible_availability]',
        'start_date' => 'required|in_list[asap_start,flexible_start]',
        'message' => 'permit_empty|max_length[1000]',
        'cv_filename' => 'permit_empty|max_length[255]',
        'cv_path' => 'permit_empty|max_length[500]',
        'status' => 'permit_empty|in_list[pending,reviewed,contacted,hired,rejected]'
    ];

    protected $validationMessages = [
        'job_type' => [
            'required' => 'Please select a job type.',
            'in_list' => 'Please select a valid job type.'
        ],
        'name' => [
            'required' => 'Please enter your full name.',
            'min_length' => 'Name must be at least 2 characters long.',
            'max_length' => 'Name cannot exceed 255 characters.'
        ],
        'phone' => [
            'required' => 'Please enter your phone number.',
            'min_length' => 'Phone number must be at least 10 characters long.',
            'max_length' => 'Phone number cannot exceed 50 characters.'
        ],
        'email' => [
            'required' => 'Please enter your email address.',
            'valid_email' => 'Please enter a valid email address.',
            'max_length' => 'Email cannot exceed 255 characters.'
        ],
        'country_of_living' => [
            'required' => 'Please enter your country of living.',
            'min_length' => 'Country name must be at least 2 characters long.',
            'max_length' => 'Country name cannot exceed 100 characters.'
        ],
        'county' => [
            'required' => 'Please enter your county.',
            'min_length' => 'County name must be at least 2 characters long.',
            'max_length' => 'County name cannot exceed 100 characters.'
        ],
        'type_of_work' => [
            'required' => 'Please select your type of work preference.',
            'in_list' => 'Please select a valid work type.'
        ],
        'availability_type' => [
            'required' => 'Please select your availability.',
            'in_list' => 'Please select a valid availability option.'
        ],
        'start_date' => [
            'required' => 'Please select your ideal start date.',
            'in_list' => 'Please select a valid start date option.'
        ],
        'message' => [
            'max_length' => 'Message cannot exceed 1000 characters.'
        ],
        'cv_filename' => [
            'max_length' => 'CV filename cannot exceed 255 characters.'
        ],
        'cv_path' => [
            'max_length' => 'CV path cannot exceed 500 characters.'
        ],
        'status' => [
            'in_list' => 'Please select a valid status.'
        ]
    ];

    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    /**
     * Get registrations by status
     */
    public function getByStatus($status = 'pending')
    {
        return $this->where('status', $status)->orderBy('created_at', 'DESC')->findAll();
    }

    /**
     * Get registrations by job type
     */
    public function getByJobType($jobType)
    {
        return $this->where('job_type', $jobType)->orderBy('created_at', 'DESC')->findAll();
    }

    /**
     * Get recent registrations
     */
    public function getRecent($limit = 10)
    {
        return $this->orderBy('created_at', 'DESC')->limit($limit)->findAll();
    }

    /**
     * Get registration statistics
     */
    public function getStatistics()
    {
        $stats = [];
        
        // Total registrations
        $stats['total'] = $this->countAllResults();
        
        // By status
        $stats['by_status'] = $this->select('status, COUNT(*) as count')
            ->groupBy('status')
            ->findAll();
        
        // By job type
        $stats['by_job_type'] = $this->select('job_type, COUNT(*) as count')
            ->groupBy('job_type')
            ->orderBy('count', 'DESC')
            ->findAll();
        
        // Recent registrations (last 30 days)
        $stats['recent_30_days'] = $this->where('created_at >=', date('Y-m-d H:i:s', strtotime('-30 days')))
            ->countAllResults();
        
        return $stats;
    }

    /**
     * Check if email already exists
     */
    public function emailExists($email, $excludeId = null)
    {
        $builder = $this->where('email', $email);
        
        if ($excludeId) {
            $builder->where('id !=', $excludeId);
        }
        
        return $builder->countAllResults() > 0;
    }

    /**
     * Check if phone already exists
     */
    public function phoneExists($phone, $excludeId = null)
    {
        $builder = $this->where('phone', $phone);
        
        if ($excludeId) {
            $builder->where('id !=', $excludeId);
        }
        
        return $builder->countAllResults() > 0;
    }
}
