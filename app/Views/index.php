
  <?php
  include('header.php');
  ?>
  <style>
    .bner_home_new_bnt{
      padding:10px 50px;
      background:transparent;
      color:white;
      border:1px solid white;
      margin-top:20px
    }
    .animate_on_scroll_hero_main_icon{
      margin-bottom:70px;
    }
    .hero_third_left_content_box{
      padding:0px 40px;
      padding-bottom:40px
    }
    .hero_third_left_content_box p{
      color:white
    }
    .hero_third_middle_content_box h2{
    font-size: 45px;
    color: white;
    text-align: right;
    line-height: 62px;
}
.hero_main_house_cleaning_img_box {
  position: relative;
  display: inline-block;
  width: 100%;
  overflow:hidden
}

.hero_main_house_cleaning_img_box img {
  width: 75%;
  display: block;
  height: auto !important;
  transform: scale(1.2);
  transition:all 0.6s ease;
}

.hero_main_house_cleaning_overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 80%;
  height: 100%;
  background: rgba(0,0,0,0.02); /* black transparent overlay */
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.6s ease; 
}

.hero_main_house_cleaning_text {
  color: #fff;
  font-size: 24px;
  font-weight: 600;
  text-align: center;
}
 .hero_main_house_cleaning_text h2{
    font-size: 29px;
    font-weight: 600;
margin-bottom:20px
}
.hero_main_house_cleaning_text a{
  background: rgba(255, 255, 255, 0.2);
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
color:white;
border:2px solid white;
    padding: 2px 25px;
        font-size: 20px;
    font-weight: 100;
    text-decoration: none;

}
.hero_main_house_cleaning_heading_box h3{
    font-family:IvyOraDisplay-Regular;
    color:white;
    font-size:50px;
        font-weight: 700;
} 
.hero_main_house_cleaning_heading_box {
    position: absolute;
    bottom: -6%;
    left: -7%;
}
.hero_fourth_row{
  margin-bottom:100px;
  margin-top:100px
}
.hero_main_house_cleaning_heading_box2 {
    position: absolute;
    bottom: -6%;
    left: 44%;
}
.hero_main_house_cleaning_img_box:hover img {
  transform: scale(1); /* zoom effect */
}

.hero_main_house_cleaning_img_box:hover .hero_main_house_cleaning_overlay {
  background: linear-gradient(to bottom, rgb(0 0 0 / 20%) 58%, rgb(0 0 0 / 79%) 93%, rgb(0 0 0) 100%); 
}
  </style>
  <!-- Hero Section -->
  <section class="hero top">
    <!--<img src="<?php echo base_url() ?>public/assets/img/banner.png" alt="Cleaning Service">-->
    <h1>
      <span>C</span>
      <span>L</span>
      <span>E</span>
      <span>A</span>
      <span>N</span>
    </h1>
    <div class="container hero_container">
    <div class="row hero_row animate_on_scroll_hero_main_icon">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>public/assets/img/new/lsicon_leaf-outline.png" alt="">
          </div>
          <h3>Ecofriendly</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>public/assets/img/new/la_hands.png" alt="">
          </div>
          <h3>25 Years of Experience</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>public/assets/img/new/gg_smile.png" alt="">
          </div>
          <h3>2000+ Happy Customers</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>public/assets/img/new/healthicons_domestic-worker-alt-outline.png" alt="">
          </div>
          <h3>80+ Professional Cleaners</h3>
        </div>
      </div>
    </div>
    <div class="row hero_third_row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="hero_third_left_content_box">
          <p>Experience spotless living with tailored cleaning and housekeeping services that bring ease, comfort, and style to your home.</p>
          <button class="bner_home_new_bnt">Book a Service</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="hero_third_middle_content_box">
          <h2>Because Your Home Deserves More Than Just Clean</h2>
        </div>
      </div>
    </div>
    <div class="row hero_fourth_row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="hero_main_house_cleaning_box">
          <div class="hero_main_house_cleaning_img_box">
            <img src="<?php echo base_url()?>public/assets/img/new/jon1.jpg" alt="">
            <div class="hero_main_house_cleaning_overlay">
              <div class="hero_main_house_cleaning_text">
                <h2>We clean , you relax</h2>
                <a href="#">Explore</a>
              </div>
            </div>
          </div>
          <div class="hero_main_house_cleaning_heading_box">
            <h3>House Cleaning</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="hero_main_house_cleaning_box">
          <div class="hero_main_house_cleaning_img_box">
            <img src="<?php echo base_url()?>/public/assets/img/new/jon2.jpg" alt="">
            <div class="hero_main_house_cleaning_overlay">
              <div class="hero_main_house_cleaning_text">
                <h2>We clean , you relax</h2>
                <a href="#">Explore</a>
              </div>
            </div>
          </div>
          <div class="hero_main_house_cleaning_heading_box hero_main_house_cleaning_heading_box2">
            <h3>House Keeping</h3>
          </div>
        </div>
      </div>
    </div>
   </div>
  </section>


  <section class="INDIANA-GREEN-main-frame">
	 <div class="container">
    <div class="image-stack">
      <img src="<?php echo base_url() ?>public/assets/img/Rectangle-29.png" alt="Indiana Green">
      <img src="<?php echo base_url() ?>public/assets/img/Rectangle-31.png" alt="Indiana Green" class="top">
    </div>
    <div class="content">
      <h1>INDIANA GREEN</h1>
      <h2>I didn't always possess expert<br/> housekeeping knowledge.</h2>
      <p>Indiana Greene began her journey with a simple belief - that a clean home is more than a routine; it’s a reflection of comfort, care, and well-being. With years of experience in housekeeping and home care, she has built a reputation for blending meticulous detail with a warm, personal touch. Today, Indiana leads with the same philosophy that started it all: transforming everyday spaces into homes that feel truly lived in and loved.</p>
      <button>Explore More</button>
    </div>
  </div>
  </section>
<section class="Housekeeping-Companions-frame">
	 <div class="container">
	<div class="housekeeping-companions">
    <h2 class="home-heading">Services That Shine</h2>
    <div class="products-grid">

        <!-- Product 1 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/Rectangle-9.png" alt="5 Housekeeping Tips for Joyful Living Book">
            <div class="product-info">
                <h3>Apartments/ <br/>Flats</h3>
                </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/Rectangle-10.png" alt="Washing Up Pad">
            <div class="product-info">
                <h3>House/ <br/>Villas</h3>
                
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/Rectangle-9.png" alt="Window Cleaning 2-Pack">
            <div class="product-info">
                <h3>Student <br/>Accommodation</h3>
                 </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/Rectangle-10.png" alt="Replacement Head for Deep Clean Mop">
            <div class="product-info">
                <h3>Office <br/>Space</h3>
               
            </div>
        </div>

    </div>
</div>
</div>
  </section>

  <section class="Home-Organization-frame">
     <div class="container">
		 <div class="Home-Organization-frame-middle">
		
    <div class="Home-Organization-frame-middle-frame-sc">
      <div class="images">
        <img src="<?php echo base_url() ?>public/assets/img/Rectangle-13.png" alt="Laundry main">
        <img src="<?php echo base_url() ?>public/assets/img/Rectangle-14.png" class="small" alt="Linen care small">
      </div>
      <div class="text">
        <h4>Laundry & <br>Linen Care</h4>
        <a href="#" class="btn">Book Now</a>
      </div>
    </div>
	  <div class="Home-Organization-frame-middle-frame-sc">
      <div class="images">
        <img src="<?php echo base_url() ?>public/assets/img/Rectangle-13.png" alt="Laundry main">
        <img src="<?php echo base_url() ?>public/assets/img/Rectangle-14.png" class="small" alt="Linen care small">
      </div>
      <div class="text">
        <h4>Laundry & <br>Linen Care</h4>
        <a href="#" class="btn">Book Now</a>
      </div>
    </div>
  
		 </div>
	 </div>
  </section>

  <section class="hero-Since-main-home">
    <div class="info-card">
      <h3>Since</h3>
      <h2>2000</h2>
      <p>
        From a simple vision of helping homes shine to becoming a trusted 
        name in premium housekeeping across the UK.
      </p>
      <button>Explore Services</button>
    </div>
  </section>

  <section class="Housekeeping-Companions-frame">
	 <div class="container">
	<div class="housekeeping-companions">
    <h2 class="home-heading">Housekeeping Companions</h2>
    <div class="products-grid">

        <!-- Product 1 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/product-1.png" alt="5 Housekeeping Tips for Joyful Living Book">
            <div class="product-info">
                <h3>5 Housekeeping Tips for Joyful Living Book</h3>
                <p>£4.99</p>
                <a href="/products/5-housekeeping-tips-book" class="btn">Buy Now</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/product-2.png" alt="Washing Up Pad">
            <div class="product-info">
                <h3>Washing Up Pad</h3>
                <p>£3.00</p>
                <a href="/products/washing-up-pad" class="btn">Buy Now</a>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/product-2.png" alt="Window Cleaning 2-Pack">
            <div class="product-info">
                <h3>Window Cleaning 2-Pack</h3>
                <p>£9.50</p>
                <a href="/products/window-cleaning-pack" class="btn">Buy Now</a>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="<?php echo base_url() ?>public/assets/img/product-1.png" alt="Replacement Head for Deep Clean Mop">
            <div class="product-info">
                <h3>Replacement Head for Deep Clean Mop</h3>
                <p>£6.99</p>
                <a href="/products/mop-replacement-head" class="btn">Buy Now</a>
            </div>
        </div>

    </div>
</div>
</div>
  </section>


  <section class="INDIANA-GREEN-main-frame bottom">
	 <div class="container">
    <div class="image-stack">
      <img src="<?php echo base_url() ?>public/assets/img/Rectangle-20.png" alt="Indiana Green">
      <img src="<?php echo base_url() ?>public/assets/img/image-3.png" alt="Indiana Green" class="top">
    </div>
    <div class="content">
      <h1>I’m Indiana, your go-to guru for all things housekeeping, from Professional Housekeeping Services, lifestyle, and luxury living.</h1>
      
      <p>Join me on this journey to discover the five guiding principles of housekeeping that will not only bring order and beauty into your home but also nurture your soul.</p>
      <button>Explore</button>
    </div>
  </div>
  </section>

  <section class="subscribe-box-main">
	<h4>
    <span class="line">SUBSCRIBE TO OUR</span>
    <span class="line">NEWSLETTER</span>
  </h4>

  <div class="subscribe-box">
    <input type="email" placeholder="Enter Email">
    <button>➜</button>
  </div>
  </section>

  <?php
  include('footer.php');
  ?>