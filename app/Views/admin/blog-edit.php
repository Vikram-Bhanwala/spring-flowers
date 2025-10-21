<?= $this->include('header') ?>

<style>
  footer{display:none}

  /* Admin Layout */
  .admin_container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  .admin_wrapper {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
  }

  .admin_header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 30px;
    background: #f8f9fa;
    border-bottom: 1px solid #ecf0f1;
  }

  .admin_nav {
    display: flex;
    gap: 10px;
    align-items: center;
  }

  .admin_header h1 {
    color: #2c3e50;
    margin: 0;
    font-size: 24px;
  }

  .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s;
    display: inline-block;
  }

  .btn-primary {
    background: #3498db;
    color: white;
  }

  .btn-primary:hover {
    background: #2980b9;
  }

  .btn-secondary {
    background: #95a5a6;
    color: white;
  }

  .btn-secondary:hover {
    background: #7f8c8d;
  }

  /* Form Styles */
  .form_container {
    padding: 30px;
  }

  .form_group {
    margin-bottom: 25px;
  }

  .form_group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #2c3e50;
  }

  .form_group input,
  .form_group textarea,
  .form_group select {
    width: 100%;
    padding: 12px;
    border: 2px solid #ecf0f1;
    border-radius: 5px;
    font-size: 14px;
    transition: border-color 0.3s;
    box-sizing: border-box;
  }

  .form_group input:focus,
  .form_group textarea:focus,
  .form_group select:focus {
    outline: none;
    border-color: #3498db;
  }

  .form_group textarea {
    min-height: 120px;
    resize: vertical;
  }

  .form_actions {
    display: flex;
    gap: 15px;
    justify-content: flex-end;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #ecf0f1;
  }

  .form_row {
    display: flex;
    gap: 20px;
  }

  .form_row .form_group {
    flex: 1;
  }

  .error {
    color: #e74c3c;
    font-size: 12px;
    margin-top: 5px;
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

  .alert ul {
    margin: 0;
    padding-left: 20px;
  }

  /* Image Upload Styles */
  .image_upload_section {
    border: 2px solid #ecf0f1;
    border-radius: 8px;
    padding: 20px;
    background: #f8f9fa;
  }

  .upload_tabs {
    display: flex;
    gap: 5px;
    margin-bottom: 20px;
    border-bottom: 2px solid #ecf0f1;
  }

  .tab_button {
    padding: 10px 20px;
    border: none;
    background: transparent;
    cursor: pointer;
    border-radius: 5px 5px 0 0;
    transition: all 0.3s;
    font-weight: 500;
  }

  .tab_button.active {
    background: #3498db;
    color: white;
  }

  .tab_button:hover:not(.active) {
    background: #e9ecef;
  }

  .tab_content {
    display: none;
  }

  .tab_content.active {
    display: block;
  }

  .upload_area {
    border: 2px dashed #3498db;
    border-radius: 8px;
    padding: 40px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s;
    background: white;
  }

  .upload_area:hover {
    border-color: #2980b9;
    background: #f8f9fa;
  }

  .upload_area.dragover {
    border-color: #27ae60;
    background: #e8f5e8;
  }

  .upload_placeholder {
    color: #7f8c8d;
  }

  .upload_icon {
    font-size: 48px;
    display: block;
    margin-bottom: 10px;
  }

  .upload_info {
    font-size: 12px;
    color: #95a5a6;
    margin-top: 5px;
  }

  .progress_bar {
    width: 100%;
    height: 8px;
    background: #ecf0f1;
    border-radius: 4px;
    overflow: hidden;
    margin: 10px 0;
  }

  .progress_fill {
    height: 100%;
    background: #3498db;
    width: 0%;
    transition: width 0.3s;
  }

  .progress_text {
    text-align: center;
    color: #7f8c8d;
    font-size: 14px;
  }

  #current_image_preview,
  #new_image_preview_img {
    max-width: 300px;
    max-height: 200px;
    border: 2px solid #ddd;
    border-radius: 8px;
    margin-top: 10px;
  }

  .current_image,
  #new_image_preview {
    text-align: center;
  }

  .btn-sm {
    padding: 5px 15px;
    font-size: 12px;
  }

  .btn-danger {
    background: #e74c3c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn-danger:hover {
    background: #c0392b;
  }

  .btn-info {
    background: #17a2b8;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn-info:hover {
    background: #138496;
  }

  @media (max-width: 768px) {
    .form_row {
      flex-direction: column;
      gap: 0;
    }
    
    .form_actions {
      flex-direction: column;
    }

    .upload_options {
      flex-direction: column;
    }
  }
</style>

<div class="admin_container">
  <div class="admin_wrapper">
    <div class="admin_header">
      <h1>Edit Blog Post</h1>
      <div class="admin_nav">
        <a href="<?= base_url() ?>admin/blog-list" class="btn btn-secondary">← Back to List</a>
        <a href="<?= base_url() ?>admin/blog-add" class="btn btn-primary">+ Add New Post</a>
      </div>
    </div>

    <div class="form_container">
      <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
      <?php endif; ?>
      
      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>
      
      <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
          <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      
      <form action="<?= base_url() ?>admin/blog-update/<?= $post['id'] ?>" method="POST">
        
        <!-- SEO Section -->
        <h3 style="color: #2c3e50; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #ecf0f1;">SEO Settings</h3>
        
        <div class="form_group">
          <label for="meta_title">Meta Title *</label>
          <input type="text" name="meta_title" id="meta_title" value="<?= old('meta_title', $post['meta_title']) ?>" required>
          <?php if (isset($errors['meta_title'])): ?>
            <div class="error"><?= $errors['meta_title'] ?></div>
          <?php endif; ?>
        </div>

        <div class="form_group">
          <label for="meta_description">Meta Description</label>
          <textarea name="meta_description" id="meta_description" rows="3"><?= old('meta_description', $post['meta_description']) ?></textarea>
          <?php if (isset($errors['meta_description'])): ?>
            <div class="error"><?= $errors['meta_description'] ?></div>
          <?php endif; ?>
        </div>

        <!-- Content Section -->
        <h3 style="color: #2c3e50; margin: 30px 0 20px 0; padding-bottom: 10px; border-bottom: 2px solid #ecf0f1;">Content</h3>
        
        <div class="form_group">
          <label for="title">Title *</label>
          <input type="text" name="title" id="title" value="<?= old('title', $post['title']) ?>" required>
          <?php if (isset($errors['title'])): ?>
            <div class="error"><?= $errors['title'] ?></div>
          <?php endif; ?>
        </div>

        <div class="form_group">
          <label for="main_description">Main Content *</label>
          <textarea name="main_description" id="main_description" rows="15" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5;"><?= old('main_description', $post['main_description']) ?></textarea>
          <small style="color: #666; margin-top: 5px; display: block;">
            You can use HTML tags for formatting: &lt;b&gt;bold&lt;/b&gt;, &lt;i&gt;italic&lt;/i&gt;, &lt;br&gt; for line breaks, &lt;p&gt; for paragraphs, etc.
          </small>
          <?php if (isset($errors['main_description'])): ?>
            <div class="error"><?= $errors['main_description'] ?></div>
          <?php endif; ?>
        </div>

        <!-- Media Section -->
        <h3 style="color: #2c3e50; margin: 30px 0 20px 0; padding-bottom: 10px; border-bottom: 2px solid #ecf0f1;">Media</h3>
        
        <div class="form_row">
          <div class="form_group">
            <label for="image">Featured Image</label>
            <div class="image_upload_section">
              <div class="upload_tabs">
                <button type="button" class="tab_button active" data-tab="url">📷 Image URL</button>
                <button type="button" class="tab_button" data-tab="upload">📁 Upload File</button>
              </div>
              
              <div id="url_tab" class="tab_content active">
                <input type="url" name="image" id="image" value="<?= old('image', $post['image']) ?>" placeholder="https://example.com/image.jpg">
                <button type="button" id="preview_url_btn" class="btn btn-info" style="margin-top: 10px;">Preview Image</button>
              </div>
              
              <div id="upload_tab" class="tab_content">
                <div class="upload_area" id="upload_area">
                  <div class="upload_placeholder">
                    <i class="upload_icon">📁</i>
                    <p>Click to select image or drag & drop</p>
                    <p class="upload_info">Supports: JPG, PNG, GIF, WebP (Max 5MB)</p>
                  </div>
                  <input type="file" name="image_file" id="image_file" accept="image/*" style="display: none;">
                </div>
                <div id="upload_progress" style="display: none;">
                  <div class="progress_bar">
                    <div class="progress_fill"></div>
                  </div>
                  <p class="progress_text">Uploading...</p>
                </div>
              </div>
              
              <div id="image_preview_container" style="margin-top: 15px;">
                <?php if (!empty($post['image'])): ?>
                  <div class="current_image">
                    <p><strong>Current Image:</strong></p>
                    <img src="<?= $post['image'] ?>" alt="Current featured image" id="current_image_preview">
                    <button type="button" class="btn btn-danger btn-sm" id="remove_image_btn" style="margin-top: 10px;">Remove Image</button>
                  </div>
                <?php endif; ?>
                <div id="new_image_preview" style="display: none;">
                  <p><strong>New Image:</strong></p>
                  <img id="new_image_preview_img" alt="New image preview">
                </div>
              </div>
            </div>
            <?php if (isset($errors['image'])): ?>
              <div class="error"><?= $errors['image'] ?></div>
            <?php endif; ?>
          </div>

          <div class="form_group">
            <label for="image_alt">Image Alt Text</label>
            <input type="text" name="image_alt" id="image_alt" value="<?= old('image_alt', $post['image_alt']) ?>" placeholder="Describe the image">
            <?php if (isset($errors['image_alt'])): ?>
              <div class="error"><?= $errors['image_alt'] ?></div>
            <?php endif; ?>
          </div>
        </div>

        <!-- Publishing Section -->
        <h3 style="color: #2c3e50; margin: 30px 0 20px 0; padding-bottom: 10px; border-bottom: 2px solid #ecf0f1;">Publishing</h3>
        
        <div class="form_row">
          <div class="form_group">
            <label for="date">Publish Date *</label>
            <input type="date" name="date" id="date" value="<?= old('date', $post['date']) ?>" required>
            <?php if (isset($errors['date'])): ?>
              <div class="error"><?= $errors['date'] ?></div>
            <?php endif; ?>
          </div>

          <div class="form_group">
            <label for="slug">URL Slug *</label>
            <input type="text" name="slug" id="slug" value="<?= old('slug', $post['slug']) ?>" required>
            <?php if (isset($errors['slug'])): ?>
              <div class="error"><?= $errors['slug'] ?></div>
            <?php endif; ?>
          </div>
        </div>

        <div class="form_row">
          <div class="form_group">
            <label for="category">Category *</label>
            <input type="text" name="category" id="category" value="<?= old('category', $post['category']) ?>" required>
            <?php if (isset($errors['category'])): ?>
              <div class="error"><?= $errors['category'] ?></div>
            <?php endif; ?>
          </div>

          <div class="form_group">
            <label for="status">Status</label>
            <select name="status" id="status">
              <option value="draft" <?= old('status', $post['status']) == 'draft' ? 'selected' : '' ?>>Draft</option>
              <option value="published" <?= old('status', $post['status']) == 'published' ? 'selected' : '' ?>>Published</option>
              <option value="archived" <?= old('status', $post['status']) == 'archived' ? 'selected' : '' ?>>Archived</option>
            </select>
            <?php if (isset($errors['status'])): ?>
              <div class="error"><?= $errors['status'] ?></div>
            <?php endif; ?>
          </div>
        </div>

        <div class="form_actions">
          <a href="<?= base_url() ?>admin/blog-list" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Update Blog Post</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
// Auto-generate slug from title
document.getElementById('title').addEventListener('input', function() {
  const title = this.value;
  const slug = title.toLowerCase()
    .replace(/[^a-z0-9\s-]/g, '')
    .replace(/\s+/g, '-')
    .replace(/-+/g, '-')
    .trim('-');
  document.getElementById('slug').value = slug;
});

// Image Upload System
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  const textarea = document.getElementById('main_description');
  
  // Tab functionality
  const tabButtons = document.querySelectorAll('.tab_button');
  const tabContents = document.querySelectorAll('.tab_content');
  
  tabButtons.forEach(button => {
    button.addEventListener('click', function() {
      const tabName = this.getAttribute('data-tab');
      
      // Remove active class from all buttons and contents
      tabButtons.forEach(btn => btn.classList.remove('active'));
      tabContents.forEach(content => content.classList.remove('active'));
      
      // Add active class to clicked button and corresponding content
      this.classList.add('active');
      document.getElementById(tabName + '_tab').classList.add('active');
    });
  });
  
  // URL preview functionality
  const previewUrlBtn = document.getElementById('preview_url_btn');
  const imageInput = document.getElementById('image');
  
  previewUrlBtn.addEventListener('click', function() {
    const imageUrl = imageInput.value.trim();
    if (imageUrl) {
      const newPreview = document.getElementById('new_image_preview');
      const newPreviewImg = document.getElementById('new_image_preview_img');
      
      newPreviewImg.src = imageUrl;
      newPreviewImg.onload = function() {
        newPreview.style.display = 'block';
        document.getElementById('current_image').style.display = 'none';
      };
      newPreviewImg.onerror = function() {
        alert('Could not load image. Please check the URL.');
      };
    } else {
      alert('Please enter an image URL first.');
    }
  });
  
  // File upload functionality
  const uploadArea = document.getElementById('upload_area');
  const imageFile = document.getElementById('image_file');
  const uploadProgress = document.getElementById('upload_progress');
  const progressFill = document.querySelector('.progress_fill');
  const progressText = document.querySelector('.progress_text');
  
  // Click to upload
  uploadArea.addEventListener('click', function() {
    imageFile.click();
  });
  
  // Drag and drop
  uploadArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    this.classList.add('dragover');
  });
  
  uploadArea.addEventListener('dragleave', function(e) {
    e.preventDefault();
    this.classList.remove('dragover');
  });
  
  uploadArea.addEventListener('drop', function(e) {
    e.preventDefault();
    this.classList.remove('dragover');
    
    const files = e.dataTransfer.files;
    if (files.length > 0) {
      imageFile.files = files;
      handleFileUpload(files[0]);
    }
  });
  
  // File input change
  imageFile.addEventListener('change', function(e) {
    if (e.target.files.length > 0) {
      handleFileUpload(e.target.files[0]);
    }
  });
  
  function handleFileUpload(file) {
    // Validate file type
    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    if (!allowedTypes.includes(file.type)) {
      alert('Invalid file type. Please select a JPEG, PNG, GIF, or WebP image.');
      return;
    }
    
    // Validate file size (5MB)
    if (file.size > 5 * 1024 * 1024) {
      alert('File too large. Maximum size is 5MB.');
      return;
    }
    
    // Show progress
    uploadArea.style.display = 'none';
    uploadProgress.style.display = 'block';
    progressFill.style.width = '0%';
    progressText.textContent = 'Uploading...';
    
    // Upload file
    const formData = new FormData();
    formData.append('image_file', file);
    
    fetch('<?= base_url() ?>admin/upload-image', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Update image input with uploaded URL
        imageInput.value = data.image_url;
        
        // Show preview
        const newPreview = document.getElementById('new_image_preview');
        const newPreviewImg = document.getElementById('new_image_preview_img');
        newPreviewImg.src = data.image_url;
        newPreview.style.display = 'block';
        document.getElementById('current_image').style.display = 'none';
        
        // Switch to URL tab
        document.querySelector('[data-tab="url"]').click();
        
        progressText.textContent = 'Upload successful!';
        progressFill.style.width = '100%';
        
        setTimeout(() => {
          uploadProgress.style.display = 'none';
          uploadArea.style.display = 'block';
        }, 2000);
      } else {
        alert('Upload failed: ' + data.message);
        uploadProgress.style.display = 'none';
        uploadArea.style.display = 'block';
      }
    })
    .catch(error => {
      console.error('Upload error:', error);
      alert('Upload failed. Please try again.');
      uploadProgress.style.display = 'none';
      uploadArea.style.display = 'block';
    });
  }
  
  // Remove image functionality
  const removeImageBtn = document.getElementById('remove_image_btn');
  if (removeImageBtn) {
    removeImageBtn.addEventListener('click', function() {
      if (confirm('Are you sure you want to remove the current image?')) {
        imageInput.value = '';
        document.getElementById('current_image').style.display = 'none';
      }
    });
  }
  
  // Form validation
  form.addEventListener('submit', function(e) {
    if (!textarea.value || textarea.value.trim() === '') {
      e.preventDefault();
      alert('Please enter some content for your blog post.');
      textarea.focus();
      return false;
    }
    
    const submitBtn = this.querySelector('button[type="submit"]');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Updating...';
    }
    
    console.log('Form submitting with content:', textarea.value);
  });
});
</script>

<?= $this->include('footer') ?>
