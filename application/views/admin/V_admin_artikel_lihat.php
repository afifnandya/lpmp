<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin LPMP | Artikel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/AdminLTE.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dataurl.css')?>">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/hidup_guruku.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>
    <script src='<?php echo base_url().'assets/tinymce/tinymce.min.js'?>'></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="container-fluid" style="padding:0">
      <!--header-->
      <?php $this->load->view("admin/V_admin_header") ?>
      <!--end header-->
      <!-- Left side -->
      <?php $this->load->view("admin/V_admin_left-side") ?>
      <!--end left side-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="">
          <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <div class="artikel-list">
                    <div class="artikel-list-header">
                        <p class="guruku-judul-utama"><a href=""><?php echo $artikel[0]['judul'] ?></a></p>
                    </div>
                    <div class="artikel-list-body">
                        <p class="guruku-tanggal"><?php echo $artikel[0]['subjudul'] ?></p>
                        <img src="<?php echo base_url().$artikel[0]['icon'] ?>" class="img-responsive" alt="">
                        <div class="artikel-isi"><?php echo $artikel[0]['isi']?></div>
                        <p class="text-right">
                            <a href="<?php echo site_url('admin/artikel/edit/').$artikel[0]['uuid'] ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Artikel</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-1"></div>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/style-input-file.js')?>"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
    });
    </script>
    <script>
    $("li.left-link").click(function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });
    $('#artikel-collapse').on('show.bs.collapse',function(){
        $(".left-link i.fa-angle-down").addClass("secondmenu-active");
    });
    $('#artikel-collapse').on('hide.bs.collapse',function(){
        $(".left-link i.fa-angle-down").removeClass("secondmenu-active");
    });
    var uri1 = "<?php $uri = explode("/",uri_string());echo $uri['1'];?>";
    var uri2 = "<?php $uri = explode("/",uri_string());echo $uri['2'];?>";
    $(".left-link").each(function(){
        if($(this).text().toUpperCase() == uri1.toUpperCase()){
            var menu_collpase = "#"+uri1+"-collapse";
            $(menu_collpase).addClass("in");
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        }
    });
    $(".left-link-2").each(function(){
        if($(this).text().toUpperCase() == uri2.toUpperCase()){
            $(this).addClass("active2");
        }
    });
    </script>
  </body>
</html>
