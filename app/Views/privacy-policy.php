<?php
include('header.php');
?>
<style>
   .privacy_policy_banner_sec {
    position: relative;
    background-image: url('assets/img/new/privacy-banner.png');
    padding: 40px 0px;
    background-size:100% 100%
}

.privacy_policy_banner_sec::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the color and opacity here */
    z-index: 1; /* Ensure overlay is above the image but below the content */
}

.privacy_policy_banner_sec > * {
    position: relative;
    z-index: 2; /* Ensures the text/content is above the overlay */
}


.privacy_policy_banner_content {
  text-align: center;
  padding: 40px 20px;
}

.privacy_policy_banner_text {
  font-size: 150px;
  font-weight: 500;
  margin: 0;
  letter-spacing: 10px;
  line-height: 1.2;
  overflow: hidden;
  color:white;
    font-family:IvyOraDisplay-Regular;
}

.privacy_policy_banner_left {
  text-align: left;
}

.privacy_policy_banner_center {
  text-align: center;
}

.privacy_policy_banner_right {
  text-align: right;
}

.privacy_policy_banner_text span {
  display: inline-block;
  opacity: 0;
  transform: translateY(120px);
  animation: privacy_policy_banner_slideUp 0.6s forwards;
}

/* Stagger animation delays */
.privacy_policy_banner_text:nth-child(1) span {
  animation-delay: calc(var(--i) * 0.1s);
}
.privacy_policy_banner_text:nth-child(2) span {
  animation-delay: 0.9s; /* after PRIVACY */
}
.privacy_policy_banner_text:nth-child(3) span {
  animation-delay: calc(1.3s + var(--i) * 0.1s); /* letter by letter like PRIVACY */
}

@keyframes privacy_policy_banner_slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.privcy_policy_main_heading_box h2 {
    font-family: IvyOraDisplay-Regular;
    color: black;
    padding-bottom: 20px;
    position: relative;
    font-size: 50px;
    margin-bottom:50px 
}

.privcy_policy_main_heading_box h2::after {
    content: "";
    position: absolute;
    bottom: 0; /* Position it directly below the heading */
    left: 0;
    width: 30%; /* Make the line span the full width of the h2 */
    height: 1px; /* Adjust the thickness of the line */
    background-color: black; /* Color of the line */
}
.privcy_policy_main_sec{
    padding:80px 0px;
    padding-bottom:0px !important;
}
.privcy_first_para{
    margin-bottom:20px;
}
.privacy_policy_boxes{
    padding-bottom:30px
}
.privacy_policy_boxes h2{
    font-family: IvyOraDisplay-Regular;
    color:black 

}
.privacy_policy_boxes h4{
    font-size:20px;
    font-family: IvyOraDisplay-Regular;
    line-height:30px;
    margin-bottom:30px !important
}
.holiday_hhead{
    margin-bottom:30px
}
.privacy_policy_boxes h3{
    
    font-family: IvyOraDisplay-Regular;
}
.lssst_pp {
    margin-bottom:45px !important
}
.privacy_policy_boxes ul{
    padding-left: 45px;
    padding-top: 10px;
}
</style>
<!-- privacy polivy banner sec -->
<section class="privacy_policy_banner_sec">
  <div class="container privacy_policy_banner_container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 p-0">
        <div class="privacy_policy_banner_content">
          
          <!-- Line 1 -->
          <h1 class="privacy_policy_banner_text privacy_policy_banner_left">
            <span>P</span><span>R</span><span>I</span><span>V</span><span>A</span><span>C</span><span>Y</span>
          </h1>
          
          <!-- Line 2 -->
          <h1 class="privacy_policy_banner_text privacy_policy_banner_center">
            <span>&amp;</span>
          </h1>
          
          <!-- Line 3 -->
          <h1 class="privacy_policy_banner_text privacy_policy_banner_right">
            <span>P</span><span>O</span><span>L</span><span>I</span><span>C</span><span>Y</span>
          </h1>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- privacy policy main section -->
<section class="privcy_policy_main_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privcy_policy_main_heading_box">
                    <h2>Privacy & Policy</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <p class="privcy_first_para">At Indiana Jazz, accessible from indianajazz.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Indiana Jazz and how we use it.</p>
                    <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Log Files</h2>
                    <p >Indiana Jazz follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services’ analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users’ movement on the website, and gathering demographic information.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Cookies and Web Beacons</h2>
                    <p >Like any other website, Indiana Jazz uses ‘cookies’. These cookies are used to store information including visitors’ preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users’ experience by customizing our web page content based on visitors’ browser type and/or other information.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Privacy Policies</h2>
                    <p >Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Indiana Jazz, which are sent directly to users’ browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
                    <p>Note that Indiana Jazz has no access to or control over these cookies that are used by third-party advertisers.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Third Party Privacy Policies</h2>
                    <p >Indiana Jazz’s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>
                    <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers’ respective websites. What Are Cookies?</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Children’s Information</h2>
                    <p >Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
                    <p>Indiana Jazz does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Online Privacy Policy Only</h2>
                    <p >This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Indiana Jazz. This policy is not applicable to any information collected offline or via channels other than this website.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Consent</h2>
                    <p >By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h4>Clean Spring Flower Group <br> Registered office group <br>42-44 Bishopsgate,<br>London,<br>EC2N 4AH <br>Company number:16382788</h4>
                    <p>This agreement outlines the terms of service between The clean Spring Flower Group of companies Ltd  and the client named below. By signing, both parties agree to the terms specified to ensure a smooth, professional, and respectful working relationship.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Policies</h2>
                    <ul>
                        <li>This is a monthly rolling contract, commencing on the start date above.</li>
                        <li>Either party may terminate this agreement by providing a minimum of one month’s written notice.</li>
                        <li>Notice must be submitted via email to info@cleangloucestershore.com or in writing.</li>
                    </ul>   
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Cancellations:</h2>
                    <p >Cancellations made with less than 24 hours’ notice will be charged at the full rate. We reserve cleaner time in advance, and late cancellations leave us unable to rebook that time slot.</p>
                    <p>Weather or Access Issues:</p>
                    <p>In the event of road closures, severe weather, or restricted access, cleaners will wait up to 30 minutes. If service cannot proceed, we will attempt to reschedule at the earliest availability.</p>
                    <p>Sickness – Client or Staff:</p>
                    <p>If either the client or cleaner is unwell, please notify us as soon as possible. We will do our best to offer a replacement cleaner when available.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>ETAs & Schedule Changes:</h2>
                    <p >We will inform clients via text, WhatsApp or email if there are any severe delays or schedule adjustments.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Payments:</h2>
                    <ul>
                        <li>Payments are to be made via monthly standing order, unless otherwise agreed.  If for any reason a clean has been cancelled and should not be charged refunds will be applied every 3 months.</li>
                        <li>Invoice statements are issued at the end of each calendar month.</li>
                        <li>Late payments may result in a pause of service.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2 class="holiday_hhead">Holidays & Sickness Policy</h2>
                    <h3>Client Holidays</h3>
                    <p >If you, the client, are away on holiday, we recommend using this time to carry out deep cleaning or one-off tasks that are often difficult to complete during routine visits. This ensures continuity of employment for your cleaner and adds value to your service.</p>
                    <p class="lssst_pp">However, if you prefer to cancel cleans during your holiday, we kindly request at least one weeks notice. This allows us time to reallocate your cleaner to alternative work and avoid unnecessary loss of income for them. Any cancellations applied in under one week but more than 24 hrs will be charged at 25% of the cleaning fee</p>
                    <h3>Cleaner Holidays or Sickness</h3>
                    <p >If your regular cleaner is unavailable due to holiday or illness, we will offer you a replacement cleaner as soon as possible.</p>
                    <p class="lssst_pp">If you would prefer to pause your cleaning service until your usual cleaner/s is available again, please let us know via email, text, or WhatsApp so we can update our scheduling accordingly. We appreciate your flexibility and cooperation, which helps us support both our clients and our valued cleaning staff.</p>
                    <h3>Non-Solicitation Clause</h3>
                    <p >A significant investment of time and resources has been made to carefully recruit, train, and match the right housekeeper with each client.</p>
                    <p>By entering into this agreement, the Client agrees not to approach, solicit, or directly employ any staff member introduced by the named cleaning company either during the period of service or within six (6) months of the termination of this agreement.</p>
                    <p>Should a Client wish to hire a staff member directly during or within six months of their engagement with our company, this can be discussed with the company to establish if this is acceptable for both parties and if so a placement fee of 10% of the annual salary will be payable to cover recruitment, training, and administrative costs.</p>
                    <p class="">This clause is in place to protect the integrity of our service and the fair treatment of both staff and clients.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Confidentiality & Data Compliance</h2>
                    <p >By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Client Data</h2>
                    <p >All personal data provided by the client (including names, contact details, addresses, and service preferences) will be stored securely and used solely for the purpose of delivering our cleaning services.</p>
                    <p>We do not share or sell client data with third parties. Access to this information is restricted to authorised personnel only and handled in accordance with current data protection legislation, including the UK GDPR and Data Protection Act 2018 (or applicable local laws).</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Cleaner Confidentiality</h2>
                    <p >Our staff are also contractually bound to maintain the strictest confidentiality regarding any personal or sensitive information they may encounter while working in your home. This includes respecting your property, personal routines, and any discussions or observations made during their visits.</p>
                    <p>If you have any concerns regarding confidentiality or would like to access, amend, or request deletion of your stored data, please contact us at info@cleangloucestershire.com</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Insurance</h2>
                    <p >We are fully insured for the services we provide, including public liability and employer’s liability cover.</p>
                    <p>While every effort is made to prevent damage or accidents, our insurance offers peace of mind in the unlikely event of an incident occurring during the course of our work.</p>
                    <p>If you would like to review our insurance details or require a copy of our insurance certificate, please don’t hesitate to contact us — we will be happy to provide it.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Bank Holidays</h2>
                    <p >We operate with a skeleton of bank staff on bank holidays. If your scheduled clean falls on a bank holiday, we will offer you an alternative date.</p>
                    <p>Should you choose to proceed with the clean on the bank holiday, it will be charged at time and a half.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="privacy_policy_boxes">
                    <h2>Support & Communication</h2>
                    <p >We are committed to transparency, quality, and responsive communication.</p>
                    <ul>
                        <li>For updates, tips, and promotions: Follow us on Instagram and Facebook</li>
                        <li>Participate in our monthly giveaways by engaging with us on social media!</li>
                    </ul>
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
    <button><img src="<?php echo base_url() ?>assets/img/new/right-news.png" alt=""></button>
  </div>
  </section>


<?php
include('footer.php');
?>
<script>
  document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".privacy_policy_banner_text").forEach(line => {
    line.querySelectorAll("span").forEach((letter, i) => {
      letter.style.setProperty("--i", i);
    });
  });
});


</script>