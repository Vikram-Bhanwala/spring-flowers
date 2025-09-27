
  <?php
  include('header.php');
  ?>
  <style>
    .bner_home_new_bnt{
      padding:10px 50px;
      background:transparent;
      color:white !important;
      border:1px solid white;
      margin-top:20px;
      text-decoration:none !important
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
  transition: all 0.6s ease; 
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
  background: rgba(255, 255, 255, 0.49);
/* border-radius: 16px; */
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
      width: 75%;
}
.hero_across_the_uk_box h2 {
    font-size: 59px;
    color: white;
    font-weight: 700;
    text-align: right;
    line-height: 80px;
}


.hero_fifth_row{
  display:flex;
  justify-content:center;
}
/* Initial hidden state */
.hero_new_animate_on_scroll {
  opacity: 0;
  transform: translateY(100px);
  transition: all 0.8s ease-out;
}

/* Visible state */
.hero_new_animate_on_scroll.hero_new_animate_up {
  opacity: 1;
  transform: translateY(0);
}
/* Initial hidden state */
.hero_new_home_about_img_animate {
  opacity: 0;
  transform: translateY(100px);
  transition: all 0.8s ease-out;
}

/* Active state */
.hero_new_home_about_img_animate.hero_new_animate_up {
  opacity: 1;
  transform: translateY(0);
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
.Home-Organization-frame-middle {
  display: flex;
  overflow-x: auto;             /* enable horizontal scroll */
  scroll-snap-type: x mandatory;/* smooth snap */
  gap: 20px;
  -webkit-overflow-scrolling: touch;
  padding-bottom: 10px;

  /* Hide scrollbar */
  scrollbar-width: none;       /* Firefox */
  -ms-overflow-style: none;    /* IE & Edge */
}
.Home-Organization-frame-middle::-webkit-scrollbar {
  display: none;               /* Chrome, Safari, Opera */
}

.Home-Organization-frame-middle-frame-sc {
  flex: 0 0 50%;               /* show 2 cards per screen (100/2 = 50%) */
  min-width: 300px;            /* keep good size on smaller screens */
  scroll-snap-align: start;
}

/* Initial hidden state */
.Home-Organization-frame-middle {
  opacity: 0;
  transform: translateX(100px); /* Start shifted to the right */
  transition: all 1s ease-out;
}

/* Animate in when visible */
.Home-Organization-frame-middle.animate {
  opacity: 1;
  transform: translateX(0);
}
.product-card img{
  height:350px !important;
  object-fit:cover
}
.Home-Organization-frame{
  overflow:hidden
}
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
  .btn_explre{
      padding: 5px 20px;
      background: #ffffff00;
      border: 2px solid black;
      color: black !important;
      text-decoration: none !important;
  }
.subscribe-box-main .subscribe-box input {
    border-bottom: 1px solid black;
}

  </style>
  <!-- Hero Section -->
  <section class="hero top">
    <!--<img src="<?php echo base_url() ?>assets/img/banner.png" alt="Cleaning Service">-->
    <h1>
      <span>C</span>
      <span>L</span>
      <span>E</span>
      <span>A</span>
      <span>N</span>
    </h1>
    <div class="container hero_container">
    <div class="row hero_row animate_on_scroll_hero_main_icon">
      <div class="col-lg-3 col-md-3 col-sm-6 hero_icon_col">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>assets/img/new/lsicon_leaf-outline.png" alt="">
          </div>
          <h3>Ecofriendly</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 hero_icon_col">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>assets/img/new/la_hands.png" alt="">
          </div>
          <h3>25 Years of Experience</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 hero_icon_col">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>assets/img/new/gg_smile.png" alt="">
          </div>
          <h3>2000+ Happy Customers</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 hero_icon_col">
        <div class="clean_home_banner_icon_box">
          <div class="clean_home_banner_icon_img_box">
            <img src="<?php echo base_url() ?>assets/img/new/healthicons_domestic-worker-alt-outline.png" alt="">
          </div>
          <h3>80+ Professional Cleaners</h3>
        </div>
      </div>
    </div>
    <div class="row hero_third_row hero_new_animate_on_scroll">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="hero_third_left_content_box">
          <p>Experience spotless living with tailored cleaning and housekeeping services that bring ease, comfort, and style to your home.</p>
          <a href="<?php echo base_url()?>book-service" class="bner_home_new_bnt">Book a Service</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="hero_third_middle_content_box">
          <h2>Because Your Home Deserves More Than Just Clean</h2>
        </div>
      </div>
    </div>
    <div class="row hero_fourth_row hero_new_animate_on_scroll">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="hero_main_house_cleaning_box">
          <div class="hero_main_house_cleaning_img_box">
            <img src="<?php echo base_url() ?>assets/img/new/jon1.jpg" alt="">
            <div class="hero_main_house_cleaning_overlay">
              <div class="hero_main_house_cleaning_text">
                <h2>We clean , you relax</h2>
                <a href="<?php echo base_url()?>select-property-type">Explore</a>
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
            <img src="<?php echo base_url()?>assets/img/new/jon2.jpg" alt="">
            <div class="hero_main_house_cleaning_overlay">
              <div class="hero_main_house_cleaning_text">
                <h2>We clean , you relax</h2>
                <a href="<?php echo base_url()?>select-keeper-type">Explore</a>
              </div>
            </div>
          </div>
          <div class="hero_main_house_cleaning_heading_box hero_main_house_cleaning_heading_box2">
            <h3>House Keeping</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row hero_fifth_row hero_new_animate_on_scroll">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="hero_across_the_uk_box">
          <h2>
            Trusted by Homes Across the UK
          </h2>
        </div>
      </div>
    </div>
   </div>
  </section>


  <section class="INDIANA-GREEN-main-frame">
    <div class="container">
      <div class="image-stack">
        <img src="<?php echo base_url() ?>assets/img/Rectangle-29.png" alt="Indiana Green">
        <img src="<?php echo base_url() ?>assets/img/Rectangle-31.png" alt="Indiana Green" class="top home_about_side_top_img hero_new_home_about_img_animate">
      </div>
      <div class="content">
        <h1>INDIANA GREEN</h1>
        <h2>I didn't always possess expert<br/> housekeeping knowledge.</h2>
        <p>Indiana Greene began her journey with a simple belief - that a clean home is more than a routine; it’s a reflection of comfort, care, and well-being. With years of experience in housekeeping and home care, she has built a reputation for blending meticulous detail with a warm, personal touch. Today, Indiana leads with the same philosophy that started it all: transforming everyday spaces into homes that feel truly lived in and loved.</p>
        <a class="btn_explre" href="<?php echo base_url()?>our-story">Explore More</a>
      </div>
    </div>
  </section>


<section class="Housekeeping-Companions-frame">
	 <div class="container">
	<div class="housekeeping-companions">
    <h2 class="home-heading">Services That Shine</h2>
    <div class="products-grid product_home_grip_new_side">

        <!-- Product 1 -->
        <div class="product-card">
          <a href="<?php echo base_url()?>property-form">
            <img src="<?php echo base_url() ?>assets/img/new/stsn2.png" alt="5 Housekeeping Tips for Joyful Living Book">
            <div class="product-info">
                <h3>Apartments/ <br/>Flats</h3>
                </div>
                </a>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
          <a href="<?php echo base_url()?>property-form">
            <img src="<?php echo base_url() ?>assets/img/new/stsn1.png" alt="Washing Up Pad">
            <div class="product-info">
                <h3>House/ <br/>Villas</h3>
                
            </div>
                </a>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
          <a href="<?php echo base_url()?>property-form">
            <img src="<?php echo base_url() ?>assets/img/new/stsn3.png" alt="Window Cleaning 2-Pack">
            <div class="product-info">
                <h3>Student <br/>Accommodation</h3>
                 </div>
                </a>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
          <a href="<?php echo base_url()?>property-form">
            <img src="<?php echo base_url() ?>assets/img/new/stsn4.png" alt="Replacement Head for Deep Clean Mop">
            <div class="product-info">
                <h3>Office <br/>Space</h3>
               
            </div>
                </a>
        </div>
        
        <div class="product-card">
          <a href="<?php echo base_url()?>property-form">
            <img src="<?php echo base_url() ?>assets/img/new/stsn5.png" alt="Replacement Head for Deep Clean Mop">
            <div class="product-info">
                <h3>Airbnb/ <br/>Holiday Let</h3>
               
            </div>
                </a>
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
        <img src="<?php echo base_url() ?>assets/img/new/llc1.png" alt="Laundry main">
        <img src="<?php echo base_url() ?>assets/img/new/llc2.png" class="small" alt="Linen care small">
      </div>
      <div class="text">
        <h4>Laundry & <br>Linen Care</h4>
        <a href="<?php echo base_url()?>select-keeper-type" class="btn">Book Now</a>
      </div>
    </div>
	  <div class="Home-Organization-frame-middle-frame-sc">
      <div class="images">
        <img src="<?php echo base_url() ?>assets/img/new/who1.png" alt="Laundry main">
        <img src="<?php echo base_url() ?>assets/img/new/who2.png" class="small" alt="Linen care small">
      </div>
      <div class="text">
        <h4>Wardrobe & <br>Home <br> Organization</h4>
        <a href="<?php echo base_url()?>select-keeper-type" class="btn">Book Now</a>
      </div>
    </div>
	  <div class="Home-Organization-frame-middle-frame-sc">
      <div class="images">
        <img src="<?php echo base_url() ?>assets/img/new/du1.png" alt="Laundry main">
        <img src="<?php echo base_url() ?>assets/img/new/du2.png" class="small" alt="Linen care small">
      </div>
      <div class="text">
        <h4>Daily <br> Upkeep</h4>
        <a href="<?php echo base_url()?>select-keeper-type" class="btn">Book Now</a>
      </div>
    </div>
	  <div class="Home-Organization-frame-middle-frame-sc">
      <div class="images">
        <img src="<?php echo base_url() ?>assets/img/new/sop1.png" alt="Laundry main">
        <img src="<?php echo base_url() ?>assets/img/new/sop2.png" class="small" alt="Linen care small">
      </div>
      <div class="text">
        <h4>Special <br> Occasion  <br> Prep</h4>
        <a href="<?php echo base_url()?>select-keeper-type" class="btn">Book Now</a>
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
      <a class="btn_explre" href="<?php echo base_url()?>our-story">Explore Services</a>
    </div>
  </section>

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


  <section class="INDIANA-GREEN-main-frame bottom">
	 <div class="container">
    <div class="image-stack">
      <img src="<?php echo base_url() ?>assets/img/Rectangle-20.png" alt="Indiana Green">
      <img src="<?php echo base_url() ?>assets/img/image-3.png" alt="Indiana Green" class="top">
    </div>
    <div class="content">
      <h1>I’m Indiana, your go-to guru for all things housekeeping, from Professional Housekeeping Services, lifestyle, and luxury living.</h1>
      
      <p>Join me on this journey to discover the five guiding principles of housekeeping that will not only bring order and beauty into your home but also nurture your soul.</p>
      <a class="btn_explre" target="_blank" href="https://www.amazon.co.uk/Five-Housekeeping-Principles-Domestic-Goddess/dp/1805417436/ref=cm_cr_arp_d_product_top?ie=UTF8">Explore</a>
    </div>
  </div>
  </section>

  <section class="subscribe-box-main">
	<h4>
    <span class="line">SUBSCRIBE TO OUR</span>
    <span class="line">NEWSLETTER</span>
  </h4>

  <div class="subscribe-box">
    <form action="<?php echo base_url()?>subscribe" method="post" id="subscribe_form">
      <input type="email" name="email" id="subscribe_email" placeholder="Enter Email" required>
      <button type="submit"><img src="<?php echo base_url() ?>assets/img/new/right-news.png" alt=""></button>
    </form>
    <div id="subscribe_message" style="display:none;text-align:center;margin-top:10px;color:green;font-weight:600;">Thanks for subscribing!</div>
  </div>
  </section>

  <?php
  include('footer.php');
  ?>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
  const animatedRows = document.querySelectorAll(".hero_new_animate_on_scroll");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("hero_new_animate_up");
          observer.unobserve(entry.target); 
        }
      });
    },
    { threshold: 0.05 } // smaller value
  );

  animatedRows.forEach(row => observer.observe(row));

  // fallback: ensure it's visible after 2s
  setTimeout(() => {
    animatedRows.forEach(row => row.classList.add("hero_new_animate_up"));
  }, 2000);
});

</script>
<script>
document.addEventListener("DOMContentLoaded", function(){
  const form = document.getElementById('subscribe_form');
  const emailInput = document.getElementById('subscribe_email');
  const messageBox = document.getElementById('subscribe_message');
  if(form){
    form.addEventListener('submit', async function(e){
      e.preventDefault();
      if(messageBox){ messageBox.style.display = 'none'; }
      try{
        const formData = new FormData(form);
        const res = await fetch(form.action, { method: 'POST', headers: { 'X-Requested-With': 'XMLHttpRequest' }, body: formData });
        const data = await res.json();
        if(data && data.success){
          if(messageBox){ messageBox.textContent = data.message || 'Thanks for subscribing!'; messageBox.style.display = 'block'; }
          if(emailInput){ emailInput.value = ''; }
        }else{
          alert((data && data.message) || 'Please enter a valid email.');
        }
      }catch(err){
        alert('Unable to subscribe. Try again.');
      }
    });
  }
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const imgAnimate = document.querySelectorAll(".hero_new_home_about_img_animate");

    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("hero_new_animate_up");
            observer.unobserve(entry.target); // animate only once
          }
        });
      },
      { threshold: 0.2 }
    );

    imgAnimate.forEach(img => observer.observe(img));
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
// Animate on scroll using IntersectionObserver
document.addEventListener("DOMContentLoaded", function () {
  const section = document.querySelector(".Home-Organization-frame-middle");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add("animate");
          observer.unobserve(section); // Animate only once
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
