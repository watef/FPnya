<?php
    if (!isset($_SESSION['id'])) {
    redirect(base_url("/login"));
}
 ?>
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <!--link href="<?php echo base_url(); ?>assets/admin/css/sb-admin.css" rel="stylesheet"-->


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
              <!--li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/services">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/doctors">Tenaga Medis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/galery">Galery</a>
              </li-->
              <!--li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/antri">Daftar Antrian</a>
              </li-->
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Welcome/index">Logout</a>
              </li>
              <!--li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>Welcome/doctors" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Antrian</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="<?php echo base_url(); ?>Welcome/antri">Daftar Antrian</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>Welcome/index">Logout</a-->
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- END header -->



    <!-- END slider -->


    <div class="card mb-3">

        <div class="card-header" style="text-align: center; font-size:40px; font-weight:bold">Daftar Antrian</div>
        <br>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>No Hp</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Keluhan</th>
                  <th>Action</th>
                </tr>
              </thead>
            <tbody>

              <?php
              $no = 1;
              foreach ($klinik as $klinik)
       { ?>
         <tr>
         <td><?php echo $no++ ?></td>
         <td><?php echo $klinik ['nama']; ?></td>
         <td><?php echo $klinik ['umur']; ?></td>
         <td><?php echo $klinik ['nohp']; ?></td>
         <td><?php echo $klinik ['date']; ?></td>
         <td><?php echo $klinik ['time']; ?></td>
         <td><?php echo $klinik ['keluhan']; ?></td>
         <td><a class="btn btn-primary" href="<?php echo base_url().'Welcome/edit/'.$klinik['id']?>">Ubah</a>
            <a class="btn btn" style="background:red; color:white" href="Welcome/delete/<?php echo $klinik['id']?>" >Delete </a></td>
              </td>
      </tr>
              <?php }?>

              </tbody>
          </table>

    <br>

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
            <form action="<?php echo base_url(). 'Welcome/added'; ?>" method="post">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Nama</label>
                <input type="text" name="nama" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_name" class="text-black">Umur</label>
                <input type="text" name="umur" class="form-control" id="appointment_age">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Kontak (nomor yang bisa dihubungi)</label>
                <input type="text" name="nohp" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" name="date" class="form-control" id="appointment_date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" name="time" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label for="appointment_message" class="text-black">Keluhan</label>
                <textarea name="keluhan" id="appointment_message" class="form-control" cols="10" rows="5"></textarea>
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

    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Page level plugin JavaScript-->
   <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.js"></script>
   <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin.min.js"></script>
   <!-- Custom scripts for this page-->
   <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-datatables.min.js"></script>
  </body>
</html>
