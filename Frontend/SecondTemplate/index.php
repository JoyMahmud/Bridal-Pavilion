<?php

session_start();
$message = '';

/*Upload service info*/
require_once ('../../Class/client_feedback.php');
if(isset($_POST['btn']))
{
    $obj_client_feedback = new Client_feedback();
    $message = $obj_client_feedback->save_client_feedback_info($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bridal Pavilion || Client Feedback</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Bridal Pavilion</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1">
                  <a class="nav-link py-3 px-0 px-lg-3 rounded" href="../../index.php">Home</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                  <a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Client Feedback</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                  <a class="nav-link py-3 px-0 px-lg-3 rounded" href="more_photo.php">Photo</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                  <a class="nav-link py-3 px-0 px-lg-3 rounded" href="more_video.php">Video</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1 class="text-uppercase mb-0">Client Feedback</h1>
      </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--Success Message -->
                <h3 class="text-center text-success"><?php /*echo $message;*/ ?></h3>
                <br>
                <!--end -->
                <div class="well" style="margin-top: 20px">
                    <h3 class="text-center text-info">Enter Your Valuable Feedback Here</h3><br>
                    <!--Success Message -->
                    <h3 class="text-center text-success"><?php echo $message; ?></h3>
                    <br>
                    <!--end -->

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="client_name" class="col-sm-2 control-label">Client Name:</label>
                            <div class="col-sm-12">
                                <input type="text" name="client_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="client_profession" class="col-sm-2 control-label">Client Profession:</label>
                            <div class="col-sm-12">
                                <input type="text" name="client_profession" class="form-control" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="feeadback_message" class="col-sm-2 control-label">Feedback Message:</label>
                            <div class="col-sm-12">
                                <textarea name="feeadback_message" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="client_image" class="col-sm-2 control-label">Client Image:</label>
                            <div class="col-sm-12">
                                <input type="file" name="client_image" accept="image/*" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="publication_status" class="col-sm-2 control-label">Publication Status:</label>
                            <div class="col-sm-12">
                                <select name="publication_status" class="form-control">
                                    <option>---Select Publication Status---</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="btn" class="col-sm-2 control-label"></label>
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Send Your Feedback</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
          <p>&copy; 2014 - <?php echo date("Y");?> All Right Reserved | <a href="https://www.facebook.com/joymahmud271" target="_blank">Joy Mahmud</a></p>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
