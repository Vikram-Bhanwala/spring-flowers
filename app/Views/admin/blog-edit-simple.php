<?= $this->include('header') ?>

<div class="admin_container">
  <div class="admin_wrapper">
    <div class="admin_header">
      <h1>Edit Blog Post</h1>
      <a href="<?= base_url() ?>admin/blog-list" class="btn btn-secondary">Back to List</a>
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
            <label for="image">Featured Image URL</label>
            <input type="url" name="image" id="image" value="<?= old('image', $post['image']) ?>" placeholder="https://example.com/image.jpg">
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

// Simple form validation
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  const textarea = document.getElementById('main_description');
  
  form.addEventListener('submit', function(e) {
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
      submitBtn.textContent = 'Updating...';
    }
    
    console.log('Form submitting with content:', textarea.value);
  });
});
</script>

<?= $this->include('footer') ?>
