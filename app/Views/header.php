
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/own.css">
<!--===============================================================================================-->
</head>
<body>
	<style>
    header {
    z-index: 99999999999 !important;
}

/* Overlay */
.contact_form_side_overlay {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  /* background: rgba(0,0,0,0.4);
  opacity: 0; */
  visibility: hidden;
  transition: all 0.3s ease;
  z-index: 99998;
  background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
}

/* Side Panel */
.contact_form_side_panel {
  position: fixed;
  right: -400px;
  top: 0;
  height: 100%;
  width: 400px;
  background: #fff;
  box-shadow: -2px 0 8px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
  z-index: 999;
  padding: 30px 0px;
  overflow-y: auto;
  z-index:99999999 !important
}

/* Close button */
.contact_form_side_close {
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
  float: right;
  margin-bottom: 15px;
}

/* Active states */
.contact_form_side_overlay.active {
  opacity: 1;
  visibility: visible;
}

.contact_form_side_panel.active {
  right: 0;
}

    .contact_side_akshay_main_input_box label{
        width: 100%;
        color:#00000047;

    margin-left: 15px;

    }
    
    .contact_side_akshay_main_input_box textarea {
    width: 100%;
    border: 0px !important;
    background: #f9f8f6;
    font-size: 18px;
    color: black !important;
    outline: none;
    border-bottom: 1px solid black !important;
    padding-bottom:10px;
    height:100px
}
.contact_side_akshay_main_input_box textarea::placeholder {
    color: black !important;
}
.contact_side_akshay_main_input_box input {
    width: 100%;
    border: 0px !important;
    background: #f9f8f6;
    font-size: 13px;
    color: black !important;
    outline: none;
    border-bottom: 1px solid black !important;
    padding-top: 8px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
}
.contact_side_akshay_main_input_box input::placeholder {
    color: black !important;
}

    .contact_side_akshay_main_input_box select {
    width: 100%;
    border: 0px !important;
    background: #f9f8f6;
    font-size: 13px;
    color: black !important;
    outline: none;
    border-bottom: 1px solid black !important;
    padding-top: 8px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
}
.contact_side_akshay_main_box{
  margin-top:60px !important
}
.contact_side_akshay_main_input_box{
  margin-bottom:10px
}

.contact_lets_conect_btn{
    padding:10px 20px;
    background:black !important;
    color:white;
    width: 150px;
    width:100% !important
}
.contact_cancel_btn{
    padding:10px 20px;
    border: 2px solid black !important;
    color:black;
    background:white;
    width: 150px;
    width:100% !important;
    margin-top:10px 
}
.social_box ul {
    display: flex;
    list-style-type: none;
    justify-content: space-between;
    margin-top:30px
}
.social_box img{
  height:40px
}
.Housekeeping-Companions-frame{
  overflow:hidden !important
}
.subscribe-box-main .subscribe-box input {
    border-bottom: 1px solid black;
}


</style>

	<!-- Header -->
  <header>
    <div class="logo">
      <a href="<?php echo base_url()?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="Clean Springflowers Logo"></a>
    </div>

    <nav id="nav-menu">
      <a href="<?php echo base_url()?>select-property-type">House Cleaning</a>
      <a href="<?php echo base_url()?>select-keeper-type">House Keeping</a>
      <a href="<?php echo base_url()?>our-story">Our Story</a>
      <a href="<?php echo base_url()?>shop">Shop</a>
      <a href="<?php echo base_url()?>blogs">Blogs</a>
      <a href="<?php echo base_url()?>find-a-job">Find a Job</a>
    </nav>

    <button class="connect-btn contact_side_btn"  id="contact_form_side_open_btn">Connect With Us</button>

    <!-- Hamburger -->
    <div class="hamburger" id="hamburger">&#9776;</div>
  </header>





  <section class="contact_form_side_section">
  <div class="contact_form_side_overlay" id="contact_form_side_overlay"></div>
  
  <div class="contact_form_side_panel" id="contact_form_side_panel">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <!-- Close Button -->
          
          <!-- Your Form -->
          <div class="contact_form_side_form_box">
              <div class="contact_side_akshay_main_box">
                <form action="<?php echo base_url()?>contact-function" method="post" id="contact_side_form">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Name</label>
                        <input type="text" placeholder="Enter Your Name" name="name" required>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter Phone Number" name="phone" required>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Email Address" name="email" required>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Service</label>
                        <select name="service" id=""  required>
                          <option value="">Select a Service</option>
                          <option value="House Keeping">House Keeping </option>
                          <option value="House Cleaning">House Keeping </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Message</label>
                        <textarea name="message" id="" plaecholder="Enter Message.." ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <button class="contact_lets_conect_btn" id="contact_side_submit_btn" type="submit">Let’s Connect</button>
                      </div>
                      </div>
                </form>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="contact_side_akshay_main_input_box">
                    <div id="contact_side_success" style="display:none;color:green;font-weight:600;">Thank you for connecting with us.</div>
                    <div id="contact_side_error" style="display:none;color:#b00020;font-weight:600;">An error occurred. Please try again.</div>
                  </div>
                </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <button class="contact_cancel_btn"  id="contact_form_side_close">Cancel</button>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="social_box">
                        <ul>
                          <li>
                              <a href="https://wa.me/447923639015" target="_blank">
                                <img src="<?php echo base_url() ?>assets/img/new/wp.svg" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="https://www.instagram.com/indithehomeguru/" target="_blank">
                                <img src="<?php echo base_url() ?>assets/img/new/ig.svg" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="https://www.facebook.com/profile.php?id=100058949541919" target="_blank">
                                <img src="<?php echo base_url() ?>assets/img/new/fb.svg" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="https://www.youtube.com/@IndianaGreeneHomeGuru" target="_blank">
                                <img src="<?php echo base_url() ?>assets/img/new/youtube.svg" alt="">
                              </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
              </div>           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const openBtns = document.querySelectorAll(".contact_side_btn"); // all buttons with class
  const overlay = document.getElementById("contact_form_side_overlay");
  const panel = document.getElementById("contact_form_side_panel");
  const closeBtn = document.getElementById("contact_form_side_close");
  const form = document.getElementById("contact_side_form");
  const successBox = document.getElementById("contact_side_success");
  const errorBox = document.getElementById("contact_side_error");
  const submitBtn = document.getElementById("contact_side_submit_btn");

  openBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      overlay.classList.add("active");
      panel.classList.add("active");
    });
  });

  closeBtn.addEventListener("click", () => {
    overlay.classList.remove("active");
    panel.classList.remove("active");
  });

  overlay.addEventListener("click", () => {
    overlay.classList.remove("active");
    panel.classList.remove("active");
  });

  if (form) {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      if (successBox) successBox.style.display = "none";
      if (errorBox) errorBox.style.display = "none";
      if (submitBtn) submitBtn.disabled = true;
      try {
        const formData = new FormData(form);
        const response = await fetch(form.action, {
          method: "POST",
          headers: { "X-Requested-With": "XMLHttpRequest" },
          body: formData
        });
        if (!response.ok) throw new Error("Request failed");
        const data = await response.json();
        if (data && data.success) {
          if (successBox) {
            successBox.textContent = data.message || "Thank you for connecting with us.";
            successBox.style.display = "block";
          }
          alert(data.message || "Thank you for connecting with us.");
          // do not hide the form; just show success message
        } else {
          if (errorBox) {
            errorBox.textContent = (data && data.message) || "An error occurred. Please try again.";
            errorBox.style.display = "block";
          }
          alert((data && data.message) || "An error occurred. Please try again.");
        }
      } catch (err) {
        if (errorBox) {
          errorBox.textContent = "An error occurred. Please try again.";
          errorBox.style.display = "block";
        }
        alert("An error occurred. Please try again.");
      } finally {
        if (submitBtn) submitBtn.disabled = false;
      }
    });
  }
});
</script>
