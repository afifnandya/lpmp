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
    <div class="clearfix"></div>
    <!-- content -->
    <div class="content">
    <div class="container no-padding back-halaman-visi">
        <div class="col-md-1"></div>
        <div class="col-md-10 col-xs-12">
          <div class="back-judul">
            <span class="font-visimisi">Visi & Misi</span>
          </div>
          <div class="garis-visi"></div>
          <div class="back-visi">
            <div class="font-visi"><span>Visi</span></div>
            <div class="visi"><center>
              <span class="font-detail-visi">
              “TERBENTUKNYA INSAN SERTA EKOSISTEM PENDIDIKAN JAWA TIMUR YANG BERMUTU DAN BERKARAKTER DENGAN BERLANDASKAN GOTONG ROYONG”
              </span></center>
            </div>
            <div class="font-misi"><span>Misi</span></div>
            <div class="">
              <ol class="font-detail-misi">
                  <li>Mewujudkan lulusan yang bermutu nasional dan internasional</li>
                  <li>Mewujudkan Kurikulum yang bermutu nasional dan internasional</li>
                  <li>Mewujudkan Proses pembelajaran bermutu</li>
                  <li>Mewujudkan Proses penilaian hasil belajar bermutu</li>
                  <li>Mewujudkan Sarana dan prasarana yang memadai dan bermutu</li>
                  <li>Mewujudkan Pendidik dan Tenaga Kependidikan yang kuat dan bermutu (kompeten)</li>
                  <li>Mewujudkan Pembiayaan pendidikan yang memadai</li>
                  <li>Mewujudkan Tata Kelola pendidikan yang kuat dan bermutu</li>
                  <li>Mewujudkan pelaku pendidikan yang kuat</li>
              </ol>
            </div>
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
