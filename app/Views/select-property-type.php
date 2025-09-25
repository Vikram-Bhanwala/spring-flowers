<?php
include('header.php');
?>
<style>
/* Column animation */
.slect_property_type_column {
  opacity: 0;
  transform: translateY(50px); /* Start shifted downward */
  transition: all 0.8s ease-out;
}

.slect_property_type_column.animate {
  opacity: 1;
  transform: translateY(0);
}

/* Box styling */
.slect_property_type_box {
  cursor: pointer;
  display: block;
  position: relative;
  border: 2px solid transparent;
  transition: 0.3s;
  overflow: hidden;
}

.slect_property_type_box img {
  width: 100%;
  height: 250px;
  object-fit: cover;
  display: block;
}

/* Overlay */
.slect_property_type_overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.5);
  /* opacity: 0; */
  transition: opacity 0.3s;
}

.slect_property_type_box:hover .slect_property_type_overlay {
  opacity: 1;
}

/* Text on overlay */
.slect_property_type_text {
  position: absolute;
  bottom: 15px;
  left: 0;
  right: 0;
  /* text-align: center; */
  color: #fff;
  font-weight: bold;
  z-index: 2;
  padding-left:5%
}

.slect_property_type_box input:checked ~ .slect_property_type_overlay {
  opacity: 1;
  background: rgba(0, 0, 0, 0.4);
}

.slect_property_type_box input:checked ~ .slect_property_type_text {
  color: white;
}
</style>


<section class="top_time_line_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="time_line_box text-center">
          <img src="<?php echo base_url() ?>assets/img/new/progress-4-1dot.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="slect_property_type_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="slect_property_type_head_box text-center">
          <h2>Select Your Property Type</h2>
          <p>Pick the property that matches your needs</p>
        </div>
      </div>
    </div>
    <div class="row">
      
      <!-- Card 1 -->
      <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
        <div class="slect_property_type_box">
          <input type="radio" name="property_type" value="Apartments/Flats" data-url="property-form" hidden>
          <img src="<?php echo base_url() ?>assets/img/new/sp1.jpg" alt="">
          <div class="slect_property_type_overlay"></div>
          <div class="slect_property_type_text">
            <h3>Apartments/Flats</h3>
            <p><span class="pound_siggn">£</span> 25/Hour</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
        <div class="slect_property_type_box">
          <input type="radio" name="property_type" value="House/Villa" data-url="property-form" hidden>
          <img src="<?php echo base_url() ?>assets/img/new/sp2.jpg" alt="">
          <div class="slect_property_type_overlay"></div>
          <div class="slect_property_type_text">
            <h3>House/Villa</h3>
            <p><span class="pound_siggn">£</span> 22/Hour</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
        <div class="slect_property_type_box">
          <input type="radio" name="property_type" value="Student Accommodation" data-url="property-form" hidden>
          <img src="<?php echo base_url() ?>assets/img/new/sp3.jpg" alt="">
          <div class="slect_property_type_overlay"></div>
          <div class="slect_property_type_text">
            <h3>Student Accommodation</h3>
            <p><span class="pound_siggn">£</span> 25/Hour</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
        <div class="slect_property_type_box">
          <input type="radio" name="property_type" value="Airbnb/Holiday Let" data-url="property-form" hidden>
          <img src="<?php echo base_url() ?>assets/img/new/sp4.jpg" alt="">
          <div class="slect_property_type_overlay"></div>
          <div class="slect_property_type_text">
            <h3>Airbnb/Holiday Let</h3>
            <p><span class="pound_siggn">£</span> 22/Hour</p>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
        <div class="slect_property_type_box">
          <input type="radio" name="property_type" value="end of tenancy" data-url="property-form" hidden>
          <img src="<?php echo base_url() ?>assets/img/new/sp5.jpg" alt="">
          <div class="slect_property_type_overlay"></div>
          <div class="slect_property_type_text">
            <h3>End of Tenancy</h3>
            <p><span class="pound_siggn">£</span> 25/Hour</p>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
        <div class="slect_property_type_box">
          <input type="radio" name="property_type" value="office space" data-url="property-form" hidden>
          <img src="<?php echo base_url() ?>assets/img/new/sp6.jpg" alt="">
          <div class="slect_property_type_overlay"></div>
          <div class="slect_property_type_text">
            <h3>Office Space</h3>
            <p><span class="pound_siggn">£</span> 24.50/Hour</p>
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
// Animate columns on scroll
document.addEventListener("DOMContentLoaded", function () {
  const columns = document.querySelectorAll(".slect_property_type_column");
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("animate");
          }, index * 150);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );
  columns.forEach(column => observer.observe(column));
});

// Make entire box clickable + redirect
document.querySelectorAll('.slect_property_type_box').forEach(box => {
  box.addEventListener('click', () => {
    const input = box.querySelector('input[type="radio"]');
    if (input) {
      input.checked = true;
      const url = input.dataset.url;
      if (url) {
        window.location.href = url;
      }
    }
  });
});
</script>
