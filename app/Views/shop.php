<?php
include('header.php');
?>

<style>
    
   .blog_banner_sec {
    position: relative;
    background-image: url('public/assets/img/new/shop-banner.jpg');
    padding: 40px 0px;
    background-size:100% 100%;
    font-family:IvyOraDisplay-Regular;
    font-weight:100
}

.blog_banner_sec::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the color and opacity here */
    z-index: 1; /* Ensure overlay is above the image but below the content */
}

.blog_banner_sec > * {
    position: relative;
    z-index: 2; /* Ensures the text/content is above the overlay */
}
.blog_banner_box {
  text-align: center;
  padding: 120px 20px;
}

.blog_banner_title {
  font-size: 300px;
  font-weight: 100;
  letter-spacing: 10px;
  margin: 0;
  overflow: hidden;
  color:white;
  
}

.blog_banner_title span {
  display: inline-block;
  opacity: 0;
  transform: translateY(120px);
  animation: blog_banner_slideUp 0.6s forwards;
  animation-delay: calc(var(--i) * 0.1s);
}

@keyframes blog_banner_slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.our_products_sec{
    padding:70px 0px;
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

<!-- blogs bannwer sec -->
<section class="blog_banner_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="blog_banner_box">
          <h1 class="blog_banner_title">
            <span>S</span><span>H</span><span>O</span><span>P</span>
          </h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="our_products_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="our_products_head_box">
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
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
                    <h3>Replacement Head for Deep Clean 
Mop</h3>
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".blog_banner_title span").forEach((letter, i) => {
    letter.style.setProperty("--i", i);
  });
});

</script>