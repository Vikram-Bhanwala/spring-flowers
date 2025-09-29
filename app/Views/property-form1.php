<?php
include('header.php');
?>
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
    font-size: 16px;
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
    color:white;
    width: 210px;
    margin-left:40px
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
    .register_form_main_buttom_box a{
    background:transparent !important;
    text-align:center;
    text-decoration:none;
    color:black !important
}

/* Required field styling */
.register_form_main_imput_box label::after {
    content: " *";
    color: #e74c3c;
    font-weight: bold;
}

/* Error styling for invalid fields */
.register_form_main_imput_box input:invalid,
.register_form_main_imput_box select:invalid,
.register_form_main_imput_box textarea:invalid {
    border-bottom: 2px solid #e74c3c !important;
}

.register_form_main_imput_box input:valid,
.register_form_main_imput_box select:valid,
.register_form_main_imput_box textarea:valid {
    border-bottom: 2px solid #27ae60 !important;
}

/* Form validation message */
.validation-message {
    color: #e74c3c;
    font-size: 14px;
    margin-top: 5px;
    display: none;
}

.register_form_main_imput_box input:invalid + .validation-message,
.register_form_main_imput_box select:invalid + .validation-message,
.register_form_main_imput_box textarea:invalid + .validation-message {
    display: block;
}
</style>

  
 <section class="top_time_line_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="time_line_box">
                    <img src="<?php echo base_url() ?>assets/img/new/progress-4-2dot.png" alt="">
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
               <h2>Enter Property Details</h2>
               <p>The more we know the better we serve</p>
               
               <?php if (session()->getFlashdata('error')): ?>
               <div style="background: #ffebee; color: #c62828; padding: 15px; margin-bottom: 20px; border: 1px solid #ffcdd2; border-radius: 4px;">
                  <?php echo session()->getFlashdata('error'); ?>
               </div>
               <?php endif; ?>
               
               <?php if (session()->getFlashdata('validation_errors')): ?>
               <div style="background: #ffebee; color: #c62828; padding: 15px; margin-bottom: 20px; border: 1px solid #ffcdd2; border-radius: 4px;">
                  <strong>Please correct the following errors:</strong>
                  <ul style="margin: 10px 0 0 20px;">
                     <?php foreach (session()->getFlashdata('validation_errors') as $error): ?>
                        <li><?php echo $error; ?></li>
                     <?php endforeach; ?>
                  </ul>
               </div>
               <?php endif; ?>
               <form action="<?php echo base_url()?>property-form-submit" method="post">
                  <div class="register_form_main_form_box">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Number of Rooms</label>
                              <select name="room" required>
                                 <option value="">Select Number of Rooms</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Number of Kitchen</label>
                              <select name="num_kitchens" required>
                                 <option value="">Select Number of Kitchen</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                           </div>
                        </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Number of Bathrooms </label>
                           <select name="num_bathrooms" required>
                              <option value="">Select Number of Bathrooms</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Name</label>
                           <input type="text" name="name" placeholder="Enter Your Name" required>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Phone Number</label>
                           <input type="text" name="phone" placeholder="Enter Phone Number" required>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Town / Area </label>
                           <select name="town_area" required>
                              <option value="">Select Your Town / Area</option>
                              <option value="Bath">Bath</option>
                              <option value="Bourton-on-the-water">Bourton-on-the-water</option>
                              <option value="Bristol">Bristol</option>
                              <option value="Cheltenham">Cheltenham</option>
                              <option value="Chippenham">Chippenham</option>
                              <option value="Cirencester">Cirencester</option>
                              <option value="Gloucester">Gloucester</option>
                              <option value="Hullavington">Hullavington</option>
                              <option value="Malmesbury">Malmesbury</option>
                              <option value="Marlborough">Marlborough</option>
                              <option value="South Gloucestershire">South Gloucestershire</option>
                              <option value="Stroud">Stroud</option>
                              <option value="Stow-on-the-world">Stow-on-the-world</option>
                              <option value="Swindon">Swindon</option>
                              <option value="Tetbury">Tetbury</option>
                              <option value="Wotton-under-Edge">Wotton-under-Edge</option>
                              <option value="Yate">Yate</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>City</label>
                           <input type="text" name="city" placeholder="Enter Your City" required>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Postal Code</label>
                           <input type="text" name="postal_code" placeholder="Enter Your Postal Code" required>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Address</label>
                           <textarea name="address" placeholder="Enter Your Address" required></textarea>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <div class="register_form_main_buttom_box">
                              <a href="<?php echo base_url()?>select-property-type" class="submit_btn">Back</a>
                              <button type="submit" class="back_btn">Next</button>
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
// Form validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const submitBtn = document.querySelector('button[type="submit"]');
    
    // Add validation messages to each required field
    const requiredFields = form.querySelectorAll('input[required], select[required], textarea[required]');
    
    requiredFields.forEach(field => {
        // Add validation message element
        const validationMsg = document.createElement('div');
        validationMsg.className = 'validation-message';
        validationMsg.textContent = 'This field is required';
        field.parentNode.appendChild(validationMsg);
        
        // Real-time validation
        field.addEventListener('blur', function() {
            validateField(this);
        });
        
        field.addEventListener('input', function() {
            if (this.checkValidity()) {
                validateField(this);
            }
        });
    });
    
    function validateField(field) {
        const validationMsg = field.parentNode.querySelector('.validation-message');
        
        if (!field.checkValidity()) {
            field.style.borderBottom = '2px solid #e74c3c';
            validationMsg.style.display = 'block';
            
            // Custom validation messages
            if (field.validity.valueMissing) {
                validationMsg.textContent = 'This field is required';
            } else if (field.validity.tooShort) {
                validationMsg.textContent = 'Please enter at least ' + field.minLength + ' characters';
            } else if (field.validity.tooLong) {
                validationMsg.textContent = 'Please enter no more than ' + field.maxLength + ' characters';
            } else if (field.validity.patternMismatch) {
                validationMsg.textContent = 'Please enter a valid format';
            }
        } else {
            field.style.borderBottom = '2px solid #27ae60';
            validationMsg.style.display = 'none';
        }
    }
    
    // Form submission validation
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.checkValidity()) {
                validateField(field);
                isValid = false;
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields correctly.');
        }
    });
    
    // Phone number validation
    const phoneField = document.querySelector('input[name="phone"]');
    if (phoneField) {
        phoneField.addEventListener('input', function() {
            // Remove non-numeric characters except + and spaces
            this.value = this.value.replace(/[^0-9+\s-]/g, '');
        });
    }
    
    // Postal code validation
    const postalField = document.querySelector('input[name="postal_code"]');
    if (postalField) {
        postalField.addEventListener('input', function() {
            // Convert to uppercase for UK postal codes
            this.value = this.value.toUpperCase();
        });
    }
});

// Legacy file upload code (if needed)
const fileInput = document.getElementById("cvFile");
const uploadBtn = document.getElementById("uploadBtn");
const fileNameDiv = document.getElementById("cvFileName");

if (fileInput && uploadBtn && fileNameDiv) {
    // Trigger file input when button clicked
    uploadBtn.addEventListener("click", () => fileInput.click());

    // Show selected file name
    fileInput.addEventListener("change", () => {
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
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
}
</script>