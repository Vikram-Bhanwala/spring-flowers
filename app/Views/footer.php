


  <footer>
	 <!-- Hero Section -->
  <div class="hero">
    <!-- Navigation -->
    <nav>
      <a href="<?php echo base_url()?>">Home</a>
      <a href="<?php echo base_url()?>shop">Shop</a>
      <a href="<?php echo base_url()?>our-story">Our Story</a>
      <a href="<?php echo base_url()?>blogs">Blogs</a>
      <a href="<?php echo base_url()?>select-keeper-type">House Keeping</a>
      <a href="<?php echo base_url()?>/select-property-type">House Cleaning</a>
      <a href="<?php echo base_url()?>join-us">Join Us</a>
      <a href="<?php echo base_url()?>">Contact</a>
      <a href="<?php echo base_url()?>privacy-policy">Privacy Policy</a>
    </nav>

    <!-- Centered Text -->
    <div class="center-text">CLEAN</div>
  </div>
  <!-- Social Media Icons -->
  <div class="social-icons">
    <a href="#"><i class="fab fa-whatsapp"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
  </div>

  <!-- Footer -->
  <div class="copy-wite">
    <div class="footer-container">
      <p>Copyright © 2025 <span class="brand">CleanSpringFlowers</span> - All Rights Reserved.</p>
      <p class="designer">Designed by <a href="#">HyperRevamp</a></p>
    </div>
</div>

  </footer>



	 <script>
    // Toggle mobile nav
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("nav-menu");

    hamburger.addEventListener("click", () => {
      navMenu.classList.toggle("active");
    });
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const section = document.querySelector(".animate_on_scroll_hero_main_icon");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add("show");
        observer.unobserve(section); // animate once
      }
    });
  });

  observer.observe(section);
});
</script> 
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url() ?>public/assets/js/main.js"></script>

</body>
</html>