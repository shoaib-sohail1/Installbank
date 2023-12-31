<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1; mode=block');
include(realpath(__DIR__).'/config.cfg.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pay Per Install Network - Install Bank - High Rates</title>
  <meta name="descriptison" content="Pay per install network - Monetize your site with Install bank. We are paying high PPI rates upto $3 per install. Clean installer and daily - weekly payments available.">
  <meta name="keywords" content="pay per install, ppi, pay per install network, ppi network, high rate">

  <link href="favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h2 class="logo mr-auto"><a href="<?php echo HOME_URI.'/';?>"><img src="assets/img/logo.png" alt="Install Bank Logo" class="ib-logo img-fluid">Install Bank</a></h2>
      
      <nav class="nav-menu d-none d-lg-block">
        <ul class="main-menu">
          <li class="active"><a href="<?php echo HOME_URI.'/';?>">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#faq">Faq'<span class="no-up">s</span></a></li>
          <li><a href="#contact">Contact</a></li>
		  <li><a href="<?php echo HOME_URI.'/auth/';?>">Login</a></li>
		  <li><a href="<?php echo HOME_URI.'/auth/register.php';?>">Publisher Signup</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      
      <h1>Install Bank - Pay Per Install</h1>
      <h2>Earn up to $3 per install by monetizing your website with downloads.</h2>
      <a href="<?php echo HOME_URI.'/auth/';?>" class="btn-login btn-get-started inline">Login</a>
	  <a href="<?php echo HOME_URI.'/auth/register.php';?>" class="btn-signup btn-get-started scrollto">Signup</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>          
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-dollar"></i></div>
              <h4 class="title"><a href="javascript:void(0);">High Rates</a></h4>
              <p class="description">We pay highest rates for worldwide traffic in the pay per install market.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-bar-chart"></i></div>
              <h4 class="title"><a href="javascript:void(0);">Custom Installer</a></h4>
              <p class="description">Publisher will always have the highest conversion rates through our custom installer.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4 class="title"><a href="javascript:void(0);">Safety &amp; Security</a></h4>
              <p class="description">Our installer doesn't run any risk of publisher's site being punished by search networks or browsers.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-face"></i></div>
              <h4 class="title"><a href="">Clean</a></h4>
              <p class="description">The end user receives the ".exe" file without receiving any alert from the browser.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
	
	
	 <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Are you ready?</h3>
          <p>By using our pay per install solutions, start monetizing your traffic now.</p>
          <a class="cta-btn" href="<?php echo HOME_URI.'/auth/register.php';?>">Get Started</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">What is install bank? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                Install bank is a rising ad network in the pay per install industry. We ensured that our publishers must be paid for each install generated by his/her traffic.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How to start? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                You can simply register your profile on our network by using signup button at the top menu.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Is there any fee to signup as a publisher? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                No, you don't have to pay, its free.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">What is the payment cycle? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                We pay Net 0, Which means we pay our publisher at the end of every month, no delays. However we can also arrange weekly OR daily payments on publisher's request.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">What is the minimum amount for payout? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
			  The minimum amount is $50. It is also possible that publisher can request the payment at any time.
			</p>
            </div>
          </li>
		  
		  <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">What are the payment methods available? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                All major payment gateways are supported like Wire Transfer, Paypal, Payoneer, WebMoney, BTC and LTC.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq7" class="collapsed">I still have the question to ask? <i class="icofont-simple-up"></i></a>
            <div id="faq7" class="collapse" data-parent=".faq-list">
              <p>
                If you have any further question please contant us by using below form, for quick response you are advised to message us on skype. The skype ID is also mentioned below.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>          
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-skype"></i>
                <h4>Authorized  Manager:</h4>
                <p>Skype : <a href="skype:live:.cid.d7243bc7c0fcea1f?chat">Anton-InstallBank</a></p>
				<p>Telegram : anton_ib</p>
				<p>info@installbank.com<br>
				anton.installbank@gmail.com
				</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@installbank.com<br>
				anton.installbank@gmail.com
				</p>
              </div>
			  
			<div class="email">
                <i class="icofont-user-male"></i>
                <p>Affiliate Manager: Rana Ali-InstallBank</p>
				<p>Skype ID: alirana1232</p>
              </div>
            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form role="form" action="<?php echo HOME_URI.'/front-process/';?>" method="POST" class="php-email-form">
              <input type="hidden" name="action" id="action" value="save_new_email">
			  <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
			  <div class="form-group text-center" style="padding-left: 52px;">
					<div class="text-center">
						<div class="g-recaptcha" data-sitekey="6LeYPj4UAAAAAJ4VwHY_dFDlNnmfX-ga1hWNYr5g"></div>
					</div>
					<div class="clearfix"></div>
				</div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
	
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Install Bank</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="footer-links text-center text-md-right pt-3 pt-md-0">
        <a href="<?php echo HOME_URI.'/';?>">Home</a>
        <a href="#services">Services</a>
        <a href="#faq">Faq'<span class="no-up">s</span></a>
        <a href="#contact">Contact</a>
		<a href="<?php echo HOME_URI.'/privacy-policy/';?>">Privacy Policy</a>
		<a href="<?php echo HOME_URI.'/terms/';?>">Terms</a>
        <a href="<?php echo HOME_URI.'/auth/';?>">Login</a>
		<a href="<?php echo HOME_URI.'/auth/register.php';?>">Signup</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>