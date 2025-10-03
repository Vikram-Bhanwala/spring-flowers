<?php
include('header.php');
?>
<style>
    
   .our_story_banner_sec {
    position: relative;
    background-image: url('assets/img/new/our-story-banner.jpg');
    padding: 40px 0px;
    background-size:100% 100%;
    font-weight:100
}

.our_story_banner_sec::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the color and opacity here */
    z-index: 1; /* Ensure overlay is above the image but below the content */
}

.our_story_banner_sec > * {
    position: relative;
    z-index: 2; /* Ensures the text/content is above the overlay */
}
    .our_story_banner_box {
  text-align: left;
  /* padding: 120px 20px; */
}

.our_story_banner_our,
.our_story_banner_story {
  margin: 0;
  letter-spacing: 8px;
  /* font-weight: 700; */
  overflow: hidden;font-family: IvyOraDisplay-Light;
}

.our_story_banner_our {
  font-size: 180px;
  margin-bottom: 20px;
  color:white;

}

.our_story_banner_story {
  font-size: 350px;
  color:white;
}

.our_story_banner_our span,
.our_story_banner_story span {
  display: inline-block;
  opacity: 0;
  transform: translateY(120px);
  animation: our_story_banner_slideUp 0.6s forwards;
  animation-delay: calc(var(--i) * 0.1s);
}

@keyframes our_story_banner_slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.our_story_content_banner_row{
    display:flex;
    justify-content:center
}
.our_story_content_banner_box h2 {
    font-size: 54px;
    color: white;
    text-align: right;
    line-height: 64px;
}
.our_story_content_banner_row {
  display: flex;
  justify-content: center;
  opacity: 0;
  transform: translateY(100px);
  animation: our_story_content_slideUp 1s ease-out forwards;
  animation-delay: 1.5s; /* starts after OUR & STORY animation */
}

@keyframes our_story_content_slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.indain_greene_sec{
padding:100px 0px;
}
.indain_greene_heading_box h2{
    font-size:53px;
    font-family:IvyOraDisplay-Regular;
}
.indain_greene_heading_box h2 {
    font-size: 53px;
    font-family: IvyOraDisplay-Regular;
    font-weight: 500;
    text-align: center;
    margin-bottom:10px;
}
.indain_greene_main_img_box img{
    width:100%;
  border-top-left-radius: 300px;
  border-top-right-radius: 300px;
  height:600px;
  object-fit:cover
}
.indain_greene_first_main_cont_box{
    margin-top:95%
}
.indain_greene_second_main_cont_box{
    margin-top:125%
}

.indain_greene_heading_box,
.indain_greene_first_main_cont_box,
.indain_greene_main_img_box,
.indain_greene_second_main_cont_box {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s ease;
}

/* Active animation class */
.indain_greene_animate_active {
    opacity: 1;
    transform: translateY(0);
}

/* grayscale effect */
.indain_greene_main_img_box img {
    transition: filter 0.8s ease;
    filter: grayscale(0%);
}
.indain_greene_img_bw img {
    filter: grayscale(100%);
}
.why_we_started_content_box{
    padding-right:50px;
    margin-top:50px
}
.why_we_started_content_box h2{
    font-size:60px;
    font-family: IvyOraDisplay-Regular;
    font-weight: 600;
    margin-bottom:30px;
}
.why_we_started_content_box p{
    font-size:16px
}
.why_we_started_img_box img{
    width:80%;
    height:450px;
    object-fit:cover
}
.why_we_started_sec{
    padding:60px 0px
}

.content h2{
    font-size: 40px ;
    line-height: 52px ;
    color: black !important;
    font-weight: 500 !important;
}
.why_we_started_img_box img {
  opacity: 0;
  transform: translateY(200px); /* Start shifted downward */
  transition: all 0.8s ease-out;
}

/* Animate in when visible */
.why_we_started_img_box img.animate {
  opacity: 1;
  transform: translateY(0);
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
.the_journey_main_row{
  display:flex;
  justify-content:center
}
.the_journey_main_head_box h2 {
    font-family: IvyOraDisplay-Regular;
    font-size: 65px;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 60px;
}
.the_journey_main_sec{
  padding:60px 0px
}
.the_journey_main_cont_box h2{
    font-family: IvyOraDisplay-Regular;
    font-size: 65px;
    margin-bottom:30px

}
.the_journey_main_img_box img{
  width:100% !important
}
.early_row,.mid_row {
  position: relative;
  margin-bottom:80px
}

.the_journey_main_cont_box {
  position: absolute;
  bottom: 0;                /* Start pinned at bottom */
  left: 0;
  right: 0;
  transform: translateY(0); /* No extra offset initially */
  will-change: transform;
  padding:0px 25px !important
}
/* make row relative to hold absolute-positioned content */
/* Make row relative to hold content */
.early_row, .mid_row, .mid2_row {
  position: relative;
  overflow: hidden; /* optional - keeps text inside */
}

/* Content starts at bottom */
.the_journey_main_cont_box {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  will-change: transform;
  transform: translateY(0);
  transition: transform 0.1s linear; /* smoothness */
}
.challenge_growth_main_head_box h2{
    font-family: IvyOraDisplay-Regular;
    font-size:55px;
    text-align:center;
    margin-bottom:50px;
    text-transform:uppercase
}
.challenge_growth_main_sec{
  padding:60px 0px
}
.challenge_growth_main_img_box img{
  width:70%
}
.challenge_growth_main_img_box{
  display:flex;
  justify-content:right;
}
.challenge_growth_main_cont_box {
    background: white;
    padding: 25px 50px;
    color: black;
    width: 80%;
    position: absolute;
    bottom: 6%;
}
.challenge_growth_main_cont_box h2{
    font-family: IvyOraDisplay-Regular;
    font-size:50px;
    text-align:center;
    margin-bottom:20px
}
.challenge_growth_main_cont_box p {
  text-align:center
}
.challenge_growth_main_box{
  position: relative;
}

.challenge_growth_main_cont_box2 {
    background: white;
    padding: 25px 50px;
    color: black;
    width: 80%;
    position: absolute;
    bottom: 6%;
        left: 20%;    
}
.challenge_growth_main_cont_box2 h2{
    font-family: IvyOraDisplay-Regular;
    font-size:50px;
    text-align:center;
    margin-bottom:20px
}
.challenge_growth_main_cont_box2 p {
  text-align:center
}

.challenge_growth_main_img_box2 img{
  width:70%
}
.challenge_growth_main_img_box2{
  display:flex;
  justify-content:left;
}
.where_she_is_now_sec{
  padding:60px 0px
}
.where_she_is_now_head_box h2{
    font-family: IvyOraDisplay-Regular;
    font-size:60px;
    text-align:center;
    margin-bottom:40px;
    text-transform:uppercase
}
.where_she_is_now_img_box img{
  width:100% ;
}
.where_she_is_now_cont_box h2{
  
    font-family: IvyOraDisplay-Regular;
    font-size:40px;
    margin-bottom:40px
}
.where_she_is_now_cont_box h3{
  
    font-family: IvyOraDisplay-Regular;
    font-size:40px;
    margin-bottom:40px;
    margin-top:60px
}

.btn_explre{
    padding: 5px 20px;
    background: #ffffff00;
    border: 2px solid black;
    color: black !important;
    text-decoration: none !important;
} 
.indain_greene_first_main_cont_box h2 {
    font-family: IvyOraDisplay-Regular;
    font-size: 40px;
    position: absolute;
    right: -22%;
    z-index: 9999 !important;
}

.indain_greene_sec_min_three_part{
  position: relative;
}
.indiana_greene_main_img_col{
  z-index:-1
}
</style>
<!-- our story banenr sec -->
<section class="our_story_banner_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="our_story_banner_box">
          <h3 class="our_story_banner_our">
            <span>O</span><span>U</span><span>R</span>
          </h3>
          <h2 class="our_story_banner_story">
            <span>S</span><span>T</span><span>O</span><span>R</span><span>Y</span>
          </h2>
        </div>
      </div>
    </div>
    <div class="row our_story_content_banner_row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="our_story_content_banner_box">
                <h2>A journey built on trust, passion, and the art of keeping homes not just clean, but cared for</h2>
            </div>
        </div>
    </div>
  </div>
</section>

<!-- meet indian greene sec -->
<!-- <section class="indain_greene_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="indain_greene_heading_box">
                    <h2>MEET INDIANA GREENE</h2>
                </div>
            </div>
        </div>
        <div class="row indain_greene_main_row">
            <div class="col-lg-4 col-md-4 col-sm-12 meet_dian_green_col">
                <div class="indain_greene_first_main_cont_box">
                    <p>Indiana Greene began her journey with a simple belief: a home deserves more than just cleaning—it deserves care, attention, and love. From her early experiences helping families maintain their homes, she envisioned a service that was personal, trustworthy, and truly transformative.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="indain_greene_main_img_box">
                    <img src="<?php echo base_url() ?>assets/img/new/indian_greene_img.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 meet_dian_green_col">
                <div class="indain_greene_second_main_cont_box">
                    <p>Indiana Greene began her journey with a simple belief: a home deserves more than just cleaning—it deserves care, attention, and love. From her early experiences helping families maintain their homes, she envisioned a service that was personal, trustworthy, and truly transformative.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->



<section class="indain_greene_sec indain_greene_sec_min_three_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="indain_greene_heading_box">
                    <h2>MEET INDIANA GREENE</h2>
                </div>
            </div>
        </div>
        <div class="row indain_greene_main_row">
            <div class="col-lg-4 col-md-4 col-sm-12 meet_dian_green_col">
                <div class="indain_greene_first_main_cont_box">
                    <h2>What Drives Her</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 indiana_greene_main_img_col">
                <div class="indain_greene_main_img_box">
                    <img src="<?php echo base_url() ?>assets/img/new/indian_greene_img.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 meet_dian_green_col">
                <div class="indain_greene_second_main_cont_box">
                    <p>India’s story is proof that extraordinary things can grow from unexpected beginnings. Her approach combines practicality, empathy, and determination — empowering others to embrace change, overcome challenges, and redefine success on their own terms.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- the hjouney sec -->
<section class="the_journey_main_sec">
  <div class="container the_journey_main_container">
    <div class="the_journey_main_row">
      <div class="the_journey_main_columns">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="the_journey_main_head_box">
                  <h2>The Journey</h2>
                </div>
            </div>
          </div>
          <div class="row early_row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="the_journey_main_cont_box">
                <h2>Early Life</h2>
                <p>Raised in a bohemian lifestyle where cleaning was almost non-existent, India never imagined it would become her passion and career.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="the_journey_main_img_box">
                <img src="<?php echo base_url() ?>assets/img/new/explore-life.png" alt="">
              </div>
            </div>
          </div>
          <div class="row mid_row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="the_journey_main_img_box">
                <img src="<?php echo base_url() ?>assets/img/new/mid20.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="the_journey_main_cont_box">
                <h2>Mid-20s</h2>
                <p>She became a Change Management Consultant, helping businesses and people grow through transition while welcoming two sons into her family.</p>
              </div>
            </div>
          </div>
          <div class="row mid2_row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="the_journey_main_cont_box">
                <h2>Mid-30s</h2>
                <p>Seeking balance between career and family, she transitioned into self-employment as a cleaner. What started as a practical choice turned into a calling. With over 42,000 hours of cleaning experience, she served clients ranging from hoarders to royalty.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="the_journey_main_img_box">
                <img src="<?php echo base_url() ?>assets/img/new/mid302.png" alt="">
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>


<!-- challenge and growth sec -->
<section class="challenge_growth_main_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="challenge_growth_main_head_box">
          <h2>Challenges & Growth</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="challenge_growth_main_box">
          <div class="challenge_growth_main_img_box">
            <img src="<?php echo base_url() ?>assets/img/new/cg1.png" alt="">
          </div>
          <div class="challenge_growth_main_cont_box">
              <h2>A Path to Resilience</h2>
              <p>Along the way, India faced serious mental health challenges. Cleaning became more than a job — it provided financial independence and a grounding practice that gave her resilience and balance.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="challenge_growth_main_box">
          <div class="challenge_growth_main_img_box2">
            <img src="<?php echo base_url() ?>assets/img/new/cg2.png" alt="">
          </div>
          <div class="challenge_growth_main_cont_box2">
              <h2>Breaking Barriers</h2>
              <p>Her story is one of strength in adversity, using grit, vision, and heart to build something meaningful even in the face of life’s obstacles.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- where she is now sec -->
<section class="where_she_is_now_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="where_she_is_now_head_box">
          <h2>Where She Is Now</h2>
        </div>
      </div>
    </div>
    <div class="row">
      
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="where_she_is_now_img_box">
          <img src="<?php echo base_url() ?>assets/img/new/where.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="where_she_is_now_cont_box">
          <h2>Today</h2>
          <p>By 2025, India has built a thriving, million-pound cleaning brand with a team of over 80 employees, offering bespoke, high-end services across the UK.</p>
          <h3>Supporting Others</h3>
          <p>Now in her mid-50s, she is navigating menopause and alopecia — challenges she meets with the same resilience and practices she developed through housekeeping. She actively supports other women through life’s changes, showing that strength, balance, and happiness can be rebuilt at every stage.</p>
        </div>
      </div>
    </div>
  </div>
</section>







<!-- why we started sec -->
<!-- <section class="why_we_started_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="why_we_started_content_box">
                    <h2>Why We Started</h2>
                    <p>At the heart of our brand is a passion for creating more than spotless homes—we create comfort, peace of mind, and time for the moments that matter. We believe housekeeping isn’t just about tasks; it’s about trust. Every service we offer is designed to make life easier, more organized, and a little more beautiful.”</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="why_we_started_img_box">
                    <img src="<?php echo base_url() ?>assets/img/new/why-we-started.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- domestic godres -->
 <section class="INDIANA-GREEN-main-frame our_story_home_sec">
	 <div class="container">
    <div class="image-stack">
      <img src="<?php echo base_url() ?>assets/img/new/dom.png" alt="Indiana Green">
      <img src="<?php echo base_url() ?>assets/img/new/dom2.png" alt="Indiana Green" class="top home_about_side_top_img hero_new_home_about_img_animate">
    </div>
    <div class="content">
      <h2>I’m Indiana, your go-to guru for all things housekeeping, from Professional Housekeeping Services, lifestyle, and luxury living.</h2>
      <p>Join me on this journey to discover the five guiding principles of housekeeping that will not only bring order and beauty into your home but also nurture your soul.</p>
      <a class="btn_explre" href="https://www.amazon.co.uk/Five-Housekeeping-Principles-Domestic-Goddess/dp/1805417436/ref=cm_cr_arp_d_product_top?ie=UTF8" target="_blank">Explore More</a>
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
    <button><img src="<?php echo base_url() ?>assets/img/new/right-news.png" alt=""></button>
  </div>
  </section>






<?php
include('footer.php');
?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".our_story_banner_our span").forEach((letter, i) => {
    letter.style.setProperty("--i", i);
  });

  document.querySelectorAll(".our_story_banner_story span").forEach((letter, i) => {
    // delay story so it starts after "OUR" finishes
    letter.style.setProperty("--i", i + 5);
  });
});


document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".indain_greene_sec");
    const heading = section.querySelector(".indain_greene_heading_box");
    const firstCol = section.querySelector(".indain_greene_first_main_cont_box");
    const imgBox = section.querySelector(".indain_greene_main_img_box");
    const secondCol = section.querySelector(".indain_greene_second_main_cont_box");

    // Sequential animations when entering
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => heading.classList.add("indain_greene_animate_active"), 200);
                setTimeout(() => firstCol.classList.add("indain_greene_animate_active"), 600);
                setTimeout(() => imgBox.classList.add("indain_greene_animate_active"), 1000);
                setTimeout(() => secondCol.classList.add("indain_greene_animate_active"), 1400);
            }
        });
    }, { threshold: 0.3 });

    observer.observe(section);

    // Watch scroll to toggle black & white when section is past
    window.addEventListener("scroll", () => {
        const rect = section.getBoundingClientRect();
        if (rect.bottom < 0) {
            // Section has fully scrolled out of view at bottom
            imgBox.classList.add("indain_greene_img_bw");
        } else {
            imgBox.classList.remove("indain_greene_img_bw");
        }
    });
});
</script>

<script>
// Animate the image on scroll
document.addEventListener("DOMContentLoaded", function () {
  const img = document.querySelector(".why_we_started_img_box img");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate");
          observer.unobserve(entry.target); // Animate only once
        }
      });
    },
    { threshold: 0.2 } // Trigger when 20% visible
  );

  if (img) {
    observer.observe(img);
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
document.addEventListener("scroll", () => {
  // Target all rows you want to animate
  const rows = document.querySelectorAll(".early_row, .mid_row, .mid2_row");

  rows.forEach(section => {
    const content = section.querySelector(".the_journey_main_cont_box");
    if (!content) return;

    const rect = section.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // Run only when visible
    if (rect.top < windowHeight && rect.bottom > 0) {
      // progress: 0 → at bottom, 1 → at top of viewport
      const progress = 1 - Math.max(0, Math.min(1, rect.top / windowHeight));

      // Max upward shift (tweak 150px if needed)
      const move = progress * 150;

      content.style.transform = `translateY(-${move}px)`;
    }
  });
});
</script>
