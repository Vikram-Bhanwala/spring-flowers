<?php
include('header.php');
?>

<style>
    
   .blog_banner_sec {
    position: relative;
    background-image: url('public/assets/img/new/blogs-banner.jpg');
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
.blogs_main_section{
    padding:60px 0px;
    background:#d9d9d908
}
.blogs_main_head_box h2 {
    font-family: IvyOraDisplay-Regular;
    font-size: 40px;
    margin-bottom: 20px;
}
.blog_main_para-first{
    margin-bottom:30px 
}
.blog_main_big_blog_box{
    padding:10px;
    background:white;
    position:relative;
}
.blog_main_big_blog_box img{
    width: 100%;
    height:350px;
    object-fit:cover
}
.date_box_big {
    padding: 10px;
    background: white;
    color: black;
    max-width: max-content;
    position: absolute;
    top: 34px;
    right: 29px;
}
.date_box_big p{
    margin:0px !important
}
.blog_main_big_blog_box a{
    color: black !important;
    font-size: 20px;
    text-decoration:none !important;
}
.blog_main_big_blog_box h3{
    margin-top:10px;
    font-family: IvyOraDisplay-Regular;
}
.blogs_regular_box{
    padding:10px;
    background:white;
    position:relative;
    height:100% !important

}

.blogs_regular_box img{
    width: 100%;
    object-fit:cover
}
.date_box_regular {
    padding: 10px;
    background: white;
    color: black;
    max-width: max-content;
    position: absolute;
    top: 20px;
    right: 20px;
}
.date_box_regular p{
    margin:0px !important;
    font-size:10px
}
.blogs_regular_box a{
    color: black !important;
    font-size: 15px;
    text-decoration:none !important;
    font-weight:600
}
.blogs_regular_box h6{
    margin-top:10px;
}
.blog_regular_row{
    margin-top:40px 
}
.blogs_main_head_box,
.blog_main_big_blog_box,
.blogs_regular_box {
  opacity: 0;
  transform: translateY(50px); /* Start shifted downward */
  transition: all 0.8s ease-out;
}

/* Animate in when visible */
.blogs_main_head_box.animate,
.blog_main_big_blog_box.animate,
.blogs_regular_box.animate {
  opacity: 1;
  transform: translateY(0);
}
</style>

<!-- blogs bannwer sec -->
<section class="blog_banner_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="blog_banner_box">
          <h1 class="blog_banner_title">
            <span>B</span><span>L</span><span>O</span><span>G</span><span>S</span>
          </h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- blog main sectio -->
<section class="blogs_main_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="blogs_main_head_box">
                    <h2>Blogs</h2>
                    <p class="blog_main_para-first">Fresh insights and practical tips from Spring Flower Cleaning Services.</p>
                    <p>Stay informed with our curated content on home cleaning, housekeeping, and lifestyle care. From expert advice to seasonal cleaning checklists, we share everything you need to keep your home spotless, organized, and welcoming.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="blog_main_big_blog_box">
                    <img src="<?php echo base_url() ?>public/assets/img/new/blog1.jpg" alt="">
                    <h3><a href="#">The Springflower Difference: Building Trust in Home Cleaning Services</a></h3>
                    <div class="date_box_big">
                           <p> 16 Aug 2025</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row blog_regular_row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="blogs_regular_box">
                     <img src="<?php echo base_url() ?>public/assets/img/new/blog1.jpg" alt="">
                    <h6><a href="#">Top 5 Benefits of Regular Deep Cleaning for Your Home</a></h6>
                    <div class="date_box_regular">
                           <p> 15 Aug 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="blogs_regular_box">
                     <img src="<?php echo base_url() ?>public/assets/img/new/blog1.jpg" alt="">
                    <h6><a href="#">How to Maintain a Spotless Kitchen Without the Stress</a></h6>
                    <div class="date_box_regular">
                           <p> 14 Aug 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="blogs_regular_box">
                     <img src="<?php echo base_url() ?>public/assets/img/new/blog1.jpg" alt="">
                    <h6><a href="#">Spring Cleaning 2025: A Complete Checklist for Every Room</a></h6>
                    <div class="date_box_regular">
                           <p> 13 Aug 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="blogs_regular_box">
                     <img src="<?php echo base_url() ?>public/assets/img/new/blog1.jpg" alt="">
                    <h6><a href="#">Why Housekeeping Services Are Becoming a Lifestyle Essential in the UK</a></h6>
                    <div class="date_box_regular">
                           <p> 12 Aug 2025</p>
                    </div>
                </div>
            </div>
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".blog_banner_title span").forEach((letter, i) => {
    letter.style.setProperty("--i", i);
  });
});

</script>


<script>
// Animate blog elements on scroll
document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(
    ".blogs_main_head_box, .blog_main_big_blog_box, .blogs_regular_box"
  );

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("animate");
          }, index * 150); // stagger effect
          observer.unobserve(entry.target); // animate only once
        }
      });
    },
    { threshold: 0.2 } // Trigger when 20% visible
  );

  elements.forEach(el => observer.observe(el));
});
</script>