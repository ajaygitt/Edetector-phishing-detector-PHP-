<!DOCTYPE html>
-->
<html lang="">

<head>
  <title>edetector</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="fl_right">
    <ul>
      <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </div>
  <!-- ################################################################################################ -->
  </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Welcome to Admin page</a></h1>
      </div>
      <div id="quickinfo" class="fl_right">
        <ul class="nospace inline">
          <li><strong>CONTACT US:</strong><br>
            +91 8156803272</li>
        </ul>
      </div> <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="adminHome.php">Home</a></li>
        <li><a href="?viewusers=1">VIEW USERS</a>

        </li>
        <li><a href="#">ADD WEBSITE TO BLACKLIST</a>
        </li>

        </li>
        <li><a href="search.php">SEARCH DETAILS</a></li>
        <li><a href="index.php">LOGOUT</a></li>
        <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.jpg');">
    <article id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <h3 class="heading">BE SAFE FROM MALICIOUS PHISHING WEBSITES </h3>
      <p>Take a safe e banking transaction.</p>
      <h3 align="center"><u>our services</u></h3>
      <ul type="circle">
        <li>we ensure safety of customers who makes e payment</li>
      </ul>
      <ul type="circle">
        <li>we detect malicious phishing websites and user can
          make purchases online without any hesitation</li>
        <li>you can secure your transaction securely by our service</li>
      </ul>
      <!-- ################################################################################################ -->
    </article>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- CONTENT AREA -->
      <?php
      if (isset($_REQUEST['viewusers'])) {
        include('viewusers.php');
      }

      ?>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear">
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="heading">what is a phishing website..?</h6>
        <p>a e banking phishing website is a duplication of e bamking website by attackers or hackers it can may robb your money </p>

      </div>
      <div class="one_quarter">
        <h6 class="heading">CONTACT US:</h6>
        <nav>
          <ul class="nospace">
            <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Disclaimer</a></li>
          </ul>
        </nav>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">LAST UPDATED ON</h6>
        <article>
          <time class="font-xs" datetime="2019-12-24">Tuesday, 24<sup>th</sup> DECEMBER 2019</time>

      </div>
      <div class="one_quarter">
        <h6 class="heading">IMPLIMENTED BY</h6>
        <ul class="nospace linklist">
          <li>AJAY PRADEEP</li>
          <li>SUJITH CHANDREN</li>

        </ul>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">EDETECTOR.in</a></p>

    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>
}