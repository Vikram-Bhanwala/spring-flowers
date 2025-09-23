

<style>
  .footer_new_box{
    width:40% !important;
    display:flex;
    justify-content:space-between
 }
 .footer_column{
  width:30%
 }
 .footer_column ul{
  list-style-type:none
 }
 .footer_column a{
  color:white;
  text-decoration:none;
  font-size:15px
 }
 .footer_column li{
  margin:10px 0px;
 }
 .contact_side_btn_footer {
    color: white;
    background: #ff000000;
    border: none !important;
    outline: none !important;
    cursor: pointer;
}
</style>
  <footer>
	 <!-- Hero Section -->
  <div class="hero">
    <div class="footer_new_box">
      <div class="footer_column">
        <ul>
          <li><a href="<?php echo base_url()?>">Home</a></li>
          <li><a href="<?php echo base_url()?>shop">Shop</a></li>
          <li><a href="<?php echo base_url()?>our-story">Our Story</a></li>
          <li><a href="<?php echo base_url()?>blogs">Blogs</a></li>
        </ul>
      </div>
      <div class="footer_column">
        <ul>
          <li><a href="<?php echo base_url()?>select-keeper-type">House Keeping</a></li>
          <li> <a href="<?php echo base_url()?>/select-property-type">House Cleaning</a></li>
          <li><a href="<?php echo base_url()?>join-us">Join Us</a></li>
        </ul>
      </div>
      <div class="footer_column">
        <ul>
          <li><button id="contact_form_side_open_btn" class="contact_side_btn contact_side_btn_footer">Contact</button></li>
          <li><a href="<?php echo base_url()?>privacy-policy">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <!-- Centered Text -->
    <div class="center-text">CLEAN</div>
  </div>
  <!-- Social Media Icons -->
  <div class="social-icons">
    <a href="https://wa.me/447923639015" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="https://www.instagram.com/indithehomeguru/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.facebook.com/profile.php?id=100058949541919" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.youtube.com/@IndianaGreeneHomeGuru" target="_blank"><i class="fab fa-youtube"></i></a>
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

