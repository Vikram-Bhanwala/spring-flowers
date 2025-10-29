<?php
include('header.php');
?>

	<title>Keeper Type</title>
<style>
    
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

 <section class="top_time_line_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="time_line_box">
                    <img src="<?php echo base_url() ?>assets/img/new/progress-3-1dot.png" alt="">
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
                    <h2>Select Your Keeper Type</h2>
                    <p>Pick the Keeper that matches your needs</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="slect_property_type_column col-lg-3 col-md-3 col-sm-12">
                <a href="<?php echo base_url()?>keeper-form">
                <div class="slect_property_type_box slect_property_type_box2">
                    <img src="<?php echo base_url() ?>assets/img/new/sk1.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Housekeeper</h3>
                        <p>12.5% of your Annual Salary</p>
                        <!-- <p><span class="pound_siggn">£</span> 24/Hour</p> -->
                    </div>
                </div>
                </a>
            </div>
            <div class="slect_property_type_column col-lg-3 col-md-3 col-sm-12">
                <a href="<?php echo base_url()?>keeper-form">
                <div class="slect_property_type_box slect_property_type_box2">
                    <img src="<?php echo base_url() ?>assets/img/new/sk2.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Companion/Housekeeper</h3>
                        <p>12.5% of your Annual Salary</p>
                        <!-- <p><span class="pound_siggn">£</span> 25/Hour</p> -->
                    </div>
                </div>
                </a>
            </div>
            <div class="slect_property_type_column col-lg-3 col-md-3 col-sm-12">
                <a href="<?php echo base_url()?>keeper-form">
                <div class="slect_property_type_box slect_property_type_box2">
                    <img src="<?php echo base_url() ?>assets/img/new/sk3.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Cook/Housekeeper</h3>
                        <p>12.5% of your Annual Salary</p>
                        <!-- <p><span class="pound_siggn">£</span> 26/Hour</p> -->
                    </div>
                </div>
                </a>
            </div>
            <div class="slect_property_type_column col-lg-3 col-md-3 col-sm-12">
                <a href="<?php echo base_url()?>keeper-form">
                <div class="slect_property_type_box slect_property_type_box2">
                    <img src="<?php echo base_url() ?>assets/img/new/sk4.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Groundsman/Housekeeper</h3>
                        <p>12.5% of your Annual Salary</p>
                        <!-- <p><span class="pound_siggn">£</span> 25/Hour</p> -->
                    </div>
                </div>
                </a>
            </div>
            <div class="slect_property_type_column col-lg-3 col-md-3 col-sm-12">
                <a href="<?php echo base_url()?>keeper-form">
                <div class="slect_property_type_box slect_property_type_box2">
                    <img src="<?php echo base_url() ?>assets/img/new/sk5.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Nanny/Housekeeper</h3>
                        <p>12.5% of your Annual Salary</p>
                        <!-- <p><span class="pound_siggn">£</span> 26/Hour</p> -->
                    </div>
                </div>
                </a>
            </div>
            <div class="slect_property_type_column col-lg-3 col-md-3 col-sm-12">
                <a href="<?php echo base_url()?>keeper-form">
                <div class="slect_property_type_box slect_property_type_box2">
                    <img src="<?php echo base_url() ?>assets/img/new/sk6.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Security/Housekeeper</h3>
                        <p>12.5% of your Annual Salary</p>
                        <!-- <p><span class="pound_siggn">£</span> 28/Hour</p> -->
                    </div>
                </div>
                </a>
            </div>
            <div class="slect_property_type_column col-lg-3 col-md-3 col-sm-12">
                <a href="<?php echo base_url()?>keeper-form">
                <div class="slect_property_type_box slect_property_type_box2">
                    <img src="<?php echo base_url() ?>assets/img/new/sk7.jpg" alt="">
                    
                    <!-- Overlay -->
                    <div class="slect_property_type_overlay"></div>

                    <!-- Text over overlay -->
                    <div class="slect_property_type_text">
                        <h3>Head/HouseKeeper</h3>
                        <p>12.5% of your Annual Salary</p>
                        <!-- <p><span class="pound_siggn">£</span> 30/Hour</p> -->
                    </div>
                </div>
                </a>
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