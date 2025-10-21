<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ContactModel;
use App\Models\KeeperFormModel;
use App\Models\SubscriptionModel;

class Admin extends BaseController
{
    protected $adminModel;
    protected $contactModel;
    protected $keeperModel;
    protected $subscriptionModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->contactModel = new ContactModel();
        $this->keeperModel = new KeeperFormModel();
        $this->subscriptionModel = new SubscriptionModel();
    }

    public function index()
    {
        // Redirect to login if not authenticated
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }
        
        return redirect()->to('/admin/lead-manager');
    }

    public function login()
    {
        // Redirect to dashboard if already logged in
        if ($this->isLoggedIn()) {
            return redirect()->to('/admin/lead-manager');
        }

        return view('admin/login');
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'Please enter both email and password.');
        }

        // Debug: Check if admin exists
        $adminExists = $this->adminModel->where('email', $email)->first();
        
        if (!$adminExists) {
            return redirect()->back()->with('error', 'Admin not found with email: ' . $email);
        }

        $admin = $this->adminModel->verifyPassword($email, $password);

        if ($admin) {
            // Set session
            $sessionData = [
                'admin_id' => $admin['id'],
                'admin_email' => $admin['email'],
                'admin_name' => $admin['name'],
                'is_admin_logged_in' => true
            ];
            session()->set($sessionData);

            return redirect()->to('/admin/lead-manager')->with('success', 'Welcome back, ' . $admin['name'] . '!');
        } else {
            return redirect()->back()->with('error', 'Invalid password for email: ' . $email . '. Please check your password or contact support.');
        }
    }

    public function dashboard()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        // Get counts for dashboard
        $data = [
            'contact_count' => $this->contactModel->countAllResults(),
            'keeper_count' => $this->keeperModel->countAllResults(),
            'subscription_count' => $this->subscriptionModel->countAllResults(),
            'recent_contacts' => $this->contactModel->orderBy('id', 'DESC')->limit(5)->find(),
            'recent_keepers' => $this->keeperModel->orderBy('id', 'DESC')->limit(5)->find(),
        ];

        return redirect()->to('/admin/lead-manager');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login')->with('success', 'You have been logged out successfully.');
    }

    private function isLoggedIn()
    {
        return session()->get('is_admin_logged_in') === true;
    }
    // for lead manager
   public function LeadManagerView(){
    if (!$this->isLoggedIn()) {
        return redirect()->to('/admin/login');
    }

    $db = \Config\Database::connect();

    $contactData = $db->table('contact')->orderBy('id', 'DESC')->get()->getResultArray();
    $keeperData = $db->table('keeper_forms')->orderBy('id', 'DESC')->get()->getResultArray();
    $registrationData = $db->table('registrations')->orderBy('id', 'DESC')->get()->getResultArray();
    $subscriptionData = $db->table('subscriptions')->orderBy('id', 'DESC')->get()->getResultArray();

    return view('admin/lead-manager', [
        'contactData' => $contactData,
        'keeperData' => $keeperData,
        'registrationData' => $registrationData,
        'subscriptionData' => $subscriptionData
    ]);
}


    // to show lead manager data a
    public function LeadManageData(){
        
    }

    // Update lead status
    public function updateLeadStatus()
    {
        if (!$this->isLoggedIn()) {
            return $this->response->setJSON(['success' => false, 'message' => 'Unauthorized']);
        }

        $table = $this->request->getPost('table');
        $id = $this->request->getPost('id');
        $status = $this->request->getPost('status');

        // Debug: Log the received values
        log_message('debug', 'Status update request - Table: ' . $table . ', ID: ' . $id . ', Status: ' . $status);

        // Validate inputs
        if (empty($table) || empty($id) || empty($status)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Missing required parameters']);
        }

        // Validate status values
        $validStatuses = ['new', 'won', 'lost'];
        if (!in_array($status, $validStatuses)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid status: ' . $status . '. Valid statuses: ' . implode(', ', $validStatuses)]);
        }

        // Validate table names
        $validTables = ['contact', 'keeper_forms', 'registrations', 'subscriptions'];
        if (!in_array($table, $validTables)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid table']);
        }

        try {
            $db = \Config\Database::connect();
            
            // Check if status column exists
            $columns = $db->getFieldNames($table);
            if (!in_array('status', $columns)) {
                return $this->response->setJSON(['success' => false, 'message' => 'Status column does not exist in table ' . $table . '. Please run the SQL queries to add status fields.']);
            }
            
            // Update the status
            $result = $db->table($table)
                ->where('id', $id)
                ->update(['status' => $status]);

            if ($result) {
                return $this->response->setJSON(['success' => true, 'message' => 'Status updated successfully']);
            } else {
                return $this->response->setJSON(['success' => false, 'message' => 'Failed to update status - no rows affected']);
            }
        } catch (\Exception $e) {
            return $this->response->setJSON(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
        }
    }

    // Blog Management
    public function blogList()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $blogModel = new \App\Models\BlogModel();
        $posts = $blogModel->orderBy('created_at', 'DESC')->findAll();

        return view('admin/blog-list', [
            'posts' => $posts
        ]);
    }

    public function blogAdd()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        return view('admin/blog-add');
    }

    public function blogEdit($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $blogModel = new \App\Models\BlogModel();
        $post = $blogModel->find($id);

        if (!$post) {
            return redirect()->to('/admin/blog-list')->with('error', 'Blog post not found');
        }

        return view('admin/blog-edit', [
            'post' => $post
        ]);
    }

    public function blogSave()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $blogModel = new \App\Models\BlogModel();
        
        $data = [
            'meta_title' => $this->request->getPost('meta_title'),
            'meta_description' => $this->request->getPost('meta_description'),
            'title' => $this->request->getPost('title'),
            'main_description' => $this->request->getPost('main_description'),
            'image' => $this->request->getPost('image'),
            'image_alt' => $this->request->getPost('image_alt'),
            'date' => $this->request->getPost('date'),
            'slug' => $this->request->getPost('slug'),
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status') ?: 'draft'
        ];

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = $blogModel->generateSlug($data['title']);
        }

        // Validate the data
        if (!$blogModel->validate($data)) {
            return redirect()->back()->withInput()->with('errors', $blogModel->errors());
        }

        if ($blogModel->insert($data)) {
            return redirect()->to('/admin/blog-list')->with('success', 'Blog post created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to create blog post');
        }
    }

    public function blogUpdate($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }
        
        // Debug: Log that the method is being called
        log_message('info', 'BlogUpdate method called for ID: ' . $id);
        log_message('info', 'Request method: ' . $this->request->getMethod());
        log_message('info', 'Is logged in: ' . ($this->isLoggedIn() ? 'yes' : 'no'));

        $blogModel = new \App\Models\BlogModel();
        $post = $blogModel->find($id);

        if (!$post) {
            return redirect()->to('/admin/blog-list')->with('error', 'Blog post not found');
        }

        $data = [
            'meta_title' => $this->request->getPost('meta_title'),
            'meta_description' => $this->request->getPost('meta_description'),
            'title' => $this->request->getPost('title'),
            'main_description' => $this->request->getPost('main_description'),
            'image' => $this->request->getPost('image'),
            'image_alt' => $this->request->getPost('image_alt'),
            'date' => $this->request->getPost('date'),
            'slug' => $this->request->getPost('slug'),
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status') ?: 'draft'
        ];

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = $blogModel->generateSlug($data['title'], $id);
        }

        // Log the data for debugging
        log_message('debug', 'Blog Update Data: ' . json_encode($data));
        log_message('debug', 'Blog Update ID: ' . $id);
        log_message('debug', 'Blog Update Request Method: ' . $this->request->getMethod());

        // Validate the data
        if (!$blogModel->validate($data)) {
            log_message('error', 'Blog Update Validation Errors: ' . json_encode($blogModel->errors()));
            return redirect()->back()->withInput()->with('errors', $blogModel->errors());
        }

        if ($blogModel->update($id, $data)) {
            log_message('info', 'Blog post updated successfully: ID ' . $id);
            return redirect()->to('/admin/blog-list')->with('success', 'Blog post updated successfully');
        } else {
            log_message('error', 'Failed to update blog post: ID ' . $id);
            return redirect()->back()->withInput()->with('error', 'Failed to update blog post');
        }
    }

    public function blogDelete($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $blogModel = new \App\Models\BlogModel();
        
        if ($blogModel->delete($id)) {
            return redirect()->to('/admin/blog-list')->with('success', 'Blog post deleted successfully');
        } else {
            return redirect()->to('/admin/blog-list')->with('error', 'Failed to delete blog post');
        }
    }

    public function uploadImage()
    {
        if (!$this->isLoggedIn()) {
            return $this->response->setJSON(['success' => false, 'message' => 'Unauthorized']);
        }

        $file = $this->request->getFile('image_file');
        
        if (!$file || !$file->isValid()) {
            return $this->response->setJSON(['success' => false, 'message' => 'No valid file uploaded']);
        }

        // Validate file type
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (!in_array($file->getMimeType(), $allowedTypes)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid file type. Only JPEG, PNG, GIF, and WebP are allowed']);
        }

        // Validate file size (max 5MB)
        if ($file->getSize() > 5 * 1024 * 1024) {
            return $this->response->setJSON(['success' => false, 'message' => 'File too large. Maximum size is 5MB']);
        }

        try {
            // Generate unique filename
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/blog-images', $newName);
            
            $imageUrl = base_url('uploads/blog-images/' . $newName);
            
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Image uploaded successfully',
                'image_url' => $imageUrl,
                'filename' => $newName
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['success' => false, 'message' => 'Upload failed: ' . $e->getMessage()]);
        }
    }
}
