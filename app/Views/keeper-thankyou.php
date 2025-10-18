<?php
include('header.php');
?>

	<title>Thank You</title>
<style>
    .top_time_line_sec{
        padding:40px 0px
    }
    .time_line_box img{
        width: 100%;
    }
    .thankyou_main_img_box img{
        width: 100% !important;
        /* height:300px; */
        object-fit:cover;
        object-position:top center
    }
    .thankyou_main_sec{
        padding:60px 0px
    }
    .thankyou_main_cont_box h2 {
    font-size: 70px;
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



.products-grid {
  display: flex !important;
  overflow-x: auto;          /* enables horizontal scroll */
  scroll-snap-type: x mandatory; /* smooth snap effect */
  gap: 20px !important;                 /* spacing between cards */
  -webkit-overflow-scrolling: touch; /* smooth on mobile */
  padding-bottom: 10px;
  flex-wrap:nowrap !important
}

.product-card {
  flex: 0 0 25%;             /* 4 visible per row (100/4 = 25%) */
  scroll-snap-align: start;  /* snap each card nicely */
}
.products-grid::-webkit-scrollbar {
  display: none !important; /* Chrome, Safari, Opera */
}
.product_home_grip_new_side {
  opacity: 0;
  transform: translateX(100px); /* Start shifted to right */
  transition: all 1s ease-out;
}

/* When in view */
.product_home_grip_new_side.animate {
  opacity: 1;
  transform: translateX(0);
}

.housekeeping-companions .product-card img{
  height:350px !important;
  object-fit:cover
}
</style>


<section class="top_time_line_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="time_line_box">
                    <img src="<?php echo base_url() ?>assets/img/new/progress-3-3dot.png" alt="">
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
                    <img src="<?php echo base_url() ?>assets/img/new/thank_india.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="thankyou_main_cont_box">
                    <h2>Thank you for trusting us to make your space sparkle</h2>
                    <a href="<?php echo base_url()?>" class="cont_btn">Continue</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- house keeping campoins -->
<!-- <section class="house_keeeping_compains_sec">
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
                <img src="assets/img/new/our-product1.png" alt="">

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
                <img src="assets/img/new/our-product1.png" alt="">

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
                <img src="assets/img/new/our-product1.png" alt="">

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
                <img src="assets/img/new/our-product1.png" alt="">

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
</section> -->




  <section class="Housekeeping-Companions-frame">
	 <div class="container">
	<div class="housekeeping-companions">
    <h2 class="home-heading">Housekeeping Companions</h2>
    <div class="products-grid hero_new_housekeeping_animate">

        <!-- Product 1 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>assets/img/new/hc1.png" alt="5 Housekeeping Tips for Joyful Living Book">
            <div class="product-info">
                <h3>5 Housekeeping Tips for Joyful Living Book</h3>
                <p>£4.99</p>
                <a href="https://www.amazon.co.uk/Five-Housekeeping-Principles-Domestic-Goddess/dp/1805417436/ref=cm_cr_arp_d_product_top?ie=UTF8" target="_blank" class="btn">Buy Now</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>assets/img/new/hc2.png" alt="Washing Up Pad">
            <div class="product-info">
                <h3>Washing Up Pad</h3>
                <p>£3.00</p>
                <a href="https://uk.e-cloth.com/products/wup-washing-up-pad" target="_blank"  class="btn">Buy Now</a>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>assets/img/new/hc3.png" alt="Window Cleaning 2-Pack">
            <div class="product-info">
                <h3>Window Cleaning 
2-Pack</h3>
                <p>£9.50</p>
                <a href="https://uk.e-cloth.com/products/wip-window-cleaning-pack" target="_blank"  class="btn">Buy Now</a>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>assets/img/new/hc4.png" alt="Replacement Head for Deep Clean Mop">
            <div class="product-info">
                <h3>Replacement Head for Deep Clean 
Mop</h3>
                <p>£6.99</p>
                <a href="https://uk.e-cloth.com/products/dch-deep-clean-mop-head" target="_blank"   class="btn">Buy Now</a>
            </div>
        </div>
        <!-- Product 5-->
        <div class="product-card">
            <img src="<?php echo base_url() ?>assets/img/new/hc5.png" alt="Replacement Head for Deep Clean Mop">
            <div class="product-info">
                <h3>General
Purpose Cloth</h3>
                <p>£4.00</p>
                <a href="https://uk.e-cloth.com/products/gpi-general-purpose-cloth"  target="_blank"   class="btn">Buy Now</a>
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
// Observe when section enters viewport
document.addEventListener("DOMContentLoaded", function () {
  const section = document.querySelector(".product_home_grip_new_side");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add("animate");
          observer.unobserve(section); // run only once
        }
      });
    },
    { threshold: 0.2 } // Trigger when 20% visible
  );

  if (section) {
    observer.observe(section);
  }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const section = document.querySelector(".hero_new_housekeeping_animate");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add("hero_new_animate_in");
          observer.unobserve(section); // animate only once
        }
      });
    },
    { threshold: 0.2 }
  );

  observer.observe(section);
});
</script>
