<?php
include('header.php');
?>
<style>
    
   .our_story_banner_sec {
    position: relative;
    background-image: url('public/assets/img/new/our-story-banner.jpg');
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
  font-weight: 700;
  overflow: hidden;
    font-family:IvyOraDisplay-Regular;
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
    font-size: 47px;
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
    font-size:50px;
    font-family:IvyOraDisplay-Regular;
}
.indain_greene_heading_box h2 {
    font-size: 60px;
    font-family: IvyOraDisplay-Regular;
    font-weight: 600;
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
    margin-top:150%
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
.our_story_home_sec .image-stack{
    width:50% !important
}
.our_story_home_sec .content{
    width:30% !important
}
.content h2{
    font-size: 40px !important;
    line-height: 52px !important;
    color: black !important;
    font-weight: 500 !important;
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
<section class="indain_greene_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="indain_greene_heading_box">
                    <h2>MEET INDIANA GREENE</h2>
                </div>
            </div>
        </div>
        <div class="row indain_greene_main_row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="indain_greene_first_main_cont_box">
                    <p>Indiana Greene began her journey with a simple belief: a home deserves more than just cleaning—it deserves care, attention, and love. From her early experiences helping families maintain their homes, she envisioned a service that was personal, trustworthy, and truly transformative.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="indain_greene_main_img_box">
                    <img src="<?php echo base_url()?>public/assets/img/new/indian_greene_img.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="indain_greene_second_main_cont_box">
                    <p>Indiana Greene began her journey with a simple belief: a home deserves more than just cleaning—it deserves care, attention, and love. From her early experiences helping families maintain their homes, she envisioned a service that was personal, trustworthy, and truly transformative.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- why we started sec -->
<section class="why_we_started_sec">
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
                    <img src="<?php echo base_url()?>public/assets/img/new/why-we-started.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- domestic godres -->
 <section class="INDIANA-GREEN-main-frame our_story_home_sec">
	 <div class="container">
    <div class="image-stack">
      <img src="<?php echo base_url() ?>public/assets/img/new/dom.png" alt="Indiana Green">
      <img src="<?php echo base_url() ?>public/assets/img/new/dom2.png" alt="Indiana Green" class="top">
    </div>
    <div class="content">
      <h2>I’m Indiana, your go-to guru for all things housekeeping, from Professional Housekeeping Services, lifestyle, and luxury living.</h2>
      <p>Join me on this journey to discover the five guiding principles of housekeeping that will not only bring order and beauty into your home but also nurture your soul.</p>
      <button>Explore More</button>
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