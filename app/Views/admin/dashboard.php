<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Spring Flowers</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/own.css">
    <style>
        body {
            background: #f9f8f6;
            font-family: Arial, sans-serif;
        }
        .admin-header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .admin-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-logo {
            display: flex;
            align-items: center;
        }
        .admin-logo img {
            max-width: 120px;
            margin-right: 15px;
        }
        .admin-logo h1 {
            margin: 0;
            color: #333;
            font-size: 24px;
        }
        .admin-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .admin-nav a {
            color: #333;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .admin-nav a:hover {
            background: #f0f0f0;
        }
        .btn-logout {
            background: #dc3545;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-logout:hover {
            background: #c82333;
            color: white;
        }
        .dashboard-content {
            padding: 0 15px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .stat-card h3 {
            margin: 0 0 10px 0;
            color: #333;
            font-size: 32px;
        }
        .stat-card p {
            margin: 0;
            color: #666;
            font-size: 16px;
        }
        .recent-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .recent-section h3 {
            margin: 0 0 20px 0;
            color: #333;
            font-size: 20px;
        }
        .recent-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .recent-item:last-child {
            border-bottom: none;
        }
        .recent-item .info {
            flex: 1;
        }
        .recent-item .info strong {
            color: #333;
        }
        .recent-item .info span {
            color: #666;
            font-size: 14px;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <div class="admin-logo">
                <img src="<?php echo base_url() ?>assets/img/logo.png" alt="Spring Flowers Logo">
                <h1>Admin Dashboard</h1>
            </div>
            <div class="admin-nav">
                <span>Welcome, <?= session()->get('admin_name') ?></span>
                <a href="<?php echo base_url() ?>" target="_blank">View Site</a>
                <a href="<?php echo base_url() ?>admin/logout" class="btn-logout">Logout</a>
            </div>
        </div>
    </div>

    <div class="container dashboard-content">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <div class="stats-grid">
            <div class="stat-card">
                <h3><?= $contact_count ?></h3>
                <p>Contact Form Submissions</p>
            </div>
            <div class="stat-card">
                <h3><?= $keeper_count ?></h3>
                <p>Keeper Form Submissions</p>
            </div>
            <div class="stat-card">
                <h3><?= $subscription_count ?></h3>
                <p>Newsletter Subscriptions</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="recent-section">
                    <h3>Recent Contact Submissions</h3>
                    <?php if (!empty($recent_contacts)): ?>
                        <?php foreach ($recent_contacts as $contact): ?>
                            <div class="recent-item">
                                <div class="info">
                                    <strong><?= esc($contact['name']) ?></strong><br>
                                    <span><?= esc($contact['email']) ?> • <?= esc($contact['service']) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No recent contact submissions.</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="recent-section">
                    <h3>Recent Keeper Form Submissions</h3>
                    <?php if (!empty($recent_keepers)): ?>
                        <?php foreach ($recent_keepers as $keeper): ?>
                            <div class="recent-item">
                                <div class="info">
                                    <strong><?= esc($keeper['name']) ?></strong><br>
                                    <span><?= esc($keeper['phone']) ?> • <?= esc($keeper['city']) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No recent keeper form submissions.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
