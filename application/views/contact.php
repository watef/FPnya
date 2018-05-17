<!doctype html>
<html lang="en">
  <head>
    <title>Hendri Dental Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.timepicker.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  </head>
  <body>

    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="https://www.facebook.com/pages/Hendri-Dental-Clinic/495512443818844?ref=br_rs"><span class="fa fa-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/hendridentist/?hl=id"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Daftar Control</a></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url(); ?>index.php">Hendri Dental Clinic<!--span>+</span-->  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/index">Home</a>
              </li>
              <!--li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>Welcome/services" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">Institute</a>
                  <a class="dropdown-item" href="#">Departments</a>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>Welcome/services">Services</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>Welcome/doctors" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="doctors.html">Find Doctors</a>
                  <a class="dropdown-item" href="#">Practitioner</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/news">News</a>
              </li-->
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/services">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/doctors">Tenaga Medis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/galery">Galery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/about">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url(); ?>Welcome/contact">Kontak</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>Welcome/doctors" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Antrian</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="doctors.html">Daftar Antrian</a>
                  <a class="dropdown-item" href="#">Admin</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url(); ?>assets/img/slider-2.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Contact Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 element-animate">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control form-control-lg" id="lname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
                </div>

              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">

            <h5 class="text-uppercase mb-3">Address</h5>
            <p class="mb-5">98 West 21th Street, <br> Suite 721 <br> New York NY 10016</p>

            <h5 class="text-uppercase mb-3">Email Us At</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a> <br> <a href="mailto:customer@yourdomain.com">customer@yourdomain.com</a></p>

            <h5 class="text-uppercase mb-3">Call Us</h5>
            <p class="mb-5">Phone: (+1) 435 3533 <br> Mobile: (+1) 435 3533 <br> Fax: (+1) 435 3534</p>


          </div>
        </div>
      </div>
    </section>


    <a href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
      <span class="sub-heading">Siap untuk kesehatan gigi dan mulut?</span>
      <span class="heading">Daftar untuk Control</span>
    </a>
    <!-- END cta-link -->

    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-3 mb-5">
            <h3><a href="Welcome/services" style="color:white">Layanan</a></h3>
            <ul class="footer-link list-unstyled">
              <li><p>Perawatan Gigi &amp; Mulut</p></li>
              <li><p>Konservasi Gigi</p></li>
              <li><p>Penyakit Umum</p></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3><a href="Welcome/services" style="color:white">Tentang</a></h3>
            <ul class="footer-link list-unstyled">
              <li><p>Tentang Klinik</p></li>
              <li><p>Kerjasama Klinik</p></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Tempat</h3>
            <p class="mb-5">Jalan Trunujoyo, Sampang, Jawa Timur (Dekat Polsek Kota Sampang)</p>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Email</h3>
            <p class="mb-5"><!--a href="mailto:lulukwatef76@gmail.com.com"-->hendridentalclinic@gmail.com<!--/a--></p>

            <h3>Telepon</h3>
            <p>087850112825</p>
          </div>

        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p>&copy; 2018<a href="https://colorlib.com/">Colorlib</a></p>
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->


    <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Daftar untuk Periksa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Nama</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_name" class="text-black">Umur</label>
                <input type="text" class="form-control" id="appointment_age">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Kontak (nomor yang bisa dihubungi)</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label for="appointment_message" class="text-black">Keluhan</label>
                <textarea name="" id="appointment_message" class="form-control" cols="10" rows="5"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Kirim" class="btn btn-primary">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  </body>
  </html>
