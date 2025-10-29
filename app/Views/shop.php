<?php
include('header.php');
?>

	<title>Shop</title>
<style>
    
  .blog_banner_sec {
    position: relative;
    background-image: url('assets/img/new/shop-banner.jpg');
    padding: 40px 0px;
    background-size: 104% 142%;
    font-family: IvyOraDisplay-Regular;
    font-weight: 100;
    background-position: center center;
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
  /* font-weight: 100; */
  letter-spacing: 10px;
  margin: 0;
  overflow: hidden;
  color:white;
  font-family: IvyOraDisplay-Light;
  
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
/* Initial hidden state */
.hero_new_housekeeping_animate {
  opacity: 0;
  transform: translateX(100px); /* start off to the right */
  transition: all 0.8s ease-out;
}

/* Visible state when in viewport */
.hero_new_housekeeping_animate.hero_new_animate_in {
  opacity: 1;
  transform: translateX(0);
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

<!-- <section class="our_products_sec">
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
</section> -->



 
  <section class="Housekeeping-Companions-frame" style="display:none">
	  <div class="container">
        <div class="housekeeping-companions">
          <h2 class="home-heading">Housekeeping Companions</h2>
          <div class="products-grid hero_new_housekeeping_animate">

              <!-- Product 1 -->
              <div class="product-card">
                  <img src="https://nimblecares.co.uk/cdn/shop/files/INDIVIDUAL_4_c974bb3f-10b3-4673-aa20-892ced4b0129.jpg?v=1755691629&width=1080" alt="5 Housekeeping Tips for Joyful Living Book">
                  <div class="product-info">
                      <h3>Multi-Purpose Cleaner: Plant-Based. Antibacterial. Toxin-Free</h3>
                      <p>£3.50</p>
                      <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-multi-purpose-antibacterial-cleaner?source=aw&aw_affid=2623674&awc=87077_1761495008_eb61f2f550214799f05078d52d4e0f21" target="_blank" class="btn">Buy Now</a>
                  </div>
              </div>

              <!-- Product 2 -->
              <div class="product-card">
                  <img src="https://nimblecares.co.uk/cdn/shop/files/Hand_Sanitiser_1.png?v=1755691655&width=1080" alt="Washing Up Pad">
                  <div class="product-info">
                      <h3>Moisturising Hand Sanitiser: Plant-Based. Antibacterial. Skin-Kind</h3>
                      <p>£3.50</p>
                      <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-moisturising-hand-sanitiser?source=aw&aw_affid=2623674&awc=87077_1761495011_99f1f99447b9b849bd9b7d58c8e01681" target="_blank"  class="btn">Buy Now</a>
                  </div>
              </div>

              <!-- Product 3 -->
              <div class="product-card">
                  <img src="https://nimblecares.co.uk/cdn/shop/files/INDIVIDUAL_2_ebd8cbf9-33de-4d21-b5c5-ff834793ee95.jpg?v=1729231796&width=1080" alt="Window Cleaning 2-Pack">
                  <div class="product-info">
                      <h3>Potty and Toilet Cleaner: Plant-Based. Bleach-Free</h3>
                      <p>£3.50</p>
                      <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-potty-and-toilet-cleaner?source=aw&aw_affid=2623674&awc=87077_1761495013_8c1058feedcb5305344851d123391d9d" target="_blank"  class="btn">Buy Now</a>
                  </div>
              </div>

              <!-- Product 4 -->
              <div class="product-card">
                  <img src="https://nimblecares.co.uk/cdn/shop/files/bottle_cup_cleaner_-_website.png?v=1747303199&width=1080" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Bottle & Cup Cleaner: Plant-Based. No Scrubbing. Bleach-Free</h3>
                      <p>£10.00</p>
                      <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-bottle-cup-cleaner?source=aw&aw_affid=2623674&awc=87077_1761495015_535703897f9c831f4a1546e4c7bea097" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>

              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1758560912/Shark/NV602UKT/Gallery%20V2/00_1400x1400px-NV602UKT_01_Optimised_2506168?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Classic Upright Pet Vacuum NV602UKT</h3>
                      <p>£149.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-classic-upright-pet-vacuum-nv602ukt-zidNV602UKT?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_44ded7bde9fb6b8686d4ec22ed2c73f2" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1745929580/Shark/AZ3000UKT/V2/001%20-%20AZ3000UKT_01S?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Stratos Pet Pro Anti Hair Wrap Plus Anti-Odour XL Upright Vacuum</h3>
                      <p>£249.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-stratos-pet-pro-anti-hair-wrap-plus-anti-odour-xl-upright-vacuum-az3000ukt-zidAZ3000UKT?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_30a6eda28a4428d476406b63f12dbdd3" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1657637641/Shark/WV270UK/WV270UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Premium Handheld Vacuum WV270UK</h3>
                      <p>£179.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-premium-handheld-vacuum-wv270uk-zidWV270UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_ddca3046163be545107bd6d0a8431613" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_1.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1741873128/Shark/EX250UK/EX250UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark CarpetXpert HairPro Pet Carpet Cleaner EX250UK</h3>
                      <p>£179.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-carpetxpert-hairpro-pet-carpet-cleaner-ex250uk-zidEX250UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_bf3b4522a77ec6893a44496c04c7c243" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1747646126/Shark/S6005UK/Gallery%20V2/Gallery%20V3/00_1400x1400px-S6005UK_01_Optimised_AnnotatedImages_3600x3600px_250227._?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Floor & Handheld Steam Cleaner S6005UK</h3>
                      <p>£10.00</p>
                      <a href="https://sharkclean.co.uk/product/shark-floor-handheld-steam-cleaner-s6005uk-zidS6005UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_994fcf857e15d53655b01b05f4f3bc52" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1708346343/Shark/HP300UK/HP300UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark NeverChange5 Air Purifier MAX HP300UK</h3>
                      <p>£329.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-neverchange5-air-purifier-max-hp300uk-zidHP300UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_210045eabb292b97c547660b2a29b027" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_1.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1657637641/Shark/WV270UK/WV270UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Premium Handheld Vacuum WV270UK</h3>
                      <p>£179.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-premium-handheld-vacuum-wv270uk-zidWV270UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572795_bae8b70530bf73d0af8839fb948e572b" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
              
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1755780835/Shark/VM200UKGN/00_VM200UKGNPS_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark VacMop 2-in-1 Cordless Vacuum Mop with Targeted Spray Complete Kit</h3>
                      <p>£109.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-vacmop-2-in-1-cordless-vacuum-mop-with-targeted-spray-complete-kit-zidVM200UKGNPS?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572797_b93cc12f0d64c114cdb82ceafdc5f24e" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>

          </div>
      </div>
    </div>
  </section>



  <section class="shop_main_prod_sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="shop_main_prod_head_box">
            <h2>Housekeeping Companions</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="product-card">
              <img src="https://nimblecares.co.uk/cdn/shop/files/INDIVIDUAL_4_c974bb3f-10b3-4673-aa20-892ced4b0129.jpg?v=1755691629&width=1080" alt="5 Housekeeping Tips for Joyful Living Book">
              <div class="product-info">
                  <h3>Multi-Purpose Cleaner: Plant-Based. Antibacterial. Toxin-Free</h3>
                  <p>£3.50</p>
                  <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-multi-purpose-antibacterial-cleaner?source=aw&aw_affid=2623674&awc=87077_1761495008_eb61f2f550214799f05078d52d4e0f21" target="_blank" class="btn">Buy Now</a>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://nimblecares.co.uk/cdn/shop/files/Hand_Sanitiser_1.png?v=1755691655&width=1080" alt="Washing Up Pad">
                  <div class="product-info">
                      <h3>Moisturising Hand Sanitiser: Plant-Based. Antibacterial. Skin-Kind</h3>
                      <p>£3.50</p>
                      <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-moisturising-hand-sanitiser?source=aw&aw_affid=2623674&awc=87077_1761495011_99f1f99447b9b849bd9b7d58c8e01681" target="_blank"  class="btn">Buy Now</a>
                  </div>
              </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://nimblecares.co.uk/cdn/shop/files/INDIVIDUAL_2_ebd8cbf9-33de-4d21-b5c5-ff834793ee95.jpg?v=1729231796&width=1080" alt="Window Cleaning 2-Pack">
                  <div class="product-info">
                      <h3>Potty and Toilet Cleaner: Plant-Based. Bleach-Free</h3>
                      <p>£3.50</p>
                      <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-potty-and-toilet-cleaner?source=aw&aw_affid=2623674&awc=87077_1761495013_8c1058feedcb5305344851d123391d9d" target="_blank"  class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://nimblecares.co.uk/cdn/shop/files/bottle_cup_cleaner_-_website.png?v=1747303199&width=1080" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Bottle & Cup Cleaner: Plant-Based. No Scrubbing. Bleach-Free</h3>
                      <p>£10.00</p>
                      <a href="https://nimblecares.co.uk/collections/cleaning/products/plant-based-bottle-cup-cleaner?source=aw&aw_affid=2623674&awc=87077_1761495015_535703897f9c831f4a1546e4c7bea097" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1758560912/Shark/NV602UKT/Gallery%20V2/00_1400x1400px-NV602UKT_01_Optimised_2506168?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Classic Upright Pet Vacuum NV602UKT</h3>
                      <p>£149.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-classic-upright-pet-vacuum-nv602ukt-zidNV602UKT?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_44ded7bde9fb6b8686d4ec22ed2c73f2" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1745929580/Shark/AZ3000UKT/V2/001%20-%20AZ3000UKT_01S?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Stratos Pet Pro Anti Hair Wrap Plus Anti-Odour XL Upright Vacuum</h3>
                      <p>£249.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-stratos-pet-pro-anti-hair-wrap-plus-anti-odour-xl-upright-vacuum-az3000ukt-zidAZ3000UKT?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_30a6eda28a4428d476406b63f12dbdd3" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1657637641/Shark/WV270UK/WV270UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Premium Handheld Vacuum WV270UK</h3>
                      <p>£179.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-premium-handheld-vacuum-wv270uk-zidWV270UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_ddca3046163be545107bd6d0a8431613" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_1.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1741873128/Shark/EX250UK/EX250UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark CarpetXpert HairPro Pet Carpet Cleaner EX250UK</h3>
                      <p>£179.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-carpetxpert-hairpro-pet-carpet-cleaner-ex250uk-zidEX250UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_bf3b4522a77ec6893a44496c04c7c243" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1747646126/Shark/S6005UK/Gallery%20V2/Gallery%20V3/00_1400x1400px-S6005UK_01_Optimised_AnnotatedImages_3600x3600px_250227._?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Floor & Handheld Steam Cleaner S6005UK</h3>
                      <p>£10.00</p>
                      <a href="https://sharkclean.co.uk/product/shark-floor-handheld-steam-cleaner-s6005uk-zidS6005UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_994fcf857e15d53655b01b05f4f3bc52" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1708346343/Shark/HP300UK/HP300UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark NeverChange5 Air Purifier MAX HP300UK</h3>
                      <p>£329.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-neverchange5-air-purifier-max-hp300uk-zidHP300UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572794_210045eabb292b97c547660b2a29b027" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_1.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1657637641/Shark/WV270UK/WV270UK_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark Premium Handheld Vacuum WV270UK</h3>
                      <p>£179.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-premium-handheld-vacuum-wv270uk-zidWV270UK?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572795_bae8b70530bf73d0af8839fb948e572b" target="_blank"   class="btn">Buy Now</a>
                  </div>
              </div>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="product-card">
                  <img src="https://res.cloudinary.com/sharkninja/image/upload/b_rgb:FFFFFF,c_pad,dpr_2.0,f_auto,h_600,q_auto,w_600/c_pad,h_600,w_600/v1755780835/Shark/VM200UKGN/00_VM200UKGNPS_01?pgw=1" alt="Replacement Head for Deep Clean Mop">
                  <div class="product-info">
                      <h3>Shark VacMop 2-in-1 Cordless Vacuum Mop with Targeted Spray Complete Kit</h3>
                      <p>£109.99</p>
                      <a href="https://sharkclean.co.uk/product/shark-vacmop-2-in-1-cordless-vacuum-mop-with-targeted-spray-complete-kit-zidVM200UKGNPS?utm_source=awin&utm_medium=2623674&utm_campaign=CleanSpringFlowers&sv1=affiliate&sv_campaign_id=2623674&awc=8065_1761572797_b93cc12f0d64c114cdb82ceafdc5f24e" target="_blank"   class="btn">Buy Now</a>
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
