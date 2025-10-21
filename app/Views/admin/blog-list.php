<?= $this->include('header') ?>
<style>
  footer{display:none}

  /* Admin Layout */
  .admin_layout {
    display: flex;
    min-height: 100vh;
  }

  .admin_sidebar {
    width: 250px;
    background: #2c3e50;
    color: white;
    padding: 20px;
  }

  .admin_sidebar h3 {
    margin-bottom: 30px;
    color: #ecf0f1;
  }

  .admin_sidebar a {
    display: block;
    color: #bdc3c7;
    text-decoration: none;
    padding: 12px 15px;
    margin-bottom: 5px;
    border-radius: 5px;
    transition: all 0.3s;
  }

  .admin_sidebar a:hover,
  .admin_sidebar a.active {
    background: #34495e;
    color: white;
  }

  .admin_content {
    flex: 1;
    padding: 30px;
    background: #f8f9fa;
  }

  .admin_header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
  }

  .admin_header h1 {
    color: #2c3e50;
    margin: 0;
  }

  .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s;
  }

  .btn-primary {
    background: #3498db;
    color: white;
  }

  .btn-primary:hover {
    background: #2980b9;
  }

  .btn-danger {
    background: #e74c3c;
    color: white;
  }

  .btn-danger:hover {
    background: #c0392b;
  }

  .btn-warning {
    background: #f39c12;
    color: white;
  }

  .btn-warning:hover {
    background: #e67e22;
  }

  .btn-success {
    background: #27ae60;
    color: white;
  }

  .btn-success:hover {
    background: #229954;
  }

  /* Blog List */
  .blog_list {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
  }

  .blog_item {
    display: flex;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid #ecf0f1;
    transition: background 0.3s;
  }

  .blog_item:hover {
    background: #f8f9fa;
  }

  .blog_item:last-child {
    border-bottom: none;
  }

  .blog_image {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 20px;
  }

  .blog_content {
    flex: 1;
  }

  .blog_title {
    font-size: 18px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 5px;
  }

  .blog_meta {
    color: #7f8c8d;
    font-size: 14px;
    margin-bottom: 5px;
  }

  .blog_excerpt {
    color: #5d6d7e;
    font-size: 14px;
    line-height: 1.4;
  }

  .blog_actions {
    display: flex;
    gap: 10px;
  }

  .status_badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
  }

  .status_draft {
    background: #f39c12;
    color: white;
  }

  .status_published {
    background: #27ae60;
    color: white;
  }

  .status_archived {
    background: #95a5a6;
    color: white;
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

  .alert-danger {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
  }
</style>

<div class="admin_layout">
  <!-- Sidebar -->
  <div class="admin_sidebar">
    <h3>Admin Panel</h3>
    <a href="<?= base_url() ?>admin/dashboard">Dashboard</a>
    <a href="<?= base_url() ?>admin/lead-manager" class="active">Lead Manager</a>
    <a href="<?= base_url() ?>admin/blog-list" class="active">Blog Management</a>
    <a href="<?= base_url() ?>admin/logout">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="admin_content">
    <div class="admin_header">
      <h1>Blog Management</h1>
      <a href="<?= base_url() ?>admin/blog-add" class="btn btn-primary">Add New Post</a>
    </div>

    <!-- Success/Error Messages -->
    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>

    <!-- Blog List -->
    <div class="blog_list">
      <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
          <div class="blog_item">
            <img src="<?= esc($post['image'] ?? 'default-blog.jpg') ?>" 
                 alt="<?= esc($post['image_alt']) ?>" 
                 class="blog_image">
            
            <div class="blog_content">
              <div class="blog_title"><?= esc($post['title']) ?></div>
              <div class="blog_meta">
                <strong>Category:</strong> <?= esc($post['category']) ?> | 
                <strong>Date:</strong> <?= date('M d, Y', strtotime($post['date'])) ?> | 
                <span class="status_badge status_<?= esc($post['status']) ?>"><?= esc($post['status']) ?></span>
              </div>
              <div class="blog_excerpt">
                <?= esc(substr($post['main_description'], 0, 150)) ?>...
              </div>
            </div>

            <div class="blog_actions">
              <a href="<?= base_url() ?>admin/blog-edit/<?= $post['id'] ?>" class="btn btn-warning">Edit</a>
              <a href="<?= base_url() ?>admin/blog-delete/<?= $post['id'] ?>" 
                 class="btn btn-danger" 
                 onclick="return confirm('Are you sure you want to delete this blog post?')">Delete</a>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="blog_item">
          <div class="blog_content">
            <div class="blog_title">No blog posts found</div>
            <div class="blog_excerpt">Start by creating your first blog post.</div>
          </div>
          <div class="blog_actions">
            <a href="<?= base_url() ?>admin/blog-add" class="btn btn-primary">Add First Post</a>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?= $this->include('footer') ?>
