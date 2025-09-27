<?php
   include('header.php');
   ?>
<style>
   .property_date_main_head_box h2{
   font-size:55px;
   font-family: IvyOraDisplay-Regular;
   text-align:center;
   margin-bottom:30px
   }
   .property_date_main_sec{
   padding:60px 0px
   }
   .property_date_main_sec {
   width: 70%;
   margin: 0 auto;
   padding: 40px 0;
   }
   .property_date_main_box {
   display: flex;
   justify-content: space-between;
   min-height: 300px;
   }
   .property_date_main_left {
   height: max-content;
   width: 37%;
   border: 1px solid black;
   max-height: max-content;
   }
   .property_date_main_plan {
   padding: 15px;
   display: flex;
   justify-content: space-between;
   cursor: pointer;
   border-bottom: 1px solid #eee;
   }
   .property_date_main_plan:hover,
   .property_date_main_plan.active {
   background: black;
   color: white;
   }
   .property_date_main_right {
   width: 60%;
   padding: 20px;
   border: 1px solid black;
   display: none;
   }
   .property_date_main_form {
   display: none;
   }
   .property_date_main_form.active {
   display: block;
   }
   .property_date_main_days label {
   display: inline-block;
   margin: 5px 10px 5px 0;
   border: 1px solid #000;
   padding: 5px 10px;
   cursor: pointer;
   }
   .property_date_main_timing button,
   .property_date_main_time_btn {
   border: 1px solid #000;
   padding: 8px 15px;
   margin-right: 10px;
   cursor: pointer;
   background: white;
   }
   .property_date_main_time_btn.active {
   background: black;
   color: white;
   }
   .property_date_main_dailty {
   font-family: IvyOraDisplay-Regular;
   font-size: 25px;
   font-weight: 500;
   }
   .property_date_main_plan{
   font-family: IvyOraDisplay-Regular;
   font-weight: 500;
   display:flex;
   align-items:center;
   border-bottom: 1px solid black;
   }
   .property_date_main_discount{
   font-size:18px
   }
   .bb-none{
   border:0px !important
   }
   .property_date_main_time_btn {
   display: none;
   }
   /* Style labels like buttons */
   .property_date_main_time_label {
   border: 1px solid #000;
   padding: 8px 28px;
   margin-right: 10px;
   cursor: pointer;
   background: white;
   user-select: none;
   }
   /* When selected */
   .property_date_main_time_btn:checked + span,
   .property_date_main_time_label:has(input:checked) {
   background: black;
   color: white;
   }
   .form_main_biggg_box h4{
   font-size:25px;
   text-align:center;
   margin-bottom:20px
   }
   .daily_date_box,.property_date_main_timing{
   display:flex;
   justify-content:center
   }
   .daily_date_box input{
   width: 200px;
   height: 40px;
   padding: 10px;
   margin-bottom: 30px;
   }
   .weekly_days_select_main_box {
   display: inline-block;
   border: 2px solid #000;
   padding: 10px 15px;
   cursor: pointer;
   background: #fff;
   transition: all 0.3s ease;
   }
   .weekly_days_select_main_box input {
   display: none;
   }
   .weekly_days_select_main_label {
   display: flex;
   align-items: center;
   font-size: 15px;
   font-weight: 500;
   cursor: pointer;
   margin:0px
   }
   /* Custom checkbox square */
   .weekly_days_select_main_custom_checkbox {
   width: 18px;
   height: 18px;
   border: 2px solid #000;
   margin-right: 10px;
   position: relative;
   }
   .weekly_days_select_main_box input:checked + .weekly_days_select_main_label .weekly_days_select_main_custom_checkbox {
   background: #000;
   }
   .weekly_days_select_main_box input:checked + .weekly_days_select_main_label .weekly_days_select_main_custom_checkbox::after {
   content: "";
   position: absolute;
   left: 5px;
   top: 2px;
   width: 5px;
   height: 10px;
   border: solid #fff;
   border-width: 0 2px 2px 0;
   transform: rotate(45deg);
   }
   .weekly_days_select_main_box_100{
    width:100% !important
   }
   .weekly_days_select_main_box_parent{
    display:flex;
    justify-content:space-between;
    margin-bottom:30px
   }
   .weekly_days_select_main_box{
    width:100%;
    margin-bottom:10px
   }
</style>
<section class="top_time_line_sec">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="time_line_box">
               <img src="<?php echo base_url() ?>assets/img/new/progress-4-3dot.png" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- date form sec -->
<section class="property_date_main_sec">
   <div class="container property_date_main_container">
      <div class="property_date_main_box">
         <!-- Left Side Plans -->
         <div class="property_date_main_left">
            <div class="property_date_main_plan" data-plan="Daily">
               <span  class="property_date_main_dailty">Daily</span> <span class="property_date_main_discount">75% Discount</span>
            </div>
            <div class="property_date_main_plan" data-plan="Weekly">
               <span class="property_date_main_dailty">Weekly</span> <span class="property_date_main_discount">50% Discount</span>
            </div>
            <div class="property_date_main_plan" data-plan="Fortnightly">
               <span class="property_date_main_dailty">Fortnightly</span> <span class="property_date_main_discount">40% Discount</span>
            </div>
            <div class="property_date_main_plan bb-none" data-plan="Monthly">
               <span class="property_date_main_dailty">Monthly</span> <span class="property_date_main_discount">30% Discount</span>
            </div>
         </div>
         <!-- Right Side Forms (different for each plan) -->
         <div class="property_date_main_right" id="property_date_main_right">
            <!-- Daily Form -->
            <div class="property_date_main_form form_main_biggg_box" id="form-daily">
               <h4>Select Date</h4>
               <div class="daily_date_box">
                  <input type="date" id="property_date_main_daily_date">
               </div>
               <h4>Select Timing</h4>
               <div class="property_date_main_timing">
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Morning" class="property_date_main_time_btn"> 
                  Morning
                  </label>
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Afternoon" class="property_date_main_time_btn"> 
                  Afternoon
                  </label>
               </div>
            </div>
            <!-- Weekly Form -->
            <div class="property_date_main_form form_main_biggg_box" id="form-weekly">
               <h4>Select Starting Date</h4>
               <div class="daily_date_box">
                  <input type="date" id="property_date_main_daily_date">
               </div>
               
               <h4>Select Days</h4>
               <div class="weekly_days_select_main_box_parent">
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="monday" />
                           <label for="monday" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Monday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="tuesday" />
                           <label for="tuesday" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Tuesday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="wednesady" />
                           <label for="wednesady" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Wednesday
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Thursday" />
                           <label for="Thursday" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Thursday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Friday" />
                           <label for="Friday" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Friday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Saturday" />
                           <label for="Saturday" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Saturday
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Sunday" />
                           <label for="Sunday" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Sunday
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <h4>Select Timing</h4>
               <div class="property_date_main_timing">
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Morning" class="property_date_main_time_btn"> 
                  Morning
                  </label>
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Afternoon" class="property_date_main_time_btn"> 
                  Afternoon
                  </label>
               </div>
            </div>
            <!-- Fortnightly Form -->
            <div class="property_date_main_form form_main_biggg_box" id="form-fortnightly">
               <h4>Select Starting Date</h4>
               <div class="daily_date_box">
                  <input type="date" id="property_date_main_daily_date">
               </div>
               
               <h4>Select Days</h4>
               <div class="weekly_days_select_main_box_parent">
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="monday2" />
                           <label for="monday2" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Monday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="tuesday2" />
                           <label for="tuesday2" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Tuesday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="wednesady2" />
                           <label for="wednesady2" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Wednesday
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Thursday2" />
                           <label for="Thursday2" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Thursday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Friday2" />
                           <label for="Friday2" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Friday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Saturday2" />
                           <label for="Saturday2" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Saturday
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Sunday2" />
                           <label for="Sunday2" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Sunday
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <h4>Select Timing</h4>
               <div class="property_date_main_timing">
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Morning" class="property_date_main_time_btn"> 
                  Morning
                  </label>
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Afternoon" class="property_date_main_time_btn"> 
                  Afternoon
                  </label>
               </div>
            </div>
            <!-- Monthly Form -->
            <div class="property_date_main_form form_main_biggg_box" id="form-monthly">
               <h4>Select Starting Date</h4>
               <div class="daily_date_box">
                  <input type="date" id="property_date_main_daily_date">
               </div>
               
               <h4>Select Days</h4>
               <div class="weekly_days_select_main_box_parent">
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="monday3" />
                           <label for="monday3" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Monday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="tuesday3" />
                           <label for="tuesday3" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Tuesday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="wednesady3" />
                           <label for="wednesady3" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Wednesday
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Thursday3" />
                           <label for="Thursday3" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Thursday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Friday3" />
                           <label for="Friday3" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Friday
                           </label>
                        </div>
                     </div>
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Saturday3" />
                           <label for="Saturday3" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Saturday
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="weekly_days_select_main_box_30">
                     <div class="weekly_days_select_main_box_100">
                        <div class="weekly_days_select_main_box">
                           <input type="checkbox" id="Sunday3" />
                           <label for="Sunday3" class="weekly_days_select_main_label">
                           <span class="weekly_days_select_main_custom_checkbox"></span>
                           Sunday
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <h4>Select Timing</h4>
               <div class="property_date_main_timing">
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Morning" class="property_date_main_time_btn"> 
                  Morning
                  </label>
                  <label class="property_date_main_time_label">
                  <input type="radio" name="time" value="Afternoon" class="property_date_main_time_btn"> 
                  Afternoon
                  </label>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
   include('footer.php');
   ?>
<script>
   const plans = document.querySelectorAll(".property_date_main_plan");
   const rightBox = document.getElementById("property_date_main_right");
   const forms = document.querySelectorAll(".property_date_main_form");
   
   const dataStore = {
     selectedPlan: "",
     formData: {}
   };
   
   // Handle Plan Click
   plans.forEach(plan => {
     plan.addEventListener("click", () => {
       plans.forEach(p => p.classList.remove("active"));
       plan.classList.add("active");
   
       // Show right box
       rightBox.style.display = "block";
   
       // Hide all forms first
       forms.forEach(f => f.classList.remove("active"));
   
       const planType = plan.getAttribute("data-plan").toLowerCase();
       const formToShow = document.getElementById("form-" + planType);
       if (formToShow) formToShow.classList.add("active");
   
       dataStore.selectedPlan = plan.getAttribute("data-plan");
       console.log("Plan Selected:", dataStore);
     });
   });
   
   // Handle Timing Buttons (for all forms)
   document.querySelectorAll(".property_date_main_time_btn").forEach(btn => {
     btn.addEventListener("click", () => {
       const parent = btn.closest(".property_date_main_form");
       parent.querySelectorAll(".property_date_main_time_btn").forEach(b => b.classList.remove("active"));
       btn.classList.add("active");
       dataStore.formData.timing = btn.getAttribute("data-time");
       console.log("Timing Selected:", dataStore);
     });
   });
</script>