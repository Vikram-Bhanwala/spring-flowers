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

    $contactData = $db->table('contact')->get()->getResultArray();
    $keeperData = $db->table('keeper_forms')->get()->getResultArray();
    $registrationData = $db->table('registrations')->get()->getResultArray();
    $subscriptionData = $db->table('subscriptions')->get()->getResultArray();

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
}
