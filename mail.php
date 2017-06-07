<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "codingck@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carla Kroll - Front End Web Developer</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- My Custom CSS-->
    <link rel="stylesheet" href="css/clouds.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#"><span><svg width="77" height="63" viewBox="1.047 0 106.773 90.279">
  <path fill="#8B8B8F" d="M39.5 26.3L21.3 33l-8-22.2 18.2-6.6zm40.5 6l-18.7-5 6.3-22.8 18.6 5.2z"/>
  <ellipse fill="#9C9C9C" cx="50.1" cy="45.8" rx="35.9" ry="37.2"/>
  <ellipse fill="#C7CAD5" cx="50.1" cy="57.9" rx="19.8" ry="21.7"/>
  <path d="M35.7 57.2S37 72.5 50.3 72.5c0 0 14-.8 13.8-15.3 0 0-.5 11-13.5 11 0 0-12.7.6-14.6-11z"/>
  <path fill="#EC1D5D" d="M44 69.2h12v5.4s-.4 7-6 7c0 0-6-.5-6-7v-5.4z"/>
  <path d="M50 57.7s-9.3.2-9.3-7.2c0 0 0-7.3 9.4-7.3 0 0 9 .2 9 7.3 0 0-.4 7.2-8.4 7.2 0 0 4-.2 4.7-7.2 0 0 .4-2.4-5-2.7v10z"/>
  <ellipse cx="37.5" cy="29" rx="4.3" ry="5.6"/>
  <ellipse cx="65.6" cy="29" rx="4.3" ry="5.6"/>
  <ellipse fill="#FFF" cx="36.3" cy="26.7" rx="2.1" ry="2.8"/>
  <ellipse fill="#FFF" cx="64.4" cy="26.7" rx="2.1" ry="2.8"/>
  <path fill="#6E6E79" d="M22.3 7.5l9.4-3.3-1.5 10.4L28.7 25l-8-7-7.7-7m64-4l9.5 2.7-7.3 7.7L72 25l-2.4-10.3-2.3-10.3"/>
  <path fill="#C7CAD5" d="M49.7 20.2s1 15-12.2 22h21.3s-9.2-5-9-22z"/>
</svg></span><h1>carla<span>kroll</span></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">home<span class="sr-only">(current)</span></a></li>
            <li><a href="bio.html">bio</a></li>
            <!-- <li><a href="./">portfolio</a></li> -->
            <li class="active"><a href="contact.php">contact me</a></li>
            <li><a href="https://twitter.com/carlakroll7" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/in/carla-kroll/" target="_blank"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></li>
            <li><a href="http://codepen.io/ckroll17/pens/public/" target="_blank"><i class="fa fa-codepen fa-lg" aria-hidden="true"></i></a></li>
            <li><a href="https://github.com/ckroll17" target="_blank"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron topset">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            &nbsp;
          </div>
          <div class="col-md-5 bioH">
            <h1>Thanks for reaching out!</h1>
          </div>
          <div class="col-md-4">
            <p class="fullLucy"><img class="img-responsive" src="images/lucyFullHappyAF.svg" alt="Lucy in Uniform" /></p>
          </div>
        </div>
      </div>
      <div id="cloud1"></div>
      <div id="cloud2"></div>
      <div id="cloud3"></div>
      <div id="cloud4"></div>
      <div id="cloud5"></div>
      <div class="grass"></div>
    </div>

    <div class="container">
      <div class="row row bioBack">
        <div class="col-md-6">
          <img src="images/lucyFullWave.png">
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13223615.388689578!2d-101.35366482596825!3d35.98556089607101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880d92e81140f4a1%3A0xd29c007c8cba998!2sMartinton%2C+IL+60951!5e0!3m2!1sen!2sus!4v1496342485592" width="100%" height="395" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    <footer>
        <a href="https://twitter.com/carlakroll7" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/carla-kroll/" target="_blank"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
        <a href="http://codepen.io/ckroll17/pens/public/" target="_blank"><i class="fa fa-codepen fa-lg" aria-hidden="true"></i></a>
        <a href="https://github.com/ckroll17" target="_blank"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
    </footer>
    <script src="js/main.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>

