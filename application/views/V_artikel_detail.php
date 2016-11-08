<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $artikel[0]['judul'] ?></title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/artikel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/artikel_responsive.css">
</head>
<body>
  <!-- nav -->
  <?php $this->load->view('komponen/navbar'); ?>
  <!-- end nav -->
  <!-- content -->
  <div class="container">
      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-col-xs-12 col-md-10 detail-artikel-wrap">
              <ol class="breadcrumb crumb">
                  <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>
                  <li><a href="<?php echo site_url('artikel')."/".$this->uri->segment(2) ?>"><?php echo $this->uri->segment(2); ?></a></li>
                  <li class="active"><?php echo $this->uri->segment(3) ?></li>
              </ol>
              <div class="col-xs-12 col-md-12 guruku-detail-gambar">
                  <p class="guruku-judul-utama"><a href=""><?php echo $artikel[0]['judul'] ?></a></p>
                  <p class="guruku-tanggal"><?php echo $artikel[0]['subjudul'] ?></p>
                  <div class="artikel-isi"><?php echo $artikel[0]['isi']?></div>
              </div>

          </div>
          <div class="col-md-1"></div>
      </div>
  </div>
  <!-- end content -->
  <!-- footer -->
  <?php $this->load->view('komponen/footer') ?>
  <!-- end footer -->
  <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/velocity.min.js"></script>
</body>

</html>
