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
    font-size: 18px;
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
    font-size: 18px;
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
    font-size: 18px;
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
</style>

  
 <section class="top_time_line_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="time_line_box">
                    <img src="<?php echo base_url()?>public/assets/img/new/progress-3-2dot.png" alt="">
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
               <h2>Select Your Keeper Type</h2>
               <p>Pick the Keeper that matches your needs</p>
               <form action="#">
                  <div class="register_form_main_form_box">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Timing</label>
                              <select name="country" >
                                 <option value="">Select  Timing</option>
                                 <option value="">option 2</option>
                                 <option value="">option 3</option>
                                 <option value="">option 4</option>
                                 <option value="">option 5</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Date</label>
                              <input type="date" name="date" placeholder="Enter Your Mobile Number">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="register_form_main_imput_box">
                              <label>Number of Kitchen</label>
                              <select name="country" >
                                 <option value="">Select Number of Kitchen</option>
                                 <option value="">option 2</option>
                                 <option value="">option 3</option>
                                 <option value="">option 4</option>
                                 <option value="">option 5</option>
                              </select>
                           </div>
                        </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Number of Rooms</label>
                           <select name="country" >
                              <option value="">Select Number of Rooms</option>
                              <option value="">option 2</option>
                              <option value="">option 3</option>
                              <option value="">option 4</option>
                              <option value="">option 5</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Name</label>
                           <input type="text" placeholder="Enter Your Name">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Number of Bathrooms </label>
                           <select name="country" >
                              <option value="">Select Number of Bathrooms</option>
                              <option value="">option 2</option>
                              <option value="">option 3</option>
                              <option value="">option 4</option>
                              <option value="">option 5</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Town / Area </label>
                           <select name="country" >
                              <option value="">Select Your Town / Area</option>
                              <option value="">option 2</option>
                              <option value="">option 3</option>
                              <option value="">option 4</option>
                              <option value="">option 5</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Phone Number</label>
                           <input type="text" placeholder="Enter Phone Number">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Postal Code</label>
                           <input type="text" placeholder="Enter Your Postal Code">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>City</label>
                           <input type="text" placeholder="Enter Your City">
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <label>Address</label>
                           <textarea name="" placeholder=""></textarea>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="register_form_main_imput_box">
                           <div class="register_form_main_buttom_box">
                              <a href="<?php echo base_url()?>select-keeper-type" class="submit_btn">Back</a>
                              <button class="back_btn">Discover Trusted Help</button>
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
</script>