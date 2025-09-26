<?= $this->include('header') ?>
<style>
    footer{
        display:none
    }
     /* Sidebar */
    .lead_manager_sidebar {
      width: 19%;
      background: #fff;
      border-right: 2px solid black;
      padding: 20px 10px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      height: 100vh;
      margin-right:1%
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

    /* Main Content */
    .lead_manager_main_sec {
     width:80%
    }

    /* Banner */
    .lead_manager_banner {
      position: relative;
      height: 250px;
      overflow: hidden;
    }
    .lead_manager_banner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .lead_manager_banner_text {
      position: absolute;
      bottom: 50%;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-size: 36px;
      font-weight: bold;
    }

    /* Filter Bar */
    .lead_manager_filters {
      display: flex;
      justify-content: center; /* Center buttons */
      margin: 30px 0;
      align-items: center;
      gap: 30px;
    }
    .lead_manager_btns {
      display: flex;
      justify-content: center;
    }
    .lead_manager_btns button {
      padding: 8px 20px;
      border: 1px solid #000;
      background: transparent;
      margin-right: 10px;
      cursor: pointer;
    }
    .lead_manager_btns .active {
      background: #000;
      color: #fff;
    }
    .lead_manager_selects select {
      padding: 8px;
      border: 1px solid #000;
      margin-left: 10px;
    }

    /* Card */
    .lead_manager_card {
      border: 1px solid #000;
      margin: 0 30px 20px;
      transition: all 0.3s ease;
      background:white
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
    .lead_manager_avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .lead_manager_info {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      flex: 1;
    }
    .lead_manager_info p {
      margin: 0;
      font-size: 14px;
      padding-left: 15px;
      border-left: 1px solid #000; /* Left border added */
    }
    .lead_manager_info p:first-child {
      border-left: none; /* Remove border from first column */
      padding-left: 0;
    }
    .lead_manager_actions {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .lead_manager_actions select {
      padding: 6px;
      border: 1px solid #000;
    }
    .lead_manager_toggle_btn {
      background: none;
      border: none;
      font-size: 20px;
      cursor: pointer;
      transform: rotate(0deg);
      transition: 0.3s;
    }
    .lead_manager_card.active .lead_manager_toggle_btn {
      transform: rotate(180deg);
    }

    /* Hidden details */
    .lead_manager_details {
      display: none;
      padding: 15px;
      border-top: 1px solid #000;
      background: #f9f9f9;
    }
    .lead_manager_card.active .lead_manager_details {
      display: block;
    }
    .lead_black_row{
        padding:10px;
        background-color: #000;
        display: flex;
        justify-content: end;
    }
    .lead_manage_main_box {
  display: flex;
  align-items: stretch; /* ensures both children stretch equally */
  min-height: 100vh;   /* whole viewport height */
}

.lead_manager_sidebar {
  width: 19%;
  background: #fff;
  border-right: 2px solid black;
  padding: 20px 10px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-right: 1%;
  height: auto;         /* remove fixed 100vh */
}
.lead_manage_main_box{
    position: relative;
}
.lead_box_main{
    position: sticky;
    /* width: 100%; */
    top:18% !important
}
.lead_manager_sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 19%;
  height: 100vh;       /* full viewport height */
  background: #fff;
  border-right: 2px solid black;
  padding: 20px 10px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.lead_manager_main_sec {
  margin-left: 20%; /* push content so it doesn't hide behind sidebar */
  width: 80%;
}
.lead_manager_toggle_btn{
    outline:none !important;
    border:none !important
}
.lead_manager_banner_text{
    
    font-family: IvyOraDisplay-Regular;
}
.lead_manager_card p{
    
    font-family: IvyOraDisplay-Regular;
    font-size:20px
}
.lead_manager_card strong{
    
  font-family:Poppins-Regular !important;
  font-size:14px 
}
</style>
<div class="lead_manage_main_box">
    
 <!-- Sidebar -->
  <div class="lead_manager_sidebar">
    <div class="lead_box_main">
    <a href="#">Profile</a>
    <a href="#" class="active">Lead Manager</a>

    </div>
  </div>

  <!-- Main -->
  <section class="lead_manager_main_sec">
    <!-- Banner with breadcrumb text -->
    <div class="lead_manager_banner">
      <img src="<?php echo base_url()?>assets/img/new/lmb.png" alt="">
      <div class="lead_manager_banner_text">Lead Manager</div>
    </div>
    <div class="lead_black_row">
        
        <div class="lead_manager_selects">
          <select>
            <option>All Client</option>
            <option>New Client</option>
            <option>Returning</option>
          </select>
          <select>
            <option>Today</option>
            <option>This Week</option>
            <option>This Month</option>
          </select>
        </div>
    </div>

    <div class="container">

      <!-- Filter Bar -->
      <div class="lead_manager_filters">
        <div class="lead_manager_btns">
          <button class="lead_manager_filter_btn active" data-filter="all">All</button>
          <button class="lead_manager_filter_btn" data-filter="general">General</button>
          <button class="lead_manager_filter_btn" data-filter="service">Service</button>
        </div>

      </div>

      <!-- Lead Cards -->
      <div class="lead_manager_list">

        <!-- Card Type 1 -->
        <div class="lead_manager_card" data-type="general">
          <div class="lead_manager_card_header">
            <div class="lead_manager_avatar">KH</div>
            <div class="lead_manager_info">
              <p><strong>Client Name</strong><br>Kevin Hart</p>
              <p><strong>Phone Number</strong><br>+44 2344 900123</p>
              <p><strong>Email Address</strong><br>kevin@gmail.com</p>
              <p><strong>Service</strong><br>House Cleaning</p>
            </div>
            <div class="lead_manager_actions">
              <select>
                <option>New Enquiry</option>
                <option>In Progress</option>
                <option>Completed</option>
              </select>
              <button class="lead_manager_toggle_btn"><img src="<?php echo base_url()?>assets/img/new/dash-down.svg" alt=""></button>
            </div>
          </div>
          <div class="lead_manager_details">
            <p><strong>Address:</strong> 221B Baker Street, London</p>
            <p><strong>Preferred Date:</strong> 28 Sept 2025</p>
            <p><strong>Notes:</strong> Needs deep cleaning of living room and kitchen.</p>
          </div>
        </div>

        <!-- Card Type 2 -->
        <div class="lead_manager_card" data-type="service">
          <div class="lead_manager_card_header">
            <div class="lead_manager_avatar">DH</div>
            <div class="lead_manager_info">
              <p><strong>Client Name</strong><br>David Harbor</p>
              <p><strong>Phone Number</strong><br>+44 1111 921233</p>
              <p><strong>Email Address</strong><br>harbor@gmail.com</p>
              <p><strong>Service</strong><br>House Keeping</p>
            </div>
            <div class="lead_manager_actions">
              <select>
                <option>New Enquiry</option>
                <option>In Progress</option>
                <option>Completed</option>
              </select>
              <button class="lead_manager_toggle_btn"><img src="<?php echo base_url()?>assets/img/new/dash-down.svg" alt=""></button>
            </div>
          </div>
          <div class="lead_manager_details">
            <p><strong>Duration:</strong> Weekly service - 3 times a week</p>
            <p><strong>Start Date:</strong> 01 Oct 2025</p>
            <p><strong>Special Request:</strong> Focus on bathrooms and laundry.</p>
          </div>
        </div>

        <!-- Card Type 3 -->
        <div class="lead_manager_card" data-type="general">
          <div class="lead_manager_card_header">
            <div class="lead_manager_avatar"><img src="https://via.placeholder.com/50" alt=""></div>
            <div class="lead_manager_info">
              <p><strong>Client Name</strong><br>Will Smith</p>
              <p><strong>Phone Number</strong><br>+44 3421 903123</p>
              <p><strong>Email Address</strong><br>smith@gmail.com</p>
              <p><strong>Property Type</strong><br>Apartments/Flats</p>
            </div>
            <div class="lead_manager_actions">
              <select>
                <option>New Enquiry</option>
                <option>In Progress</option>
                <option>Completed</option>
              </select>
              <button class="lead_manager_toggle_btn"><img src="<?php echo base_url()?>assets/img/new/dash-down.svg" alt=""></button>
            </div>
          </div>
          <div class="lead_manager_details">
            <p><strong>Town/Area:</strong> Golders Green</p>
            <p><strong>Preferred Time:</strong> Morning 10:00 AM</p>
            <p><strong>Comments:</strong> Requires balcony cleaning too.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

</div>

  <script>
    // Toggle Details
    document.querySelectorAll('.lead_manager_toggle_btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const card = btn.closest('.lead_manager_card');
        card.classList.toggle('active');
      });
    });

    // Filter
    document.querySelectorAll('.lead_manager_filter_btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.lead_manager_filter_btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.getAttribute('data-filter');
        document.querySelectorAll('.lead_manager_card').forEach(card => {
          if (filter === 'all' || card.getAttribute('data-type') === filter) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script>

<?= $this->include('footer') ?>
