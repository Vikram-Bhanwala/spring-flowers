<?php
   include('header.php');
   ?>
<style>
   .join_us_sec{
   padding:60px 0px;
   }
   .join_us_head_box h2{
   font-family:IvyOraDisplay-Regular;
   margin-bottom:10px;
   text-align:center
   }
   .join_us_head_box p{
   text-align:center;
   margin-bottom:30px
   }
   .join_us_box img{
   width: 100% !important  ;
   }
   .join_us_box {
   position: relative;
   overflow: hidden;
   display: inline-block;
   width: 100%;
   }
   .join_us_box img {
   width: 100%;
   display: block;
   }
   .join_us_overlay {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background: rgba(0,0,0,0.3); /* black overlay */
   display: flex;
   align-items: flex-end; /* push content to bottom */
   padding: 20px;
   }
   .join_us_content {
   color: #fff;
   text-align: left;
   }
   .join_us_content h3 {
   margin: 0 0 5px 0;
   font-size: 50px;
   font-weight: 100;
   font-family:IvyOraDisplay-Regular;
   }
   .jon_row{
   display:flex;
   justify-content:center
   }
</style>

<!-- join us section -->
<section class="join_us_sec">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="join_us_head_box">
               <h2>Book A Service</h2>
               <p>Pick the property that matches your needs</p>
            </div>
         </div>
      </div>
      <div class="row jon_row">
         <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="join_us_box">
                <a href="<?php echo base_url()?>select-property-type">
               <img src="assets/img/new/jon1.jpg" alt="">
               <div class="join_us_overlay">
                  <div class="join_us_content">
                     <h3>House Cleaning</h3>
                  </div>
               </div>
               </a>
            </div>
         </div>
         <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="join_us_box">
                <a href="<?php echo base_url()?>select-keeper-type">
               <img src="assets/img/new/jon2.jpg" alt="">
               <div class="join_us_overlay">
                  <div class="join_us_content">
                     <h3>House Keeping</h3>
                  </div>
               </div>
            </a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
   include('footer.php');
   ?>