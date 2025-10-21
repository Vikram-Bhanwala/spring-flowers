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

  .btn-secondary {
    background: #95a5a6;
    color: white;
  }

  .btn-secondary:hover {
    background: #7f8c8d;
  }

  /* Form Styles */
  .form_container {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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

  .form_group textarea.large {
    min-height: 200px;
  }

  /* Rich Text Editor Styles */
  .editor-container {
    border: 2px solid #ecf0f1;
    border-radius: 5px;
    overflow: hidden;
  }

  .editor-toolbar {
    background: #f8f9fa;
    padding: 10px;
    border-bottom: 1px solid #ecf0f1;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }

  .editor-btn {
    padding: 8px 12px;
    border: 1px solid #ddd;
    background: white;
    cursor: pointer;
    border-radius: 3px;
    font-size: 12px;
    transition: all 0.3s;
  }

  .editor-btn:hover {
    background: #e9ecef;
  }

  .editor-btn.active {
    background: #3498db;
    color: white;
  }

  .editor-content {
    min-height: 300px;
    padding: 15px;
    border: none;
    outline: none;
    font-family: Arial, sans-serif;
    line-height: 1.6;
  }

  .editor-content:focus {
    outline: none;
  }

  /* Code styling in editor */
  .editor-content code {
    background: #f4f4f4;
    padding: 2px 6px;
    border-radius: 3px;
    font-family: 'Courier New', monospace;
    font-size: 0.9em;
    color: #e74c3c;
    border: 1px solid #ddd;
  }

  .editor-content pre {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 5px;
    padding: 15px;
    margin: 10px 0;
    overflow-x: auto;
  }

  .editor-content pre code {
    background: none;
    border: none;
    padding: 0;
    color: #2c3e50;
    font-size: 0.9em;
    line-height: 1.4;
  }

  /* Image Upload Modal */
  .upload-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1000;
  }

  .upload-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    width: 90%;
    max-width: 500px;
  }

  .upload-modal h3 {
    margin: 0 0 20px 0;
    color: #2c3e50;
  }

  .upload-options {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
  }

  .upload-option {
    flex: 1;
    padding: 15px;
    border: 2px solid #ecf0f1;
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s;
  }

  .upload-option:hover {
    border-color: #3498db;
    background: #f8f9fa;
  }

  .upload-option.active {
    border-color: #3498db;
    background: #e3f2fd;
  }

  .upload-option input[type="file"] {
    display: none;
  }

  .upload-option label {
    cursor: pointer;
    display: block;
  }

  .url-input {
    width: 100%;
    padding: 10px;
    border: 2px solid #ecf0f1;
    border-radius: 5px;
    margin-bottom: 15px;
  }

  .image-preview {
    max-width: 100%;
    max-height: 200px;
    border-radius: 5px;
    margin: 15px 0;
    display: none;
  }

  .modal-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
  }

  .btn-cancel {
    background: #95a5a6;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn-insert {
    background: #27ae60;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
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

  .slug_preview {
    background: #f8f9fa;
    padding: 10px;
    border-radius: 5px;
    font-family: monospace;
    font-size: 12px;
    color: #7f8c8d;
    margin-top: 5px;
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

  #new_image_preview_img {
    max-width: 300px;
    max-height: 200px;
    border: 2px solid #ddd;
    border-radius: 8px;
    margin-top: 10px;
  }

  #new_image_preview {
    text-align: center;
  }

  .btn-info {
    background: #17a2b8;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    padding: 8px 16px;
  }

  .btn-info:hover {
    background: #138496;
  }
</style>

<div class="admin_layout">
  <!-- Sidebar -->
  <div class="admin_sidebar">
    <h3>Admin Panel</h3>
    <a href="<?= base_url() ?>admin/dashboard">Dashboard</a>
    <a href="<?= base_url() ?>admin/lead-manager">Lead Manager</a>
    <a href="<?= base_url() ?>admin/blog-list" class="active">Blog Management</a>
    <a href="<?= base_url() ?>admin/logout">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="admin_content">
    <div class="admin_header">
      <h1>Add New Blog Post</h1>
      <a href="<?= base_url() ?>admin/blog-list" class="btn btn-secondary">Back to List</a>
    </div>

    <div class="form_container">
      <form action="<?= base_url() ?>admin/blog-save" method="POST">
        
        <!-- SEO Section -->
        <h3 style="color: #2c3e50; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #ecf0f1;">SEO Settings</h3>
        
        <div class="form_group">
          <label for="meta_title">Meta Title *</label>
          <input type="text" id="meta_title" name="meta_title" required 
                 value="<?= old('meta_title') ?>" 
                 placeholder="SEO optimized title (max 60 characters)">
          <?php if (isset($errors['meta_title'])): ?>
            <div class="error"><?= $errors['meta_title'] ?></div>
          <?php endif; ?>
        </div>

        <div class="form_group">
          <label for="meta_description">Meta Description</label>
          <textarea id="meta_description" name="meta_description" 
                    placeholder="SEO description (max 160 characters)"><?= old('meta_description') ?></textarea>
          <?php if (isset($errors['meta_description'])): ?>
            <div class="error"><?= $errors['meta_description'] ?></div>
          <?php endif; ?>
        </div>

        <!-- Content Section -->
        <h3 style="color: #2c3e50; margin: 30px 0 20px 0; padding-bottom: 10px; border-bottom: 2px solid #ecf0f1;">Content</h3>
        
        <div class="form_group">
          <label for="title">Blog Title *</label>
          <input type="text" id="title" name="title" required 
                 value="<?= old('title') ?>" 
                 placeholder="Enter blog post title">
          <?php if (isset($errors['title'])): ?>
            <div class="error"><?= $errors['title'] ?></div>
          <?php endif; ?>
        </div>

        <div class="form_group">
          <label for="main_description">Main Content *</label>
          <textarea name="main_description" id="main_description" rows="15" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5;"><?= old('main_description') ?></textarea>
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
                <input type="url" name="image" id="image" value="<?= old('image') ?>" placeholder="https://example.com/image.jpg">
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
                <div id="new_image_preview" style="display: none;">
                  <p><strong>Selected Image:</strong></p>
                  <img id="new_image_preview_img" alt="Image preview">
                </div>
              </div>
            </div>
            <?php if (isset($errors['image'])): ?>
              <div class="error"><?= $errors['image'] ?></div>
            <?php endif; ?>
          </div>

          <div class="form_group">
            <label for="image_alt">Image Alt Text</label>
            <input type="text" name="image_alt" id="image_alt" value="<?= old('image_alt') ?>" placeholder="Describe the image">
            <?php if (isset($errors['image_alt'])): ?>
              <div class="error"><?= $errors['image_alt'] ?></div>
            <?php endif; ?>
          </div>
        </div>

        <!-- Settings Section -->
        <h3 style="color: #2c3e50; margin: 30px 0 20px 0; padding-bottom: 10px; border-bottom: 2px solid #ecf0f1;">Settings</h3>
        
        <div class="form_row">
          <div class="form_group">
            <label for="date">Publication Date *</label>
            <input type="date" id="date" name="date" required 
                   value="<?= old('date', date('Y-m-d')) ?>">
            <?php if (isset($errors['date'])): ?>
              <div class="error"><?= $errors['date'] ?></div>
            <?php endif; ?>
          </div>

          <div class="form_group">
            <label for="category">Category *</label>
            <select id="category" name="category" required>
              <option value="">Select Category</option>
              <option value="Cleaning Tips" <?= old('category') == 'Cleaning Tips' ? 'selected' : '' ?>>Cleaning Tips</option>
              <option value="Home Maintenance" <?= old('category') == 'Home Maintenance' ? 'selected' : '' ?>>Home Maintenance</option>
              <option value="Company News" <?= old('category') == 'Company News' ? 'selected' : '' ?>>Company News</option>
              <option value="Lifestyle" <?= old('category') == 'Lifestyle' ? 'selected' : '' ?>>Lifestyle</option>
              <option value="Health & Safety" <?= old('category') == 'Health & Safety' ? 'selected' : '' ?>>Health & Safety</option>
            </select>
            <?php if (isset($errors['category'])): ?>
              <div class="error"><?= $errors['category'] ?></div>
            <?php endif; ?>
          </div>
        </div>

        <div class="form_row">
          <div class="form_group">
            <label for="slug">URL Slug</label>
            <input type="text" id="slug" name="slug" 
                   value="<?= old('slug') ?>" 
                   placeholder="url-friendly-slug (auto-generated if empty)">
            <div class="slug_preview" id="slug_preview" style="display: none;">
              Preview: <?= base_url() ?>blog/<span id="slug_text"></span>
            </div>
            <?php if (isset($errors['slug'])): ?>
              <div class="error"><?= $errors['slug'] ?></div>
            <?php endif; ?>
          </div>

          <div class="form_group">
            <label for="status">Status</label>
            <select id="status" name="status">
              <option value="draft" <?= old('status', 'draft') == 'draft' ? 'selected' : '' ?>>Draft</option>
              <option value="published" <?= old('status') == 'published' ? 'selected' : '' ?>>Published</option>
              <option value="archived" <?= old('status') == 'archived' ? 'selected' : '' ?>>Archived</option>
            </select>
            <?php if (isset($errors['status'])): ?>
              <div class="error"><?= $errors['status'] ?></div>
            <?php endif; ?>
          </div>
        </div>

        <div class="form_actions">
          <a href="<?= base_url() ?>admin/blog-list" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Blog Post</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Image Upload Modal -->
<div id="uploadModal" class="upload-modal">
  <div class="upload-modal-content">
    <h3>Insert Image</h3>
    
    <div class="upload-options">
      <div class="upload-option" id="uploadOption">
        <label for="imageFile">
          📁 Upload File
        </label>
        <input type="file" id="imageFile" accept="image/*">
      </div>
      
      <div class="upload-option" id="urlOption">
        <label for="imageUrl">
          🔗 Image URL
        </label>
      </div>
    </div>
    
    <input type="text" id="imageUrl" class="url-input" placeholder="Enter image URL...">
    
    <img id="imagePreview" class="image-preview" alt="Preview">
    
    <div class="modal-actions">
      <button type="button" class="btn-cancel" onclick="closeUploadModal()">Cancel</button>
      <button type="button" class="btn-insert" onclick="insertImage()">Insert Image</button>
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
  
  if (!document.getElementById('slug').value) {
    document.getElementById('slug').value = slug;
    updateSlugPreview();
  }
});

// Update slug preview
document.getElementById('slug').addEventListener('input', updateSlugPreview);

function updateSlugPreview() {
  const slug = document.getElementById('slug').value;
  const preview = document.getElementById('slug_preview');
  const slugText = document.getElementById('slug_text');
  
  if (slug) {
    slugText.textContent = slug;
    preview.style.display = 'block';
  } else {
    preview.style.display = 'none';
  }
}

// Rich Text Editor Functionality
document.addEventListener('DOMContentLoaded', function() {
  const editor = document.getElementById('main_description');
  const hiddenTextarea = document.getElementById('main_description_hidden');
  const toolbar = document.querySelector('.editor-toolbar');
  
  // Handle toolbar buttons
  toolbar.addEventListener('click', function(e) {
    if (e.target.classList.contains('editor-btn')) {
      e.preventDefault();
      const command = e.target.getAttribute('data-command');
      const value = e.target.getAttribute('data-value');
      
      if (command === 'createLink') {
        const url = prompt('Enter URL:');
        if (url) {
          document.execCommand(command, false, url);
        }
      } else if (command === 'insertHTML') {
        // Handle code insertion
        if (value === '<code></code>') {
          // Insert inline code
          const selection = window.getSelection();
          if (selection.rangeCount > 0) {
            const range = selection.getRangeAt(0);
            const codeElement = document.createElement('code');
            codeElement.textContent = selection.toString() || 'code';
            range.deleteContents();
            range.insertNode(codeElement);
            // Select the inserted element
            const newRange = document.createRange();
            newRange.selectNodeContents(codeElement);
            selection.removeAllRanges();
            selection.addRange(newRange);
          }
        } else if (value === '<pre><code></code></pre>') {
          // Insert code block
          const selection = window.getSelection();
          if (selection.rangeCount > 0) {
            const range = selection.getRangeAt(0);
            const preElement = document.createElement('pre');
            const codeElement = document.createElement('code');
            codeElement.textContent = selection.toString() || '// Your code here';
            preElement.appendChild(codeElement);
            range.deleteContents();
            range.insertNode(preElement);
            // Select the inserted element
            const newRange = document.createRange();
            newRange.selectNodeContents(codeElement);
            selection.removeAllRanges();
            selection.addRange(newRange);
          }
        } else {
          document.execCommand(command, false, value);
        }
      } else if (value) {
        document.execCommand(command, false, value);
      } else {
        document.execCommand(command, false, null);
      }
      
      // Update active state
      updateActiveButtons();
    }
  });
  
  // Update active button states
  function updateActiveButtons() {
    const buttons = toolbar.querySelectorAll('.editor-btn');
    buttons.forEach(btn => {
      btn.classList.remove('active');
      const command = btn.getAttribute('data-command');
      if (document.queryCommandState(command)) {
        btn.classList.add('active');
      }
    });
  }
  
  // Update hidden textarea on input
  editor.addEventListener('input', function() {
    hiddenTextarea.value = editor.innerHTML;
  });
  
  // Also sync on paste and other events
  editor.addEventListener('paste', function() {
    setTimeout(() => {
      hiddenTextarea.value = editor.innerHTML;
    }, 100);
  });
  
  // Sync on blur (when user leaves the editor)
  editor.addEventListener('blur', function() {
    hiddenTextarea.value = editor.innerHTML;
  });
  
  // Handle focus and blur
  editor.addEventListener('focus', function() {
    if (this.textContent.trim() === '') {
      this.innerHTML = '';
    }
  });
  
  editor.addEventListener('blur', function() {
    if (this.textContent.trim() === '') {
      this.innerHTML = '';
    }
  });
  
  // Handle paste events
  editor.addEventListener('paste', function(e) {
    e.preventDefault();
    const text = (e.clipboardData || window.clipboardData).getData('text/plain');
    document.execCommand('insertText', false, text);
  });
  
  // Initialize content
  if (editor.textContent.trim() === '') {
    editor.innerHTML = '';
  }
  
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

  // Simple form validation
  document.querySelector('form').addEventListener('submit', function(e) {
    const textarea = document.getElementById('main_description');
    
    // Check if textarea has content
    if (!textarea.value || textarea.value.trim() === '') {
      e.preventDefault();
      alert('Please enter some content for your blog post.');
      textarea.focus();
      return false;
    }
    
    // Show loading state
    const submitBtn = this.querySelector('button[type="submit"]');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Creating...';
    }
    
    console.log('Form submitting with content:', textarea.value);
  });
  
  // Update active buttons on selection change
  document.addEventListener('selectionchange', updateActiveButtons);
});

// Image Upload Functionality
let currentImageUrl = '';

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
  // Open upload modal
  const uploadBtn = document.getElementById('uploadImageBtn');
  if (uploadBtn) {
    uploadBtn.addEventListener('click', function(e) {
      e.preventDefault();
      const modal = document.getElementById('uploadModal');
      if (modal) {
        modal.style.display = 'block';
        document.getElementById('uploadOption').classList.add('active');
        document.getElementById('urlOption').classList.remove('active');
        document.getElementById('imageUrl').style.display = 'none';
      }
    });
  }

  // Handle upload option selection
  const uploadOption = document.getElementById('uploadOption');
  if (uploadOption) {
    uploadOption.addEventListener('click', function() {
      this.classList.add('active');
      document.getElementById('urlOption').classList.remove('active');
      document.getElementById('imageUrl').style.display = 'none';
      document.getElementById('imageFile').click();
    });
  }

  const urlOption = document.getElementById('urlOption');
  if (urlOption) {
    urlOption.addEventListener('click', function() {
      this.classList.add('active');
      document.getElementById('uploadOption').classList.remove('active');
      document.getElementById('imageUrl').style.display = 'block';
      document.getElementById('imageUrl').focus();
    });
  }

  // Handle file upload
  const imageFile = document.getElementById('imageFile');
  if (imageFile) {
    imageFile.addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        currentImageUrl = URL.createObjectURL(file);
        showImagePreview(currentImageUrl);
      }
    });
  }

  // Handle URL input
  const imageUrl = document.getElementById('imageUrl');
  if (imageUrl) {
    imageUrl.addEventListener('input', function() {
      const url = this.value.trim();
      if (url) {
        currentImageUrl = url;
        showImagePreview(url);
      }
    });
  }

  // Close modal when clicking outside
  const modal = document.getElementById('uploadModal');
  if (modal) {
    modal.addEventListener('click', function(e) {
      if (e.target === modal) {
        closeUploadModal();
      }
    });
  }
});

// Show image preview
function showImagePreview(url) {
  const preview = document.getElementById('imagePreview');
  if (preview) {
    preview.src = url;
    preview.style.display = 'block';
    preview.onerror = function() {
      preview.style.display = 'none';
      alert('Could not load image. Please check the URL.');
    };
  }
}

// Insert image into editor
function insertImage() {
  if (!currentImageUrl) {
    alert('Please select an image or enter a URL');
    return;
  }
  
  const editor = document.getElementById('main_description');
  if (editor) {
    const selection = window.getSelection();
    
    if (selection.rangeCount > 0) {
      const range = selection.getRangeAt(0);
      const img = document.createElement('img');
      img.src = currentImageUrl;
      img.style.maxWidth = '100%';
      img.style.height = 'auto';
      img.alt = 'Blog image';
      
      range.deleteContents();
      range.insertNode(img);
      
      // Move cursor after the image
      const newRange = document.createRange();
      newRange.setStartAfter(img);
      newRange.collapse(true);
      selection.removeAllRanges();
      selection.addRange(newRange);
    }
  }
  
  closeUploadModal();
}

// Close upload modal
function closeUploadModal() {
  const modal = document.getElementById('uploadModal');
  if (modal) {
    modal.style.display = 'none';
  }
  const preview = document.getElementById('imagePreview');
  if (preview) {
    preview.style.display = 'none';
  }
  const urlInput = document.getElementById('imageUrl');
  if (urlInput) {
    urlInput.value = '';
  }
  const fileInput = document.getElementById('imageFile');
  if (fileInput) {
    fileInput.value = '';
  }
  currentImageUrl = '';
}
</script>

<?= $this->include('footer') ?>
