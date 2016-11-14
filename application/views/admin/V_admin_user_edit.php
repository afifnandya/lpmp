<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin LPMP | User</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/icon-lpmp.jpg" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/AdminLTE.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dataurl.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/cropper.min.css')?>">
    <script type="text/javascript" src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="container-fluid" style="padding:0">
        <!--header-->
        <?php $this->load->view("admin/komponen/header") ?>
        <!-- Left side -->
        <?php $this->load->view("admin/komponen/left_side") ?>
      <!-- Content Wrapper-->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="">
          <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <div class="artikel-list col-xs-12">
                    <div class="artikel-list-header col-xs-12 no-padding">
                        Edit User <?php echo $this->uri->segment(4)?>
                    </div>
                    <div class="artikel-list-body col-xs-12 no-padding">
                        <div class="col-xs-4 left-list-body">
                            <div>
                                <div class="artikel-img-preview-wrap">
                                  <img src="<?php echo base_url('').$user[0]['foto'] ?>" class="img-responsive" id="imgPreview">
                                  <div class="artikel-img-preview">
                                      <span class="article-btn-wrap">
                                          <button class="icon-article-btn btn btn-info"><i class="fa fa-upload" aria-hidden="true"></i>Pilih Foto</button>
                                          <button class="icon-article-btn btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Hapus</button>
                                      </span>
                                  </div>
                                </div>
                            </div>
                            <!-- untuk submit gambar icon -->
                            <form action="" method="post" id="foto-admin" enctype="multipart/form-data">
                                <div class="input-group hidden">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Icon</span>
                                     </span>
                                    <input type="file" name="icon" id="file" class="input-right" required>
                                    <label for="file" class="input-label-file form-control"><span><i class="fa fa-file-image-o" aria-hidden="true"></i>Choose a file&hellip;</span></label>
                                </div>
                                <input type="submit" class="hidden">
                            </form>
                        </div>
                        <div class="col-xs-8 right-list-body">
                            <form action="" method="post" id="form-admin-edit" enctype="multipart/form-data">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Username</span>
                                      </span>
                                    <input type="text" class="form-control" name="username" value="<?php echo $user[0]['username'] ?>" readonly>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Password</span>
                                     </span>
                                    <input type="text" class="form-control" name="password" value="<?php echo $user[0]['password'] ?>" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Nama</span>
                                      </span>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $user[0]['nama'] ?>" required>
                                </div>
                                <?php if($this->session->userdata('admin')[0]['status'] == 1){ ?>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Status</span>
                                     </span>
                                     <select name="status" class="form-control" required>
                                         <option value="0">Admin</option>
                                         <option value="1">Super Admin</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Aktif</span>
                                     </span>
                                     <select name="aktif" class="form-control" required>
                                         <option value="0">Tidak Aktif</option>
                                         <option value="1">Aktif</option>
                                    </select>
                                </div>
                                <?php }else{ ?>
                                <input type="hidden" name="status" class="input-right" value="<?php echo $user[0]['status'] ?>">
                                <input type="hidden" name="aktif" class="input-right" value="<?php echo $user[0]['aktif'] ?>">
                                <?php } ?>
                                <div id="submitWrap">
                                    <input type="submit" class="submitButton" id="submitUser" value="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-1"></div>
          </div>
        </section>
      </div>
    </div>
    <!-- Modal -->
    <?php $this->load->view('admin/komponen/modal_crop') ?>
    <!-- ajax loader -->
    <?php $this->load->view('admin/komponen/ajax_loader') ?>
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/style-input-file.js')?>"></script>
    <script src="<?php echo base_url('assets/js/cropper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
    <script>
    $('.btn-info').click(function(e){
        $('#file').click();
    });
    $('.btn-danger').click(function(e){
        var defaultImage = '<?php echo base_url('assets/img/artikel/placeholder.png')?>';
        $('#imgPreview').attr('src',defaultImage);
    });
    $('#file').change(function(){
        // Fungsi Ajax untuk upload gambar ke server dan menampilkan modal untuk crop gambar
        $("#foto-admin").submit(function(e){
            var image = $('#imgReadyCrop');
            var cropBoxData;
            var canvasData;
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/gambar/admin')?>',
                data :  new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.ajaxLoader').show();
                },
                complete: function(){
                    $('.ajaxLoader').hide();
                },
                success : function(respon){
                    var gambar = '<?php echo base_url(); ?>';
                    image.attr('src',gambar+respon);
                    $('#imgPreview').attr('src',gambar+respon);
                    $('#myModal').modal({
                        backdrop : 'static',
                        keyboard : true,
                    });
                    $('#myModal').on('shown.bs.modal', function () {
                    image.cropper({
                      autoCropArea: 0.7,
                      aspectRatio : 1 / 1,
                      built: function () {
                        image.cropper('setCanvasData', canvasData);
                        image.cropper('setCropBoxData', cropBoxData);
                      }
                    });
                  }).on('hidden.bs.modal', function () {
                    cropBoxData = image.cropper('getCropBoxData');
                    canvasData = image.cropper('getCanvasData');
                    image.cropper('destroy');
                  });
                }
            });
        });
        //Submit form dan upload gambar ukuran asli ke server (user memilih tidak ngeCrop)
        $("#foto-admin").find('input[type=submit]').click();
    });
    //Submit form dan upload gambar hasil crop ke server (user memilih tidak ngeCrop)
    $("#formCropGambar").submit(function(e){
        e.preventDefault();
        var cropcanvas = $('#imgReadyCrop').cropper('getCroppedCanvas');
        var croppng = cropcanvas.toDataURL("image/jpeg",0.9);
        var imageName = $('#imgReadyCrop').attr('src').split(/(\\|\/)/g).pop();
          $.ajax('<?php echo site_url('admin/gambarCrop/artikel')?>', {
            method: "POST",
            data: {'pngimageData': croppng,'filename': imageName},
            beforeSend: function() {
                $('.ajaxLoader').show();
            },
            complete: function(){
                $('.ajaxLoader').hide();
            },
            success: function(e) {
                $('#imgPreview').attr('src',e);
                $('#myModal').modal('hide');
                console.log(e);
            //   alert(e);
            },
            error: function () {
              alert('Error'+e);
            }
          });
    });
    </script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
        $("#form-admin-edit").submit(function(event){
            event.preventDefault();
            var formData = new FormData(this);
            var foto = $('#imgPreview').attr('src');
            formData.append("foto",foto);
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/user_edit')?>',
                data : formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.ajaxLoader').show();
                },
                complete: function(){
                    $('.ajaxLoader').hide();
                },
                success : function(respon){
                    swal('Berhasil Megedit User','','success').then(function() {
                        window.location='<?php echo site_url('admin/user') ?>';
                    });
                }
            });
        });
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
