<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no;">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LPMP</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/icon-lpmp.jpg" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- nav -->
    <?php $this->load->view('komponen/navbar') ?>
    <!-- end nav -->
    <div class="clearfix"></div>
    <!-- content -->
    <div class="content">
    <div class="container no-padding back-halaman-struktur">
        <div class="col-md-1"></div>
        <div class="col-md-10 col-xs-12">
            <div class="back-judul">
              <span class="font-struktur">Struktur organisasi</span>
            </div>
            <div class="garis-struktur"></div>
            <div class="back-struktur">
              <center>
              <img src="<?php echo base_url('assets/img/struktur organisasi.jpg') ?>" class="img-responsive">
              </center>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
    <!-- footer -->
    <?php $this->load->view('komponen/footer') ?>
    <!-- end footer -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
