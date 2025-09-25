<?php
include('header.php');
?>
<style>
    .slect_property_type_box img{
        height:250px;
        object-fit:cover
    }
    .slect_property_type_column {
  opacity: 0;
  transform: translateY(50px); /* Start shifted downward */
  transition: all 0.8s ease-out;
}

/* Animate in when visible */
.slect_property_type_column.animate {
  opacity: 1;
  transform: translateY(0);
}
</style>


  
  <section class="top_black_line_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="line-with-dots" aria-hidden="true">
                    <span class="dot left"></span>
                    <span class="dot center"></span>
                    <span class="dot right"></span>
                </div>
            </div>
        </div>
    </div>
  </section>

  
<section class="slect_property_type_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="slect_property_type_head_box">
                    <h2>Select Your Property Type</h2>
                    <p>Pick the property that matches your needs</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
                <div class="slect_property_type_box">
                    <img src="<?php echo base_url() ?>assets/img/new/sp1.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Apartments/Flats</h3>
                        <p><span class="pound_siggn">£</span> 25/Hour</p>
                    </div>
                </div>
            </div>
            <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
                <div class="slect_property_type_box">
                    <img src="<?php echo base_url() ?>assets/img/new/sp2.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>House/Villa</h3>
                        <p><span class="pound_siggn">£</span> 22/Hour</p>
                    </div>
                </div>
            </div>
            <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
                <div class="slect_property_type_box">
                    <img src="<?php echo base_url() ?>assets/img/new/sp3.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Student Accommodation</h3>
                        <p><span class="pound_siggn">£</span> 25/Hour</p>
                    </div>
                </div>
            </div>
            <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
                <div class="slect_property_type_box">
                    <img src="<?php echo base_url() ?>assets/img/new/sp4.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Airbnb/Holiday Let</h3>
                        <p><span class="pound_siggn">£</span> 22/Hour</p>
                    </div>
                </div>
            </div>
            <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
                <div class="slect_property_type_box">
                    <img src="<?php echo base_url() ?>assets/img/new/sp5.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>End of Tenancy</h3>
                        <p><span class="pound_siggn">£</span> 25/Hour</p>
                    </div>
                </div>
            </div>
            <div class="slect_property_type_column col-lg-4 col-md-4 col-sm-12">
                <div class="slect_property_type_box">
                    <img src="<?php echo base_url() ?>assets/img/new/sp6.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
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
          }, index * 150); // Stagger effect
          observer.unobserve(entry.target); // Animate only once
        }
      });
    },
    { threshold: 0.2 } // Trigger when 20% visible
  );

  columns.forEach(column => observer.observe(column));
});
</script>