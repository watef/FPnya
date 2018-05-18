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

      <h1 style="text-align:center">Edit Daftar Pasien</h1>

<div class="modal-body">
  <?php
  foreach ($klinik as $k) {
  ?>
  <form action="<?php echo base_url(). 'Welcome/update'; ?>" method="post">
    <div class="form-group" id="divCheckbox" style="visibility: hidden">
      <input type="text" name="id" value="<?php echo $k["id"]; ?>" class="form-control" id="appointment_name">
    </div>
    <div class="form-group">
      <label for="appointment_name" class="text-black">Nama</label>
      <input type="text" name="nama" value="<?php echo $k["nama"]; ?>" class="form-control" id="appointment_name">
    </div>
    <div class="form-group">
      <label for="appointment_name" class="text-black">Umur</label>
      <input type="text" name="umur" value="<?php echo $k["umur"]; ?>" class="form-control" class="form-control" id="appointment_age">
    </div>
    <div class="form-group">
      <label for="appointment_email" class="text-black">Kontak (nomor yang bisa dihubungi)</label>
      <input type="text" name="nohp" value="<?php echo $k["nohp"]; ?>" class="form-control" class="form-control" id="appointment_email">
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="appointment_date" class="text-black">Date</label>
          <input type="text" name="date" value="<?php echo $k["date"]; ?>" class="form-control" class="form-control" id="appointment_date">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="appointment_time" class="text-black">Time</label>
          <input type="text" name="time" value="<?php echo $k["time"]; ?>" class="form-control" class="form-control" id="appointment_time">
        </div>
      </div>
    </div>


    <div class="form-group">
      <label for="appointment_message" class="text-black">Keluhan</label>
      <textarea name="keluhan" class="form-control" id="appointment_message" class="form-control" cols="10" rows="5"><?php echo $k["keluhan"]; ?></textarea>
    </div>
    <div class="form-group" style="text-align:center">
      <a class="btn btn-primary" href="<?php echo base_url(); ?>Welcome/index">Cancel</a>
      <input type="submit" value="Kirim" class="btn btn-primary">
    </div>
  </form>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<?php } ?>
</body>
