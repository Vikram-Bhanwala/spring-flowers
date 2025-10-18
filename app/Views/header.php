
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <title>Home page</title> -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/new/favicon.png">
  
  <!-- Optional: Apple Touch Icon -->
  <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/new/favicon.png">

<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/own.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css">
<!--===============================================================================================-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFNLBTKB');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="tTMq8R6kj1f1WAohRhmxE4TCtt154uSV_LGXQMd31AY" />
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFNLBTKB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Clean Spring Flowers",
  "image": "https://cleanspringflowers.com/public/assets/img/logo.png",
  "@id": "",
  "url": "https://cleanspringflowers.com/",
  "telephone": "+447923639015",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Linden cottage, Mitre street",
    "addressLocality": "Cheltenham",
    "postalCode": "GL537JS",
    "addressCountry": "GB"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": "https://www.linkedin.com/company/clean-spring-flowers/" 
}
</script>

<!-- schema end -->


	<style>
    header {
    z-index: 99999999999 !important;
}


.thank-you-popup-content h2{
 color:rgb(0, 0, 0) !important;

}
.thank-you-popup-content p{
 color:rgb(0, 0, 0) !important;
}
.thank-you-popup-content .close-btn{
color:rgb(255, 255, 255) !important;
background:rgb(0, 0, 0) !important;
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
margin-bottom:0px !important;
    margin-left: 11px;

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

/* Thank You Popup Styles */
.thank-you-popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 999999999;
}

.thank-you-popup-content {
  background: white;
  padding: 40px;
  border-radius: 10px;
  text-align: center;
  max-width: 400px;
  width: 90%;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  animation: popupSlideIn 0.3s ease-out;
}

@keyframes popupSlideIn {
  from {
    opacity: 0;
    transform: scale(0.8) translateY(-50px);
  }
  to {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

.thank-you-popup h2 {
  color: #27ae60;
  margin-bottom: 15px;
  font-size: 28px;
}

.thank-you-popup p {
  color: #333;
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.thank-you-popup .close-btn {
  background: #27ae60;
  color: white;
  border: none;
  padding: 12px 24px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 600;
  transition: background 0.3s;
}

.thank-you-popup .close-btn:hover {
  background: #219a52;
}

/* Loading state for submit button */
.contact_lets_conect_btn:disabled {
  opacity: 0.6 !important;
  cursor: not-allowed !important;
  background-color: #ccc !important;
  transition: all 0.3s ease;
}

.contact_lets_conect_btn.loading {
  position: relative;
  color: transparent !important;
}

.contact_lets_conect_btn.loading::after {
  content: "Please wait...";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #333;
  font-size: 14px;
  font-weight: 600;
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
      <a href="https://cleanspringflowers.com/"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="Clean Springflowers Logo"></a>
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
          <div style="text-align: right; margin-bottom: 20px;">
            <button id="contact_form_side_close" style="
              background: none; 
              border: none; 
              font-size: 24px; 
              cursor: pointer; 
              color: #333;
              padding: 5px 10px;
            " title="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
          
          <!-- Your Form -->
          <div class="contact_form_side_form_box">
              <div class="contact_side_akshay_main_box">
                <form action="<?php echo base_url()?>contact-function" method="post" id="contact_side_form">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Name</label>
                        <input type="text" placeholder="" name="name" required>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Phone Number</label>
                        <input type="text" placeholder="" name="phone" required>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Email Address</label>
                        <input type="text" placeholder="" name="email" required>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Service</label>
                        <select name="service" id=""  required>
                          <option value="">Select a Service</option>
                          <option value="House Keeping">House Keeping </option>
                          <option value="House Cleaning">House Cleaning </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <label>Message</label>
                        <textarea name="message" id="" plaecholder="" ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="contact_side_akshay_main_input_box">
                        <button class="contact_lets_conect_btn" id="contact_side_submit_btn" type="submit">Let's Connect</button>
                      </div>
                      </div>
                </form>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="contact_side_akshay_main_input_box">
                    <div id="contact_side_success" style="display:none;color:green;font-weight:600;min-height:200px;width:100%;">Thank you for connecting with us.</div>
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

<!-- Thank You Popup -->
<div id="thankYouPopup" class="thank-you-popup">
  <div class="thank-you-popup-content">
    <h2>Thank You!</h2>
    <p id="thankYouMessage">Thank you for connecting with us. We'll get back to you soon!</p>
    <button class="close-btn" onclick="closeThankYouPopup()">Close</button>
  </div>
</div>

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
  
  // Debug: Check if elements are found
  console.log('Contact form elements found:', {
    form: !!form,
    successBox: !!successBox,
    errorBox: !!errorBox,
    submitBtn: !!submitBtn
  });
  
  // Test function to manually show success message
  window.testSuccessMessage = function() {
    showThankYouPopup("This is a test message to verify the popup is working!");
  };

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
      console.log('Form submission started');
      
      // Hide previous messages
      if (successBox) successBox.style.display = "none";
      if (errorBox) errorBox.style.display = "none";
      
      // Disable submit button and show loading state
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.classList.add('loading');
        
        // Store original text
        const originalText = submitBtn.textContent;
        submitBtn.setAttribute('data-original-text', originalText);
      }
      
      try {
        const formData = new FormData(form);
        console.log('Form data prepared:', Object.fromEntries(formData));
        
        const response = await fetch(form.action, {
          method: "POST",
          headers: { "X-Requested-With": "XMLHttpRequest" },
          body: formData
        });
        
        console.log('Response status:', response.status);
        console.log('Response ok:', response.ok);
        
        if (!response.ok) {
          console.error('Response not ok:', response.status, response.statusText);
          throw new Error("Request failed");
        }
        
        const data = await response.json();
        console.log('Response data:', data);
        console.log('Data success value:', data.success);
        console.log('Data type:', typeof data.success);
        
        if (data && data.success === true) {
          console.log('Success condition met, showing popup message');
          
          // Hide the form immediately
          form.style.display = "none";
          
          // Show simple popup thank you message
          showThankYouPopup(data.message || "Thank you for connecting with us!");
          
          // Refresh the page after 3 seconds
          setTimeout(() => {
            console.log('Refreshing page...');
            window.location.reload();
          }, 3000);
          
        } else {
          console.log('Success condition NOT met');
          console.log('Data exists:', !!data);
          console.log('Data success:', data ? data.success : 'no data');
          console.log('Data message:', data ? data.message : 'no message');
          
          if (errorBox) {
            errorBox.textContent = (data && data.message) || "An error occurred. Please try again.";
            errorBox.style.display = "block";
            console.log('Error message displayed');
          }
        }
      } catch (err) {
        console.error('Form submission error:', err);
        console.error('Error message:', err.message);
        
        if (errorBox) {
          errorBox.textContent = "An error occurred. Please try again.";
          errorBox.style.display = "block";
          console.log('Error message displayed in catch block');
        }
      } finally {
        // Restore submit button state
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.classList.remove('loading');
          
          // Restore original button text
          const originalText = submitBtn.getAttribute('data-original-text');
          if (originalText) {
            submitBtn.textContent = originalText;
            submitBtn.removeAttribute('data-original-text');
          }
        }
        console.log('Form submission completed');
      }
    });
  }
});

// Function to show thank you popup
function showThankYouPopup(message) {
  const popup = document.getElementById("thankYouPopup");
  const messageElement = document.getElementById("thankYouMessage");
  
  if (popup && messageElement) {
    messageElement.textContent = message;
    popup.style.display = "flex";
    console.log('Thank you popup displayed');
    
    // Add click outside to close functionality
    popup.onclick = function(e) {
      if (e.target === popup) {
        closeThankYouPopup();
      }
    };
  } else {
    console.error('Thank you popup elements not found');
  }
}

// Function to close thank you popup
function closeThankYouPopup() {
  const popup = document.getElementById("thankYouPopup");
  if (popup) {
    popup.style.display = "none";
    console.log('Thank you popup closed');
  }
}

// Function to close contact panel
function closeContactPanel() {
  const overlay = document.getElementById("contact_form_side_overlay");
  const panel = document.getElementById("contact_form_side_panel");
  const form = document.getElementById("contact_side_form");
  const successBox = document.getElementById("contact_side_success");
  
  if (overlay) overlay.classList.remove("active");
  if (panel) panel.classList.remove("active");
  
  // Reset form and success message for next use
  if (form) form.style.display = "block";
  if (successBox) {
    successBox.style.display = "none";
    successBox.innerHTML = "";
  }
  
  // Also reset any dynamically created message container
  const messageContainer = document.getElementById("contact_side_success");
  if (messageContainer) {
    messageContainer.style.display = "none";
    messageContainer.innerHTML = "";
  }
}
</script>
