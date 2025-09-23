<?php
include('header.php');
?>
<style>
    .top_time_line_sec{
        padding:40px 0px
    }
    .time_line_box img{
        width: 100%;
    }
    .thankyou_main_img_box img{
        width: 100% !important;
        height:300px;
        object-fit:cover;
        object-position:top center
    }
    .thankyou_main_sec{
        padding:60px 0px
    }
    .thankyou_main_cont_box h2 {
    font-size: 65px;
    font-family: IvyOraDisplay-Regular;
    font-weight: 200;
    margin-bottom:30px
}
.cont_btn{
    color: black;
    text-decoration: none;
    background: white;
    border: 2px solid black;
    padding: 10px 40px;
}
.house_keeeping_compains_head_box h2{
    font-size:50px;
    margin-bottom:40px;
    font-family: IvyOraDisplay-Regular;
}
.house_keeeping_compains_sec{
    padding-bottom:60px
}

.our_products_head_box h2{
    text-align:center;
    font-family:IvyOraDisplay-Regular;
    font-weight:100;
    color:black;
    font-size:50px;
    margin-bottom:50px
}
.our_products_box img{
    width: 100%;
}
.our_products_box {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.our_products_box img {
  width: 100%;
  display: block;
}

.our_products_overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.4); /* black overlay always visible */
  display: flex;
  align-items: flex-end; /* push content to bottom */
  justify-content: center;
  padding: 20px;
}

.our_products_content {
  text-align: left;
  color: #fff;
  width: 100%;
    font-family:IvyOraDisplay-Regular;
}

.our_products_content h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 100;
    line-height: 25px;
}
.our_products_content h5{
    padding-bottom:15px
}
.our_products_btn {
  background: #fff;
  color: black !important;
  border: none;
  padding: 10px 105px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s;
}


</style>

<section class="top_time_line_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="time_line_box">
                    <img src="<?php echo base_url()?>public/assets/img/new/Progressbar.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- thankyou -->
<section class="thankyou_main_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="thankyou_main_img_box">
                    <img src="<?php echo base_url()?>public/assets/img/new/thank.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="thankyou_main_cont_box">
                    <h2>Thank you for trusting us to make your space sparkle</h2>
                    <a href="#" class="cont_btn">Continue</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- house keeping campoins -->
<section class="house_keeeping_compains_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="house_keeeping_compains_head_box">
                    <h2>Housekeeping Companions</h2>
                </div>
            </div>
        </div>
        <div class="row house_keeeepiing_sldie_prod_row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="our_products_box">
                <img src="public/assets/img/new/our-product1.png" alt="">

                <div class="our_products_overlay">
                    <div class="our_products_content">
                    <h3>5 Housekeeping Tips for Joyful Living Book</h3>
                    <h5>£4.99</h5>
                    <a class="our_products_btn">Buy Now</a>
                    </div>
                </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="our_products_box">
                <img src="public/assets/img/new/our-product1.png" alt="">

                <div class="our_products_overlay">
                    <div class="our_products_content">
                    <h3>Washing Up Pad</h3>
                    <h5>£3.00</h5>
                    <a class="our_products_btn">Buy Now</a>
                    </div>
                </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="our_products_box">
                <img src="public/assets/img/new/our-product1.png" alt="">

                <div class="our_products_overlay">
                    <div class="our_products_content">
                    <h3>Window Cleaning 2-Pack</h3>
                    <h5>£9.50</h5>
                    <a class="our_products_btn">Buy Now</a>
                    </div>
                </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="our_products_box">
                <img src="public/assets/img/new/our-product1.png" alt="">

                <div class="our_products_overlay">
                    <div class="our_products_content">
                    <h3>Replacement&nbsp;Head for Deep Clean Mop</h3>
                    <h5>£6.99</h5>
                    <a class="our_products_btn">Buy Now</a>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</section>



<?php
include('footer.php');
?>