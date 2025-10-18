<?php
   include('header.php');
   ?>
   
	<title>Registration</title>
<style>
   .register_form_main_sec {
   padding:60px 0px;
   background:#f9f8f6
   }
   .register_form_main_row{
   justify-content:center !important;
   display: flex;
   }
   .register_form_main_box h2{
   font-size:55px;
   font-family: IvyOraDisplay-Regular;
   text-align:center
   }
   .register_form_main_box p{
   text-align:center;
   font-size:18px;
   margin-bottom:30px
   }
   .register_form_main_imput_box{
   margin-bottom:30px
   }
   .register_form_main_imput_box label{
   width: 100%;
   color:#00000047
   }
   .register_form_main_imput_box textarea {
   width: 100%;
   border: 0px !important;
   background: #ffffff00;
   font-size: 15px;
   color: black !important;
   outline: none;
   border-bottom: 1px solid black !important;
   padding-bottom:10px
   }
   .register_form_main_imput_box textarea::placeholder {
   color: black !important;
   }
   .register_form_main_imput_box input {
   width: 100%;
   border: 0px !important;
   background: #ffffff00;
   font-size: 15px;
   color: black !important;
   outline: none;
   border-bottom: 1px solid black !important;
   }
   .register_form_main_imput_box input::placeholder {
   color: black !important;
   }
   .register_form_main_imput_box select {
   width: 100%;
   border: 0px !important;
   background: #ffffff00;
   font-size: 15px;
   color: black !important;
   outline: none;
   border-bottom: 1px solid black !important;
   }
   .availability_options {
   font-family: Arial, sans-serif;
   font-size: 16px;
   }
   .availability_options h4 {
   font-weight: bold;
   margin-bottom: 10px;
   font-size: 15px;
   }
   /* Hide default radio */
   .availability_options input[type="radio"] {
   display: none;
   }
   /* Custom radio style */
   .availability_options label {
   display: flex;
   align-items: center;
   cursor: pointer;
   margin-bottom: 10px;
   font-size: 13px;
   color:black
   }
   /* Box style */
   .availability_options span.custom_radio {
   height: 13px;
   width: 13px;
   border: 2px solid #000;
   display: inline-block;
   margin-right: 8px;
   border-radius: 3px;
   position: relative;
   }
   /* Selected state */
   .availability_options input[type="radio"]:checked + span.custom_radio::after {
   content: "";
   position: absolute;
   top: 0px;
   left: 0px;
   width: 12px;
   height: 12px;
   background: #000;
   }
   .cv_upload_box {
   display: flex;
   align-items: center;
   gap: 15px;
   /* font-family: Arial, sans-serif; */
   justify-content: center;
   }
   .cv_file_name {
   font-size: 16px;
   color: #000;
   display: flex;
   align-items: center;
   gap: 8px;
   }
   .cv_file_name span {
   cursor: pointer;
   border: 1px solid #000;
   border-radius: 50%;
   width: 18px;
   height: 18px;
   display: flex;
   justify-content: center;
   align-items: center;
   font-size: 12px;
   }
   .cv_upload_btn {
   background: #000;
   color: #fff;
   padding: 10px 20px;
   cursor: pointer;
   border: none;
   font-size: 16px;
   transition: 0.3s;
   }
   .cv_upload_btn:hover {
   background: #333;
   }
   .cv_upload_box input[type="file"] {
   display: none;
   }
   .back_btn{
   padding:10px 20px;
   background:black !important;
   color:white !important;
   width: 150px;
   text-decoration:none !important;
   text-align:center;
   margin:0px

   }
   .submit_btn{
   padding:10px 20px;
   border: 2px solid black !important;
   color:black;
   background:transparent;
   width: 150px;
   margin-left:20px
   }
   .register_form_main_buttom_box{
   display:flex;
   justify-content:center;
   margin-top:40px
   }
   
   /* Validation Styles */
   .register_form_main_imput_box input:invalid,
   .register_form_main_imput_box select:invalid,
   .register_form_main_imput_box textarea:invalid {
   border-bottom-color: #dc3545 !important;
   }
   
   .register_form_main_imput_box input:valid,
   .register_form_main_imput_box select:valid,
   .register_form_main_imput_box textarea:valid {
   border-bottom-color: #28a745 !important;
   }
   
   .register_form_main_imput_box input:focus,
   .register_form_main_imput_box select:focus,
   .register_form_main_imput_box textarea:focus {
   border-bottom-color: #007bff !important;
   }
   
   /* Radio button validation */
   .availability_options input[type="radio"]:invalid + span.custom_radio {
   border-color: #dc3545 !important;
   }
   
   .availability_options input[type="radio"]:valid + span.custom_radio {
   border-color: #28a745 !important;
   }
   
   /* Loading state for submit button */
   .submit_btn:disabled {
   opacity: 0.6;
   cursor: not-allowed;
   }
   
   .submit_btn.loading {
   position: relative;
   color: transparent;
   }
   
   .submit_btn.loading::after {
   content: "";
   position: absolute;
   width: 16px;
   height: 16px;
   top: 50%;
   left: 50%;
   margin-left: -8px;
   margin-top: -8px;
   border-radius: 50%;
   border: 2px solid #ffffff;
   border-top-color: transparent;
   animation: spin 1s linear infinite;
   }
   
   @keyframes spin {
   to { transform: rotate(360deg); }
   }
</style>
<section class="top_time_line_sec">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="time_line_box">
               <img src="<?php echo base_url() ?>assets/img/new/progress-3-2dot.png" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- registration form sec -->
<section class="register_form_main_sec">
   <div class="container">
      <div class="row register_form_main_row">
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="register_form_main_box">
               <h2>Registration</h2>
               <p>The more we know the better we grow</p>
               <form id="registrationForm" action="<?php echo base_url('registration-submit'); ?>" method="POST" enctype="multipart/form-data">
                  <div class="register_form_main_form_box">
                     <!-- Error Message Container -->
                     <div id="registrationFormError" class="alert alert-danger" style="display: none; margin-bottom: 20px; padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px;">
                        <strong>Please correct the following errors:</strong>
                        <ul id="errorList" style="margin: 10px 0 0 0; padding-left: 20px;"></ul>
                     </div>
                     
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>I am searching for <span style="color: red;">*</span></label>
                              <select name="job_type" required>
                                 <option value="">Select Type of House Keeping</option>
                                 <option value="House Keeper">House Keeper</option>
                                 <option value="Companion">Companion</option>
                                 <option value="Cook">Cook</option>
                                 <option value="Groundman">Groundman</option>
                                 <option value="Nanny">Nanny</option>
                                 <option value="Security">Security</option>
                                 <option value="Head House Keeper">Head House Keeper</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Name <span style="color: red;">*</span></label>
                              <input type="text" name="name" placeholder="Enter Your Name" required>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Phone <span style="color: red;">*</span></label>
                              <input type="tel" name="phone" placeholder="Enter Your Mobile Number" required>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Email Address <span style="color: red;">*</span></label>
                              <input type="email" name="email" placeholder="Enter Your Email Address" required>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Country of living <span style="color: red;">*</span></label>
                              <input type="text" name="country_of_living" placeholder="Country of Living" required>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>County <span style="color: red;">*</span></label>
                              <input type="text" name="county" placeholder="County" required>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                           <div class="register_form_main_imput_box">
                              <div class="availability_options">
                                 <h4>Type of Work <span style="color: red;">*</span></h4>
                                 <label>
                                 <input type="radio" name="type_of_work" value="live_in_work" required>
                                 <span class="custom_radio"></span>
                                 Live In
                                 </label>
                                 <label>
                                 <input type="radio" name="type_of_work" value="live_out_work" required>
                                 <span class="custom_radio"></span>
                                 Live Out
                                 </label>
                                 <label>
                                 <input type="radio" name="type_of_work" value="flexible_work" required>
                                 <span class="custom_radio"></span>
                                 Flexible
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                           <div class="register_form_main_imput_box">
                              <div class="availability_options">
                                 <h4>Availability <span style="color: red;">*</span></h4>
                                 <label>
                                 <input type="radio" name="availability_type" value="full_time_availability" required>
                                 <span class="custom_radio"></span>
                                 Full Time
                                 </label>
                                 <label>
                                 <input type="radio" name="availability_type" value="part_time_availability" required>
                                 <span class="custom_radio"></span>
                                 Part Time
                                 </label>
                                 <label>
                                 <input type="radio" name="availability_type" value="flexible_availability" required>
                                 <span class="custom_radio"></span>
                                 Flexible
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <div class="availability_options">
                                 <h4>Ideal Start Date <span style="color: red;">*</span></h4>
                                 <label>
                                 <input type="radio" name="start_date" value="asap_start" required>
                                 <span class="custom_radio"></span>
                                 ASAP
                                 </label>
                                 <label>
                                 <input type="radio" name="start_date" value="flexible_start" required>
                                 <span class="custom_radio"></span>
                                 Flexible
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Message</label>
                              <textarea name="message" placeholder="I am hardworking, reliable, and take pride in keeping spaces clean and organized." maxlength="1000"></textarea>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <div class="cv_upload_box">
                                 <div class="cv_file_name" id="cvFileName">No file selected</div>
                                 <button type="button" class="cv_upload_btn" id="uploadBtn">Upload your CV</button>
                                 <input type="file" id="cvFile" name="cv_file" accept=".pdf,.doc,.docx,.png,.jpg,.jpeg">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <div class="register_form_main_buttom_box">
                                 <a href="<?php echo base_url()?>find-a-job" class="back_btn">Back</a>
                                 <button type="submit" class="submit_btn">Submit</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
   include('footer.php');
   ?>
<script>
   const fileInput = document.getElementById("cvFile");
   const uploadBtn = document.getElementById("uploadBtn");
   const fileNameDiv = document.getElementById("cvFileName");
   const form = document.getElementById("registrationForm");
   const submitBtn = form.querySelector('.submit_btn');
   const errorContainer = document.getElementById("registrationFormError");
   const errorList = document.getElementById("errorList");
   
   // Trigger file input when button clicked
   uploadBtn.addEventListener("click", () => fileInput.click());
   
   // Show selected file name
   fileInput.addEventListener("change", () => {
       if (fileInput.files.length > 0) {
           const fileName = fileInput.files[0].name;
           const fileSize = fileInput.files[0].size;
           const maxSize = 5 * 1024 * 1024; // 5MB
           
           if (fileSize > maxSize) {
               alert('File size must be less than 5MB');
               fileInput.value = "";
               fileNameDiv.textContent = "No file selected";
               return;
           }
           
           fileNameDiv.innerHTML = `${fileName} <span id="removeFile">&times;</span>`;
   
           // Remove file when cross is clicked
           document.getElementById("removeFile").addEventListener("click", () => {
               fileInput.value = "";
               fileNameDiv.textContent = "No file selected";
           });
       } else {
           fileNameDiv.textContent = "No file selected";
       }
   });
   
   // Real-time validation
   const inputs = form.querySelectorAll('input, select, textarea');
   inputs.forEach(input => {
       input.addEventListener('blur', validateField);
       input.addEventListener('input', clearFieldError);
   });
   
   // Radio button validation
   const radioGroups = form.querySelectorAll('input[type="radio"]');
   radioGroups.forEach(radio => {
       radio.addEventListener('change', validateRadioGroup);
   });
   
   function validateField(e) {
       const field = e.target;
       const value = field.value.trim();
       
       // Clear previous error styling
       field.style.borderBottomColor = '';
       
       // Validate based on field type
       if (field.hasAttribute('required') && !value) {
           showFieldError(field, 'This field is required');
           return false;
       }
       
       if (field.type === 'email' && value && !isValidEmail(value)) {
           showFieldError(field, 'Please enter a valid email address');
           return false;
       }
       
       if (field.type === 'tel' && value && !isValidPhone(value)) {
           showFieldError(field, 'Please enter a valid phone number');
           return false;
       }
       
       if (field.name === 'name' && value && value.length < 2) {
           showFieldError(field, 'Name must be at least 2 characters long');
           return false;
       }
       
       return true;
   }
   
   function validateRadioGroup(e) {
       const groupName = e.target.name;
       const group = form.querySelectorAll(`input[name="${groupName}"]`);
       const isSelected = Array.from(group).some(radio => radio.checked);
       
       group.forEach(radio => {
           const span = radio.nextElementSibling;
           if (span && span.classList.contains('custom_radio')) {
               span.style.borderColor = isSelected ? '#28a745' : '#dc3545';
           }
       });
       
       return isSelected;
   }
   
   function showFieldError(field, message) {
       field.style.borderBottomColor = '#dc3545';
       // You could also show individual field error messages here
   }
   
   function clearFieldError(e) {
       const field = e.target;
       field.style.borderBottomColor = '';
   }
   
   function isValidEmail(email) {
       const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
       return emailRegex.test(email);
   }
   
   function isValidPhone(phone) {
       const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
       return phoneRegex.test(phone);
   }
   
   function showErrors(errors) {
       errorList.innerHTML = '';
       Object.values(errors).forEach(error => {
           const li = document.createElement('li');
           li.textContent = error;
           errorList.appendChild(li);
       });
       errorContainer.style.display = 'block';
   }
   
   function hideErrors() {
       errorContainer.style.display = 'none';
   }
   
   // Form submission
   form.addEventListener('submit', async function(e) {
       e.preventDefault();
       
       // Hide previous errors
       hideErrors();
       
       // Validate all required fields
       let isValid = true;
       const errors = {};
       
       // Check all required fields
       const requiredFields = form.querySelectorAll('[required]');
       requiredFields.forEach(field => {
           if (!validateField({ target: field })) {
               isValid = false;
           }
       });
       
       // Check radio button groups
       const radioGroupNames = ['type_of_work', 'availability_type', 'start_date'];
       radioGroupNames.forEach(groupName => {
           const group = form.querySelectorAll(`input[name="${groupName}"]`);
           const isSelected = Array.from(group).some(radio => radio.checked);
           if (!isSelected) {
               isValid = false;
               errors[groupName] = 'Please select an option';
           }
       });
       
       if (!isValid) {
           showErrors({ general: 'Please fill in all required fields correctly.' });
           return;
       }
       
       // Show loading state
       submitBtn.disabled = true;
       submitBtn.classList.add('loading');
       
       try {
           const formData = new FormData(form);
           
           // Get the form action URL
           const formAction = form.getAttribute('action');
           console.log('Submitting to:', formAction);
           
           const response = await fetch(formAction, {
               method: 'POST',
               body: formData,
               headers: {
                   'X-Requested-With': 'XMLHttpRequest'
               }
           });
           
           console.log('Response status:', response.status);
           console.log('Response headers:', response.headers);
           
           if (!response.ok) {
               throw new Error(`HTTP error! status: ${response.status}`);
           }
           
           const result = await response.json();
           console.log('Response data:', result);
           
           if (result.success) {
               // Success - redirect to thank you page
               window.location.href = '<?php echo base_url("thankyou"); ?>';
           } else {
               // Show server errors
               if (result.errors) {
                   showErrors(result.errors);
               } else {
                   showErrors({ general: result.message || 'An error occurred. Please try again.' });
               }
           }
       } catch (error) {
           console.error('Form submission error:', error);
           console.error('Error details:', error.message);
           
           // If AJAX fails, try regular form submission as fallback
           console.log('AJAX failed, trying regular form submission...');
           
           // Remove loading state
           submitBtn.disabled = false;
           submitBtn.classList.remove('loading');
           
           // Remove the event listener to prevent infinite loop
           form.removeEventListener('submit', arguments.callee);
           
           // Submit the form normally
           form.submit();
           
           return; // Exit early since we're doing regular submission
       } finally {
           // Remove loading state (only if we didn't do regular submission)
           if (submitBtn.disabled) {
               submitBtn.disabled = false;
               submitBtn.classList.remove('loading');
           }
       }
   });
</script>