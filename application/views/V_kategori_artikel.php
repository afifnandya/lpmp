<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hidup Guruku</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/artikel.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/artikel_responsive.css">
</head>
<style>
.first-nav{
    /*background-image: url("<?php echo base_url()?>assets/img/headmid.jpg");*/
}
.zero-nav{
    /*background-image: url("<?php echo base_url()?>assets/img/headtop.jpg");*/
}
</style>
<body>
  <!-- nav -->
  <?php $this->load->view('navbar') ?>
  <!-- end nav -->
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-xs-12 col-md-10 detail-artikel-wrap">
                <ol class="breadcrumb crumb">
                    <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>
                    <li><a href="<?php echo site_url('artikel')."/".$this->uri->segment(2) ?>"><?php echo $this->uri->segment(2) ?></a></li>
                </ol>
                <p class="col-xs-12 guruku-judul-utama "><a href="<?php echo site_url($this->uri->uri_string())."/".$featured_judul_link ?>"><?php echo $featured_judul?></a></p>
                <p class="col-xs-12 guruku-tanggal "><?php echo $featured_sub_judul?></p>
                <div class="col-xs-12 col-md-7 guruku-berita-baru ">
                    <img src="<?php echo base_url().$featured_icon?>" class="img-responsive" alt="">
                </div>
                <div class="col-md-5 guruku-cuplikan-berita hidden-xs">
                    <div class="guruku-cuplikan"><?php echo $featured_isi;?></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 guruku-berita ">
                    <p>Daftar Berita</p>
                </div>
                <?php foreach($artikel as $key => $data){
                    if($key == 0){
                        continue;
                    }
                 ?>
                     <div class="col-xs-4 col-md-4 guruku-gambar-berita ">
                         <img src="<?php echo base_url().$data['icon']?>" class="img-responsive" alt="">
                     </div>
                     <div class="col-xs-8 col-md-8 guruku-cuplikan-berita2">
                         <p class="guruku-judul-berita"><a href="<?php echo site_url('artikel/').$this->uri->segment(2)."/".preg_replace('/[^a-zA-Z0-9]/',"-",$data['judul']) ?>"><?php echo $data['judul'] ?></a></p>
                         <p class="guruku-tanggal-berita"><?php echo $data['subjudul'] ?></p>
                         <div class="guruku-cuplikan hidden-xs"><?php echo $data['isi'] ?></div>
                     </div>
                    <div class="col-xs-12 guruku-garis "></div>
                <?php } ?>
                <!-- end content -->
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <!-- footer -->
    <?php $this->load->view('footer') ?>
    <!-- end footer -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/velocity.min.js"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
</body>

</html>
