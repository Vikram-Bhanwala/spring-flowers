<?= $this->include('header') ?>
<style>
  footer{display:none}

  /* Sidebar */
  .lead_manager_sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 19%;
    height: 100vh;
    background: #fff;
    border-right: 2px solid black;
    padding: 20px 10px;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .lead_manager_sidebar a {
    display: block;
    text-decoration: none;
    padding: 12px;
    text-align: center;
    border: 1px solid #000;
    margin-bottom: 10px;
    color: #000;
    font-weight: bold;
  }
  .lead_manager_sidebar a.active {
    background: #000;
    color: #fff;
  }
  .lead_manager_main_sec {
    margin-left: 20%;
    width: 80%;
  }

  /* Banner */
  .lead_manager_banner {
    position: relative;
    height: 250px;
    overflow: hidden;
  }
  .lead_manager_banner img {width:100%;height:100%;object-fit:cover}
  .lead_manager_banner_text {
    position: absolute;
    bottom: 50%;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    font-size: 36px;
    font-weight: bold;
    font-family:IvyOraDisplay-Regular;
  }

  /* Tabs */
  .lead_manager_tabs {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 30px 0;
    flex-wrap: wrap;
  }
  .lead_manager_tabs button {
    padding: 8px 20px;
    border: 1px solid #000;
    background: transparent;
    cursor: pointer;
  }
  .lead_manager_tabs .active {
    background: #000;
    color: #fff;
  }

  /* Cards */
  .lead_manager_card {
    border: 1px solid #000;
    margin: 0 30px 20px;
    background:white;
    transition: all 0.3s ease;
  }
  .lead_manager_card_header {
    display: flex;
    align-items: center;
    padding: 15px;
    justify-content: space-between;
  }
  .lead_manager_avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #000;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    margin-right: 20px;
    overflow: hidden;
  }
  .lead_manager_avatar img {width:100%;height:100%;object-fit:cover}
  .lead_manager_info {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    flex: 1;
  }
  .lead_manager_info p {margin:0;font-size:14px;padding-left:15px;border-left:1px solid #000;}
  .lead_manager_info p:first-child {border-left:none;padding-left:0;}
  .lead_manager_actions {display:flex;align-items:center;gap:10px}
  .lead_manager_toggle_btn {
    background:none;
    border:none;
    font-size:20px;
    cursor:pointer;
    transition:0.3s;
  }
  .lead_manager_card.active .lead_manager_toggle_btn {transform:rotate(180deg)}

  /* Hidden details */
  .lead_manager_details {
    display: none;
    padding: 15px;
    border-top: 1px solid #000;
    background: #f9f9f9;
  }
  .lead_manager_card.active .lead_manager_details {display:block}

  .lead_manager_card p{font-family:IvyOraDisplay-Regular;font-size:18px}
  .lead_manager_card strong{font-family:Poppins-Regular;font-size:14px}

  /* Status Management */
  .status_section {
    /* margin-top: 15px;
    padding: 10px; */
    background:rgb(255, 255, 255);
    /* border: 1px solid #ddd; */
  }
  .status_label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
  }
  .status_dropdown {
    padding: 5px 10px;
    border: 1px solid #000;
    background: white;
    cursor: pointer;
    min-width: 120px;
  }
  .status_new { color: #28a745; font-weight: bold; }
  .status_won { color: #17a2b8; font-weight: bold; }
  .status_lost { color: #dc3545; font-weight: bold; }
</style>

<div class="lead_manage_main_box">
  <!-- Sidebar -->
  <div class="lead_manager_sidebar">
    <div class="lead_box_main">
      <a href="#">Profile</a>
      <a href="<?php echo base_url() ?>admin/lead-manager" class="active">Lead Manager</a>
      <a href="<?php echo base_url() ?>admin/blog-list">Blog Management</a>
      <a href="<?php echo base_url() ?>admin/logout" class="">Logout </a>
    </div>
  </div>

  <!-- Main -->
  <section class="lead_manager_main_sec">
    <div class="lead_manager_banner">
      <img src="<?= base_url()?>assets/img/new/lmb.png" alt="">
      <div class="lead_manager_banner_text">Lead Manager</div>
    </div>

    <!-- Tabs -->
    <div class="lead_manager_tabs">
      <button class="tab_btn active" data-tab="contact">General Enquiry</button>
      <button class="tab_btn" data-tab="keeper">Leads</button>
      <button class="tab_btn" data-tab="registration">Job Enquiry</button>
      <button class="tab_btn" data-tab="subscription">Newsletter Subscribers</button>
    </div>

    <div class="container">
      <!-- Contact Tab -->
      <div class="tab_content active" id="contact">
        <?php if(!empty($contactData)): foreach($contactData as $c): ?>
        <div class="lead_manager_card">
          <div class="lead_manager_card_header">
            <div class="lead_manager_avatar"><?= strtoupper(substr($c['name'],0,2)) ?></div>
            <div class="lead_manager_info">
              <p><strong>Name</strong><br><?= esc($c['name']) ?></p>
              <p><strong>Email</strong><br><?= esc($c['email']) ?></p>
              <p><strong>Phone</strong><br><?= esc($c['phone']) ?></p>
                          <!-- Status Management -->
            <div class="status_section">
              <label class="status_label">Lead Status:</label>
              <select class="status_dropdown status_<?= esc($c['status'] ?? 'new') ?>" 
                      data-table="contact" 
                      data-id="<?= esc($c['id']) ?>"
                      onchange="updateLeadStatus(this)">
                <option value="new" <?= ($c['status'] ?? 'new') == 'new' ? 'selected' : '' ?>>New</option>
                <option value="won" <?= ($c['status'] ?? 'new') == 'won' ? 'selected' : '' ?>>Won</option>
                <option value="lost" <?= ($c['status'] ?? 'new') == 'lost' ? 'selected' : '' ?>>Lost</option>
              </select>
            </div>
            </div>
            <button class="lead_manager_toggle_btn"><img src="<?= base_url()?>assets/img/new/dash-down.svg" alt=""></button>
          </div>
          <div class="lead_manager_details">
            <p><strong>Message:</strong> <?= esc($c['message']) ?></p>
            <p><strong>Created At:</strong> <?= esc($c['created_at']) ?></p>
          </div>
        </div>
        <?php endforeach; endif; ?>
      </div>

      <!-- Keeper Tab -->
      <div class="tab_content" id="keeper">
        <?php if(!empty($keeperData)): foreach($keeperData as $k): ?>
        <div class="lead_manager_card">
          <div class="lead_manager_card_header">
            <div class="lead_manager_avatar"><?= strtoupper(substr($k['name'],0,2)) ?></div>
            <div class="lead_manager_info">
              <p><strong>Name</strong><br><?= esc($k['name']) ?></p>
              <p><strong>Phone</strong><br><?= esc($k['phone']) ?></p>
              <p><strong>City</strong><br><?= esc($k['city']) ?></p>
              <p><strong>Timing</strong><br><?= esc($k['timing']) ?></p>
              
            <?php if($k['plan'] == ''){
              echo "Lead Type : House Cleaning";
            }else{
              echo "Lead Type : House Keeping";
            }?>
          
              
            </div>
            <button class="lead_manager_toggle_btn"><img src="<?= base_url()?>assets/img/new/dash-down.svg" alt=""></button>
          </div>
          <div class="lead_manager_details">
            <p><strong>Date:</strong> <?= esc($k['date']) ?></p>
            
            <p><strong>Selected Date:</strong> <?= esc($k['selected_date']) ?> | Selected Days 
          :<?= esc($k['selected_days']) ?> | Plan: <?= esc($k['plan']) ?></p>
           
            <p><strong>Timing</strong><br><?= esc($k['timing']) ?></p>
            <p><strong>Address:</strong> <?= esc($k['address']) ?></p>
            <p><strong>Kitchens:</strong> <?= esc($k['num_kitchens']) ?> | Rooms: <?= esc($k['num_rooms']) ?> | Bathrooms: <?= esc($k['num_bathrooms']) ?></p>
            
            <!-- Status Management -->
            <div class="status_section">
              <label class="status_label">Lead Status:</label>
              <select class="status_dropdown status_<?= esc($k['status'] ?? 'new') ?>" 
                      data-table="keeper_forms" 
                      data-id="<?= esc($k['id']) ?>"
                      onchange="updateLeadStatus(this)">
                <option value="new" <?= ($k['status'] ?? 'new') == 'new' ? 'selected' : '' ?>>New</option>
                <option value="won" <?= ($k['status'] ?? 'new') == 'won' ? 'selected' : '' ?>>Won</option>
                <option value="lost" <?= ($k['status'] ?? 'new') == 'lost' ? 'selected' : '' ?>>Lost</option>
              </select>
            </div>
          </div>
        </div>
        <?php endforeach; endif; ?>
      </div>

      <!-- Registration Tab -->
      <div class="tab_content" id="registration">
        <?php if(!empty($registrationData)): foreach($registrationData as $r): ?>
        <div class="lead_manager_card">
          <div class="lead_manager_card_header">
            <div class="lead_manager_avatar"><?= strtoupper(substr($r['job_type'],0,2)) ?></div>
            <div class="lead_manager_info">
              <p><strong>Job Type</strong><br><?= esc($r['job_type']) ?></p>
              <p><strong>Name</strong><br><?= esc($r['name']) ?></p>
              <p><strong>Phone</strong><br><?= esc($r['phone']) ?></p>
              <p><strong>Email</strong><br><?= esc($r['email']) ?></p>
            </div>
            <button class="lead_manager_toggle_btn"><img src="<?= base_url()?>assets/img/new/dash-down.svg" alt=""></button>
          </div>
          <div class="lead_manager_details">
            <p><strong>Country:</strong> <?= esc($r['country_of_living']) ?> | <strong>County:</strong> <?= esc($r['county']) ?></p>
            <p><strong>Type of Work:</strong> <?= esc($r['type_of_work']) ?> | <strong>Availability:</strong> <?= esc($r['availability_type']) ?></p>
            <p><strong>Start Date:</strong> <?= esc($r['start_date']) ?></p>
            <p><strong>Message:</strong> <?= esc($r['message']) ?></p>
            <p><strong>CV:</strong> <?= esc($r['cv_filename']) ?></p>
            
            <!-- Status Management -->
            <div class="status_section">
              <label class="status_label">Lead Status:</label>
              <select class="status_dropdown status_<?= esc($r['status'] ?? 'new') ?>" 
                      data-table="registrations" 
                      data-id="<?= esc($r['id']) ?>"
                      onchange="updateLeadStatus(this)">
                <option value="new" <?= ($r['status'] ?? 'new') == 'new' ? 'selected' : '' ?>>New</option>
                <option value="won" <?= ($r['status'] ?? 'new') == 'won' ? 'selected' : '' ?>>Won</option>
                <option value="lost" <?= ($r['status'] ?? 'new') == 'lost' ? 'selected' : '' ?>>Lost</option>
              </select>
            </div>
          </div>
        </div>
        <?php endforeach; endif; ?>
      </div>

      <!-- Subscription Tab -->
      <div class="tab_content" id="subscription">
        <?php if(!empty($subscriptionData)): foreach($subscriptionData as $s): ?>
        <div class="lead_manager_card">
          <div class="lead_manager_card_header">
            <div class="lead_manager_avatar">@</div>
            <div class="lead_manager_info">
              <p><strong>Email</strong><br><?= esc($s['email']) ?></p>
              <p><strong>Created At</strong><br><?= esc($s['created_at']) ?></p>
            </div>
            <button class="lead_manager_toggle_btn"><img src="<?= base_url()?>assets/img/new/dash-down.svg" alt=""></button>
          </div>
          <div class="lead_manager_details">
            <p><strong>Email:</strong> <?= esc($s['email']) ?></p>
            <p><strong>Created At:</strong> <?= esc($s['created_at']) ?></p>
            
            <!-- Status Management -->
            <div class="status_section">
              <label class="status_label">Lead Status:</label>
              <select class="status_dropdown status_<?= esc($s['status'] ?? 'new') ?>" 
                      data-table="subscriptions" 
                      data-id="<?= esc($s['id']) ?>"
                      onchange="updateLeadStatus(this)">
                <option value="new" <?= ($s['status'] ?? 'new') == 'new' ? 'selected' : '' ?>>New</option>
                <option value="won" <?= ($s['status'] ?? 'new') == 'won' ? 'selected' : '' ?>>Won</option>
                <option value="lost" <?= ($s['status'] ?? 'new') == 'lost' ? 'selected' : '' ?>>Lost</option>
              </select>
            </div>
          </div>
        </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>
</div>

<script>
  // Toggle details
  document.querySelectorAll('.lead_manager_toggle_btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.lead_manager_card');
      card.classList.toggle('active');
    });
  });

  // Tabs
  document.querySelectorAll('.tab_btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab_btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const tab = btn.getAttribute('data-tab');
      document.querySelectorAll('.tab_content').forEach(c => {
        c.classList.remove('active');
        if (c.id === tab) c.classList.add('active');
      });
    });
  });

  // Update lead status
  function updateLeadStatus(selectElement) {
    const table = selectElement.getAttribute('data-table');
    const id = selectElement.getAttribute('data-id');
    const status = selectElement.value;
    
    // Show loading state
    const originalValue = selectElement.value;
    selectElement.disabled = true;
    selectElement.style.opacity = '0.6';
    
    // Make AJAX request
    fetch('<?= base_url() ?>admin/update-lead-status', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `table=${table}&id=${id}&status=${status}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Update the class to reflect new status
        selectElement.className = `status_dropdown status_${status}`;
        alert('Status updated successfully!');
      } else {
        // Revert to original value on error
        selectElement.value = originalValue;
        alert('Error: ' + data.message);
      }
    })
    .catch(error => {
      // Revert to original value on error
      selectElement.value = originalValue;
      alert('Error updating status: ' + error.message);
    })
    .finally(() => {
      // Re-enable the select
      selectElement.disabled = false;
      selectElement.style.opacity = '1';
    });
  }
</script>

<style>
  .tab_content{display:none}
  .tab_content.active{display:block}
</style>
<?= $this->include('footer') ?>
