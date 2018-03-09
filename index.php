<?php
require_once ('Class/frontend_view.php');

/*this code for frontend Logo*/
$obj = new Frontend_view();
$result = $obj->all_logo_info();
$all_result = mysqli_fetch_assoc($result);

/*this code for frontend Service*/
$service = $obj->all_service_info();

/*this code for frontend Gallery Photo*/
$photo = $obj->all_photo_info();

/*this code for frontend Gallery Video*/
$video = $obj->all_video_info();

/*this code for frontend Satisfaction area*/
$satisfaction = $obj->all_satisfaction_info();

/*this code for frontend Team Member*/
$team = $obj->all_team_info();

/*this code for frontend Pakage*/
$pakage = $obj->all_pakage_info();

/*this code for frontend Blog News*/
$blog = $obj->all_blog_info();

/*this code for frontend feedback*/
$feedback = $obj->all_feedback_info();

/*this code for frontend footer up gallery*/
$footer_up_photo = $obj->all_footer_up_photo_info();

/*this code for frontend contact us*/
$contact_us = $obj->all_contact_us_info();
$all_contact = mysqli_fetch_assoc($contact_us);

/*this code for frontend footer gallery*/
$footer_photo = $obj->all_footer_photo_info();


/*Upload Book Pakage*/
require_once ('Class/book_pakage.php');
$message = '';
if(isset($_POST['btn']))
{
    $obj_book_pakage = new Book_pakage();
    $message = $obj_book_pakage->save_book_pakage_info($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridal Pavilion</title>
    <!-- ==================Start Css Link===================== -->
    <!--  fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700|Montserrat:100,300,400,400i,500,700,800" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="Frontend/assets/images/favicon.ico">
    <!-- bootstarp css link -->
    <link href="Frontend/assets/css/materialize.min.css" rel="stylesheet">
    <!-- bootstrap css -->
    <link href="Frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome css link -->
    <link href="Frontend/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- flation css -->
    <link href="Frontend/assets/css/font/flaticon.css" rel="stylesheet">
    <!-- animated css -->
    <link href="Frontend/assets/css/animate.css" rel="stylesheet">
    <!-- owal carosel css -->
    <link href="Frontend/assets/css/owl.carousel.min.css" rel="stylesheet">
    <!-- owal carosel theme css -->
    <link href="Frontend/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- magnifi css -->
    <link href="Frontend/assets/css/magnific-popup.css" rel="stylesheet">
    <!-- main css file -->
    <link href="Frontend/assets/css/main.css" rel="stylesheet">
    <!-- responsive css -->
    <link href="Frontend/assets/css/responsive.css" rel="stylesheet">


    <!-- ==================End Css Link===================== -->


    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<!--This is Just fb Page SDK instalation-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=617071585298534&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!--End instalation Process-->


    <!--
    ===================================================
    PHOTO LOVE PRELODER
    ===================================================
     -->
    <div class="preloder-rapper">
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
    <!--
    ===================================================
    PHOTO LOVE PRELODER
    ===================================================
     -->

    <!-- 
    ========================================
    PHOTO LOVE HEADER AREA START
    ========================================
      -->
    <header class="top-transparent-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="logo">
                        <a href="index.php">
                            <img src="Frontend/assets/images/logo/<?php echo $all_result['logo'];?>" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- end logo -->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"> <a class="smooth-scroll" href="#home"> HOME </a></li>
                                <li> <a class="smooth-scroll" href="#abt"> SERVICE </a></li>
                                <li> <a class="smooth-scroll" href="#port"> PHOTO </a></li>
                                <li> <a class="smooth-scroll" href="#video"> VIDEO </a></li>
                                <li> <a class="smooth-scroll" href="#tem"> TEAM </a></li>
                                <li> <a class="smooth-scroll" href="#condition"> CONDITION </a></li>
                                <li> <a class="smooth-scroll" href="#price"> Price </a></li>
                                <li> <a class="smooth-scroll" href="#blg"> Blog </a></li>
                                <li> <a class="smooth-scroll" href="#booking"> Booking </a></li>
                                <li> <a class="smooth-scroll" href="#contact"> CONTACT </a></li>
                                <li> <a class="smooth-scroll" href="Frontend/SecondTemplate"> Feedback </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end main menu -->
            </div>
        </div>
    </header>

    <!-- 
    ========================================
    PHOTO LOVE HEADER AREA END
    ========================================
      -->
    <!-- 
    ========================================
    PHOTO LOVE SLIDER AREA START FORM HERE
    ========================================
      -->

    <div class="photolove-slider-area" id="home">
        <div class="banner-still jarallax dark" data-jarallax='{"speed": 0.2}'>
            <div id="particles-js"></div>
            <div class="banner-table">
                <div class="banner-tbl-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="banner-content">
                                    <h3>Hello, We Are Profesional</h3>
                                    <h2 class="section-bar">PHOTOGRAPHER</h2>
                                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. </p>
                                    <a href="#booking" class="btn-mr-gra waves-effect waves-light">Hire Us</a>
                                </div>
                                <!-- end banner content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single slide -->
    </div>
    <!-- 
    ========================================
    PHOTO LOVE SLIDER AREA END FORM HERE
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO LOVE ABOUT AREA START FORM HERE
    ========================================
      -->
    <div class="photo-love-about section-pading" id="abt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Our Service</h2>
                        <p>Shooting a wedding is our passion. As a professional we will be committed to you and your wedding day. We are guaranteed to show up on time on your wedding day.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="service-acitve owl-carousel">

                    <?php foreach ($service as $all_service){ ?>
                        <div class="col-md-4">
                            <a class="single-services" href="#">
                                <img src="Frontend/assets/images/service/<?php echo $all_service['service_picture'];?>" alt="post_image" height="300" width="400">
                                <div class="services-caption">
                                    <h3><?php echo $all_service['service_type']?></h3>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <!-- end row -->
            <div class="mutual-spacer"></div>
            <!-- end mutal spacer -->
        </div>
    </div>

    <!-- 
    ========================================
    PHOTO LOVE ABOUT AREA END FORM HERE
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO Gallery AREA START FORM HERE
    ========================================
      -->

    <div class="photo-love-portfolio section-pading" id="port">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Photo Gallery</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="grid">
                    <?php foreach ($photo as $all_photo){ ?>
                        <div class="col-sm-4 col-xs-12 grid-item cat-1 cat-4">
                            <div class="single-port">
                                <img src="Frontend/assets/images/gallery-photo/<?php echo $all_photo['gallery_photo'];?>" alt="post_image" height="250" width="400">
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="Frontend/assets/images/gallery-photo/<?php echo $all_photo['gallery_photo'];?>" alt="post_image" height="250" width="400">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <a href="Frontend/SecondTemplate/more_photo.php"><button class="photo-btn" >More Photo</button></a>
            </div>
            <!-- end row btn-mr-gra-->
        </div>
    </div>

    <!-- 
    ========================================
    PHOTO Gallery END FORM HERE
    ========================================
      -->

    <!--
    ========================================
    VIDEO Gallery AREA START FORM HERE
    ========================================
      -->

    <div class="photo-love-portfolio section-pading" id="video">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Video Gallery</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="grid">
                    <?php foreach ($video as $all_video){ ?>
                        <div class="col-sm-4 col-xs-12 grid-item cat-1 cat-4">
                            <div class="car-video-frame">
                                <iframe width="360" height="240" src="<?php echo $all_video['gallery_video']?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <a href="Frontend/SecondTemplate/more_video.php"><button class="photo-btn" >More Video</button></a>
            </div>
            <!-- end row -->
        </div>
    </div>

    <!--
    ========================================
    VIDEO Gallery END FORM HERE
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO LOVE COUNTER UP START FORM HERE
    ========================================
      -->
    <div class="Photo-love-counter jarallax" data-jarallax='{"speed": 0.2}'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center extra">
                        <h2 class="section-heading white-text">Our Satisfaction Area</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <?php foreach ($satisfaction as $all_satisfaction){ ?>
                    <div class="col-md-3 col-sm-6 cl-xs-12 tab-30 stab-30">
                        <div class="single-counter">
                            <i class="flaticon-photo-camera"></i>
                            <p><?php echo $all_satisfaction['satisfaction_title']?></p>
                            <span class="counter"><?php echo $all_satisfaction['satisfaction_number']?></span>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <!-- 
    ========================================
    PHOTO LOVE COUNTERUP END FORM HERE
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO LOVE TEAM START FORM HERE
    ========================================
      -->
    <div class="photo-love-team section-pading" id="tem">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Team</h2>
                        <p>Your Happiness is our Satisfaction. Bridal Pavilion Team always so much sincere about your Happiness. Bridal pavilion expert team always take your event and finished with well reputation. </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="team-active owl-carousel">
                    <?php foreach ($team as $all_team){ ?>
                        <div class="col-md-4">
                            <div class="single-phopto-team text-center">
                                <div class="tem-thumb">
                                    <img class="image-circle" src="Frontend/assets/images/team-member/<?php echo $all_team['member_picture'];?>" alt="post_image">
                                </div>
                                <div class="team-text">
                                    <h3><?php echo $all_team['member_name'];?></h3>
                                    <span class="deginnation"><?php echo $all_team['member_designation'];?></span>
                                    <p><?php echo $all_team['short_description'];?></p>
                                </div>
                                <div class="team-sociual">
                                    <ul>
                                        <li><a href="<?php echo $all_team['facebook'];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <!-- end row -->
            <div class="mutual-spacer"></div>
            <!-- end mutaula spacer -->
        </div>
    </div>

    <!-- 
    ========================================
    PHOTO LOVE TEAM END FORM HERE
    ========================================
      -->

    <!--
    ========================================
    Condition Area
    ========================================
      -->
    <div class="photo-love-pricing-table section-pading" id="condition">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Condition Area</h2><hr>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 tab-30 stab-30">
                    <h4><i class="fa fa-eye"></i>  For booking 50% payment is required in advance .</h4>
                    <h4><i class="fa fa-eye"></i>  Booking money is non refundable .</h4>
                    <h4><i class="fa fa-eye"></i>  The rest 50% is payable on the day of the event .</h4>
                    <h4><i class="fa fa-eye"></i>  Hourly rate for extra hours in an event is 1,000/- taka per hour .</h4>
                    <h4><i class="fa fa-eye"></i>  Out of Dhaka , transport, living & food cost will be add .</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 tab-30 stab-30">
                    <h4><i class="fa fa-eye"></i>  Photographers and Cinematographers  will work only at the venue .</h4>
                    <h4><i class="fa fa-eye"></i>  Photographer may use photos in Facebook / website or others for his promotion/advertisement.</h4>
                    <h4><i class="fa fa-eye"></i>  It may take around 4 weeks to deliver the DVDs & printed Photos.</h4>
                    <h4><i class="fa fa-eye"></i>  If the event is at night and event duration exceed 12.30 am, it is clients responsibility to manage transport for the photographers .</h4>
                </div>
            </div>
        </div>
    </div>
    <!--
    ========================================
    Condition Area
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO LOVE PRICING TABLE
    ========================================
      -->
    <div class="photo-love-pricing-table section-pading" id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Our Pakage</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <!-- end row -->
            <div class="row">
                <?php foreach ($pakage as $all_pakage){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 tab-30 stab-30">
                        <div class="single-pricetable">
                            <div class="price-header">
                                <h3><?php echo $all_pakage['pakage_type']?></h3>
                                <div class="price-circle">
                                    <span class="price-amount">BDT- <?php echo $all_pakage['pakage_rate']?>/=</span>
                                </div>
                            </div>
                            <!-- end price header -->
                            <div class="price-body">
                                <ul>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_one']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_two']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_three']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_four']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_five']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_six']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_seven']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_eight']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_nine']?></li>
                                    <li><i class="fa fa-hand-o-right"></i> <?php echo $all_pakage['provide_ten']?></li>
                                </ul>
                            </div>
                            <!-- end price-body -->
                            <div class="price-footer">
                                <a class="smooth-scroll btn-mr-gra xs" href="#booking"> Booking Pakage</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- 
    ========================================
    PHOTO LOVE PRICING TABLE
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO LOVE BLOG TABLE
    ========================================
      -->
    <div class="photo-love-blog section-pading" id="blg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">NEWS BLOG</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <!-- end row -->
            <div class="row">
                <?php foreach ($blog as $all_blog){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 tab-30 stab-30">
                        <div class="single-photo-blog">
                            <div class="blog-thumb">
                                <img src="Frontend/assets/images/blog-post/<?php echo $all_blog['blog_picture'];?>" alt="post_image" height="250px">
                                <div class="blog-date">
                                    <a href="#"><?php echo $all_blog['created_at'];?></a>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h2><a href="#"><?php echo $all_blog['blog_title'];?></a></h2>
                                <p><?php echo substr($all_blog['blog_description'],0,200)."..."?><a href="#" > More</a></p>
                                <div class="blog-footer clearfix">
                                    <div class="pull-left">
                                        <a href="#" class="blog-link">Learn More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="pull-right">
                                        <ul>
                                            <li><a href="#"> <i class="flaticon-user"></i> admin</a></li>
                                            <li><a href="#"> <i class="flaticon-like"></i> 1534</a></li>
                                            <li><a href="#"> <i class="flaticon-chat"></i> 125</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end blog footer -->
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- 
    ========================================
    PHOTO LOVE BLOG TABLE
    ========================================
      -->
    <!-- 
    ========================================
    PHOTO TESTIMONIALS AREA START
    ========================================
      -->
    <div class="photo-love-testimonials section-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center extra">
                        <h2 class="section-heading white-text">TESTIMONIAL</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonials-active owl-carousel">
                    <?php foreach ($feedback as $all_feedback){ ?>
                        <div class="col-md-12">
                            <div class="single-testimonials">
                                <img class="img-feedback" src="Frontend/assets/images/client-feedback/<?php echo $all_feedback['client_image'];?>" alt="post_image">
                                <i class="flaticon-quote-left"></i>
                                <p> <?php echo $all_feedback['feeadback_message'];?></p>
                                <h4><?php echo $all_feedback['client_name'];?></h4>
                                <h5><?php echo $all_feedback['client_profession'];?></h5>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="mutual-spacer"></div>
        </div>
    </div>

    <!-- 
    ========================================
    PHOTO TESTIMONIALS AREA END
    ========================================
      -->
    <!-- 
    ========================================
    PHOTO LOVE CONTACT AREA START
    ========================================
      -->
    <div class="photo-love-contact-area section-pading" id="booking">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Book Our Pakage</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <!--Success Message -->
                <h3 class="text-center text-success"><?php echo $message; ?></h3>
                <br>
                <!--end -->

                <form action="" method="post" class="photo-love-contact-form">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" placeholder="Your Name*" required>
                        <input type="text" name="mobile" placeholder="Mobile no*" required>
                        <input type="text" name="event_name" placeholder="Event Name*" required>
                        <input type="text" name="event_start_time" placeholder="Event Start Time*" required>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email" placeholder="Your Email*" required>
                        <input type="text"  name="event_venu" placeholder="Event Venu*" required>
                        <input type="text" name="event_date" placeholder="Event Date. Ex: 4 Mar*" required>
                        <input type="text" name="message" placeholder="Whiche Pakage you want to book?" required>
                    </div>
                    <button type="submit" name="btn" class="btn-mr-gra waves-effect waves-light form-control" >Book Confirm</button>
                </form>
            </div>
            <br> <br>
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12">
                   <!-- <div class="map_area" id="googleMap"></div>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5144584614213!2d90.36667011456127!3d23.729027084599863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf31be776bd3%3A0xa4e247a1b791dbdd!2zMTY3LzQgQSDgprngpr7gppzgpr7gprDgp4Dgpqzgpr7gppcg4Kaw4KeL4KahLCDgpqLgpr7gppXgpr4gMTIwOQ!5e0!3m2!1sbn!2sbd!4v1520145837367" width="1150" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- 
    ========================================
    PHOTO LOVE CONTACT AREA END
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO LOVE GALLERY
    ========================================
      -->

    <div class="photolove-gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading">Gallery</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <div class="gallery-active owl-carousel">
            <?php foreach ($footer_up_photo as $all_footer_up_photo){ ?>
            <div class="single-gallery">
                <img src="Frontend/assets/images/gallery-photo/<?php echo $all_footer_up_photo['gallery_photo'];?>" alt="post_image" height="200" width="200">
                <div class="gal-overlay">
                    <a class="img-poppu" href="Frontend/assets/images/gallery-photo/<?php echo $all_footer_up_photo['gallery_photo'];?>">
                        <i class="flaticon-add"></i>
                    </a>
                </div>
            </div>
<?php } ?>
        </div>
    </div>
    <!-- 
    ========================================
    PHOTO LOVE GALLERY
    ========================================
      -->

    <!-- 
    ========================================
    PHOTO LOVE FOOTER AREA START 
    ========================================
      -->
    <footer class="section-pading-2 footer-area" id="contact">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 tab-30 stab-30 wow fadeIn">
                        <div class="single-footer-widget">
                            <div class="footer-logo mtb-30">
                                <!--<h3 class="footer-title mtb-30">photo love</h3>-->
                                <a href="#"><img src="Frontend/assets/images/logo/<?php echo $all_result['logo'];?>" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Bridal Pavilion is one of the Best Photographic Group In BD. Connect With Us for your Next Shoot.</p>
                            </div>
                            <div class="footer-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-6 col-xs-12 tab-30 stab-30 wow fadeIn">
                        <div class="one_third last">
                            <h3 class="title">Facebook Corner</h3>
                            <div class="title_line"></div>
                            <div class="clearfix"></div>
                         <!--<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/weddingdiarybd" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=359&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fweddingdiarybd&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 240px; height: 214px;"><iframe name="f226065741bd5c4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.5/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FNh1oH0K63yz.js%3Fversion%3D42%23cb%3Dfd71a26e8a972c%26domain%3Dwww.weddingdiary.com.bd%26origin%3Dhttp%253A%252F%252Fwww.weddingdiary.com.bd%252Ff33f954c16ccd6%26relation%3Dparent.parent&amp;container_width=359&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fweddingdiarybd&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 214px;" class=""></iframe></span></div>
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="250px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
                            <div class="fb-page" data-href="https://www.facebook.com/bridalpavilion/" data-width="340" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bridalpavilion/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bridalpavilion/">Bridal Pavilion</a></blockquote></div>
                        </div>
                    </div>

                    <!-- end single footer -->
                    <div class="col-md-2 col-sm-6 col-xs-12 stab-30 wow fadeIn">
                        <div class="single-footer-widget">
                            <h3 class="footer-title mtb-30">Contact Us</h3>
                            <address>
                                <i class="fa fa-bank"></i> <?php echo $all_contact['address']?><br>
                                <abbr title="Phone"><i class="fa fa-phone-square"></i></abbr>  <?php echo $all_contact['mobile']?> <br>
                                <i class="fa fa-envelope"></i><a href="mailto:#"> <?php echo $all_contact['email']?></a>
                            </address>
                        </div>
                    </div>
                    <!-- end single footer -->

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                        <div class="single-footer-widget">
                            <h3 class="footer-title mtb-30">Our Gallery</h3>
                            <div class="minigallery">
                                <ul>
                                    <?php foreach ($footer_photo as $all_footer_photo){ ?>
                                        <li><img src="Frontend/assets/images/gallery-photo/<?php echo $all_footer_photo['gallery_photo'];?>" alt="post_image" height="80" width="80"></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                </div>
            </div>
            <!-- end footer top -->
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copy-right-text">
                            <p>&copy; 2014 - <?php echo date("Y");?> All Right Reserved | <a href="https://www.facebook.com/joymahmud271" target="_blank">Joy Mahmud</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="footer-menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- 
    ========================================
    PHOTO LOVE FOOTER AREA END 
    ========================================
      -->



    <!-- main jquery  -->
    <script src="Frontend/assets/js/jquery.min.js"></script>
    <!-- bootstrap js  -->
    <script src="Frontend/assets/js/bootstrap.min.js"></script>
    <!-- meterilaze js -->
    <script src="Frontend/assets/js/materialize.min.js"></script>
    <!-- images load jquery -->
    <script src="Frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- jquery messonary  -->
    <script src="Frontend/assets/js/isotope.pkgd.min.js"></script>
    <!-- owal carosle js -->
    <script src="Frontend/assets/js/owl.carousel.min.js"></script>
    <!-- Counter up js -->
    <script src="Frontend/assets/js/jquery.counterup.min.js"></script>
    <!-- scroll up js -->
    <script src="Frontend/assets/js/jquery.scrollUp.min.js"></script>
    <!-- jquery waypoints -->
    <script src="Frontend/assets/js/waypoints.min.js"></script>
    <!-- jaralax js -->
    <script src="Frontend/assets/js/jarallax.min.js"></script>
    <!-- maginify js -->
    <script src="Frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    <!-- map js -->
    <script src="Frontend/assets/js/map.js"></script>
    <!-- partical js -->
    <script src="Frontend/assets/js/particles.min.js"></script>
    <!-- partical sript  -->
    <script src="Frontend/assets/js/particalscript.js"></script>
    <!-- custom scripts -->
    <script src="Frontend/assets/js/main.js"></script>

</body>

</html>