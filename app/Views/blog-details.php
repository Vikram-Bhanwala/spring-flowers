<?php
include('header.php');
?>

	<title>The Springflower Difference: Building Trust in Home Cleaning Services</title>
<style>
   .blog_main_banner_sec {
    width: 100%;
    background-image: url('assets/img/new/bb1.png');
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    justify-content: center; /* centers first row vertically */
    position: relative;
    padding: 40px 0;
    height:85vh
}

.blog_main_banner_first_head_box {
    text-align: center; /* centers heading horizontally */
}

.blog_main_banner_col {
    display: flex;
    justify-content: center;
    align-items: center;
}

.blog_main_banner_sec .row:last-child {
    position: absolute;
    bottom: 20px; /* push to bottom */
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    text-align: center;
}
.blog_bannr_secon_row{
    width:100%
}
.blog_main_banner_first_head_box h2{
    color:white;
   font-family:IvyOraDisplay-Regular;
   font-size:50px
}
.blog_first_row{
    display:flex;
    justify-content:center
}
.blog_main_banner_second_box{
    color:white
}
.blog_main_banner_second_box p {
    margin-bottom: 5px;
    font-size: 11px;
    text-align:left;
}
.blog_main_banner_second_box h6{
    color:white;
   font-family:IvyOraDisplay-Regular;
   font-size:25px;
    text-align:left;

}
.blog_main_banner_second_box1{
    border-right:2px solid white
}
.blog_main_sec{
    padding:60px 0px;
    /* background:white */
}
.blog_main_sec h2{
    color:black;
   font-family:IvyOraDisplay-medium;
   margin-bottom:30px;
   font-size:35px;

}
.blog_main_sec h3{
    color:black;
   font-family:IvyOraDisplay-medium;
   font-weight:500;
   margin-bottom:30px;
   font-size:30px;

}
.blog_main_sec h4{
    color:black;
   font-family:IvyOraDisplay-medium;
   margin-bottom:20px;
   font-size:25px;

}
.blog_main_sec h5{
    color:black;
   font-family:IvyOraDisplay-medium;
   margin-bottom:20px;
   margin-top:30px;
   font-size:23px;

}
.blog_main_sec h1{
    color:black;
   font-family:IvyOraDisplay-medium;
   margin-bottom:40px;

}
.blog_main_sec p{
    margin-bottom:20px
}
.blog_youtube_box{
    padding:40px 0px
}

.blog_side_enquire_box h2{
    color:black;
   font-family:IvyOraDisplay-Regular;
   margin-bottom:30px;
   font-size:40px;
   font-weight:100;
   text-align:center

}
.blog_side_enquire_box{
    padding: 15px 20px;
    border: 2px solid black;
}
.blog_main_sec{
    position: relative;
}
.blog_side_enquire_box{
    position: sticky;
    top:14%;
    background:white
}
.blog_sied_enter_btn button{
    background:black;
    color:white;
    width:100%;
    padding:6px;
    border:0px ;
}
.recent_blog_main_sec{
    padding:60px 0px;
    /* background:white */
}
.recent_head_box h2{
    color:black;
   font-family:IvyOraDisplay-Regular;
   margin-bottom:40px;
   font-size:50px;
   font-weight:100;

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
    font-weight:600;
    font-family:IvyOraDisplay-Regular;
}
.blogs_regular_box h6{
    margin-top:10px;
}
.blog_regular_row{
    margin-top:40px 
}
strong{
    font-weight:500 !important
}
</style>


<section class="blog_main_banner_sec"  style="background-image: url('<?=  $blog['image'] ?>');">
    <div class="container">
        <div class="row blog_first_row">
            <div class="col-lg-8 col-md-8 col-sm-12 blog_main_banner_col">
                <div class="blog_main_banner_first_head_box">
                    <h2><?= esc($blog['title']) ?></h2>
                </div>
            </div>
        </div>
        <div class="row blog_bannr_secon_row">
            <div class="col-lg-2 col-md-2 col-sm-6 ">
                <div class="blog_main_banner_second_box blog_main_banner_second_box1">
                    <p>Published Date</p>
                     <h6><?= date('d M Y', strtotime($blog['date'])) ?></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 ">
                <div class="blog_main_banner_second_box">
                    <p>Written By</p>
                    <h6>Indiana Greene</h6>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- blog main section -->
<section class="blog_main_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="blog_main_cont_box">
                    <?= $blog['main_description'] ?>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="blog_side_enquire_box">
                    <h2>Enquire Now</h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact_side_akshay_main_input_box">
                                    <label>Name</label>
                                    <input type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact_side_akshay_main_input_box">
                                    <label>Email</label>
                                    <input type="text" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact_side_akshay_main_input_box">
                                    <label>Phone</label>
                                    <input type="text" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact_side_akshay_main_input_box">
                                    <label>Message</label>
                                    <textarea placeholder="Write Message.."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog_sied_enter_btn">
                                    <button>Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- recent blogs -->
<section class="recent_blog_main_sec">
    <div class="container">
        <div class="row">
            <div class="recent_head_box">
                <h2>Some Recommendations</h2>
            </div>
        </div>
        <div class="row blog_regular_row">
            <?php foreach ($recommended as $r): ?>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="blogs_regular_box">
                    <a href="<?= base_url($r['slug']) ?>">
                        <img src="<?= $r['image'] ?>" alt="<?= esc($r['image_alt']) ?>">
                    </a>
                    <h6>
                        <a href="<?= base_url($r['slug']) ?>"><?= esc($r['title']) ?></a>
                    </h6>
                    <div class="date_box_regular">
                        <p><?= date('d M Y', strtotime($r['date'])) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<?php
include('footer.php');
?>