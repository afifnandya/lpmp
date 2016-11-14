<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin LPMP | Header Image</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/icon-lpmp.jpg" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/AdminLTE.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dataurl.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/cropper.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/photoswipe-skin/default-skin.css">
    <script type="text/javascript" src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="container-fluid" style="padding:0">
        <!--header-->
        <?php $this->load->view("admin/komponen/header") ?>
        <!-- Left side -->
        <?php $this->load->view("admin/komponen/left_side") ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="">
          <div class="row">
            <div class="col-xs-12" style="padding-left:25px;">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <div class="control-header">
                        <div class="container-fluid no-padding">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-12 no-padding" style="background-color:white;margin-top:20px;"><span style="margin:10px">Gallery</span></div>
                            <div class="col-xs-1"></div>
                        </div>
                    </div>
                    <div class="control-body">
                        <div class="container-fluid no-padding" id="slider">
                            <div class="gallery-box col-xs-12">
                                <div class="col-xs-6 no-padding">
                                    <div class="gallery-slider">
                                        <?php
                                            foreach ($gallery as $data) {
                                        ?>
                                            <div class="gallery-wrap">
                                                <img src="<?php echo $data['gambar'] ?>" alt="Gallery LPMP" class="img-responsive gallery-item">
                                                <a href="<?php echo $data['gambar'] ?>" data-width="<?php echo $data['width'] ?>" data-length="<?php echo $data['height'] ?>" data-title="<?php echo $data['keterangan'] ?>" data-index="<?php echo $data['urutan'] ?>" class="gallery-click">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </div>
                                        <?php  }?>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="media-text media-text-slider">
                                        <?php foreach($gallery as $data){ ?>
                                            <p><?php echo $data['keterangan'] ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="slider-custom">
                            <div class="col-xs-12">
                                <div class="panel-group" id="accordion">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <h4 class="panel-title">Tambah Foto Gallery</h4>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body">
                                          <div class="col-xs-4 left-list-body">
                                              <div>
                                                  <div class="artikel-img-preview-wrap">
                                                      <img src="<?php echo base_url('assets/img/artikel/placeholder.png')?>" class="img-responsive" id="imgPreview">
                                                      <div class="artikel-img-preview">
                                                          <span class="article-btn-wrap">
                                                              <button class="icon-article-btn btn btn-info"><i class="fa fa-upload" aria-hidden="true"></i>Gambar</button>
                                                              <button class="icon-article-btn btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Hapus</button>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- untuk submit gambar icon -->
                                              <form action="" method="post" id="gambar-gallery" enctype="multipart/form-data">
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
                                          <form action="" method="post" id="form-gallery" enctype="multipart/form-data">
                                              <div class="col-xs-8 right-list-body">
                                                  <label for="keterangan-gambar">Keterangan</label>
                                                  <textarea class="form-control" id="keterangan-gambar" rows="7" required name="keterangan"></textarea>
                                              </div>
                                              <div id="submitWrap">
                                                  <input type="submit" class="submitButton" id="submitArtikel" value="Simpan">
                                              </div>
                                          </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          <h4 class="panel-title">Edit Header</h4>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                          <div class="slider-option">
                                              <ul id="urutan-item">
                                                  <?php foreach($gallery as $data){ ?>
                                                  <li class="item-drag" data-id="<?php echo $data['id']?>">
                                                      <img src="<?php echo $data['gambar'] ?>" class="img-responsive">
                                                      <a href="" class="delete" data-id="<?php echo $data['id']?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                      <div class="item-drag-caption"></div>
                                                  </li>
                                                  <?php } ?>
                                              </ul>
                                          </div>
                                          <div id="submitWrap">
                                              <input type="submit" class="submitButton" id="submitUrutan" value="Simpan">
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1"></div>
            </div>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <!-- modal crop -->
    <!-- Modal -->
    <?php $this->load->view('admin/komponen/modal_crop'); ?>
    <!-- PhotoSwipe -->
    <?php $this->load->view('komponen/photoswipe'); ?>
    <!-- ajax loader -->
    <?php $this->load->view('admin/komponen/ajax_loader') ?>
    <!--Library JS -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/velocity.min.js')?>"></script>
    <script src="<?php echo base_url()?>assets/slick/slick.min.js"></script>
    <script src="<?php echo base_url('assets/js/cropper.min.js')?>"></script>
    <script src="<?php echo base_url()?>assets/js/Sortable.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/photoswipe.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/photoswipe-ui-default.min.js"></script>
    <!--created JS -->
    <script src="<?php echo base_url('assets/js/style-input-file.js')?>"></script>
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
        $("#gambar-gallery").submit(function(e){
            var image = $('#imgReadyCrop');
            var cropBoxData;
            var canvasData;
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/gambar/gallery')?>',
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
                        keyboard : false,
                    });
                    $('#myModal').on('shown.bs.modal', function () {
                    image.cropper({
                      autoCropArea: 0.7,
                      aspectRatio : 4/3,
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
        $("#gambar-gallery").find('input[type=submit]').click();
    });
    //Submit form dan upload gambar hasil crop ke server (user memilih tidak ngeCrop)
    $("#formCropGambar").submit(function(e){
        e.preventDefault();
        var cropcanvas = $('#imgReadyCrop').cropper('getCroppedCanvas');
        var croppng = cropcanvas.toDataURL("image/jpeg",0.9);
        var imageName = $('#imgReadyCrop').attr('src').split(/(\\|\/)/g).pop();
          $.ajax('<?php echo site_url('admin/gambarCrop/gallery')?>', {
            method: "POST",
            data: {'pngimageData': croppng,'filename': imageName},
            beforeSend: function() {
                $('.ajaxLoader').show();
            },
            complete: function(){
                $('.ajaxLoader').hide();
            },
            success: function(respon) {
                $('#imgPreview').attr('src',respon);
                $('#myModal').modal('hide');
                console.log(respon);
            //   alert(e);
            },
            error: function (respon) {
              alert('Error'+respon);
            }
          });
    });
    </script>
    <script>
    var items = [];
    $(".gallery-click").each(function(){
            var $href   = $(this).attr('href');
            var $width  = $(this).data('width');
            var $height = $(this).data('length');
            var $title  = $(this).data('title');
            var item = {
                    src : $href,
                    w   : $width,
                    h   : $height,
                    title: $title
            }
            items.push(item);
    });
    var photoSwipe = $('.pswp')[0];
    $(".gallery-click").on('click',function(e){
        e.preventDefault();
        var index = $(this).data('index');
        var option = {
            index : index,
            bgOpacity: 0.7,
            showHideOpacity: true,
            getThumbBoundsFn: function(index) {
                // find thumbnail element
                var thumbnail = $(".gallery-slider")[0];
                // get window scroll Y
                var pageYScroll = window.pageYOffset || document.documentElement.scrollTop;
                // optionally get horizontal scroll
                // get position of element relative to viewport
                var rect = thumbnail.getBoundingClientRect();
                // w = width
                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                // Good guide on how to get element coordinates:
                // http://javascript.info/tutorial/coordinates
            }
        }
        var gallery = new PhotoSwipe( photoSwipe, PhotoSwipeUI_Default, items, option);
        gallery.init();
    });
    </script>
    <script>
    $('.gallery-slider').slick({
        dots : true,
        infinite: true,
        arrows : true,
        asNavFor : '.media-text-slider'
    });
    $('.media-text-slider').slick({
        dots : false,
        infinite: true,
        arrows : false,
        fade : true,
        asNavFor : '.gallery-slider'
    });
    </script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
        $("#form-gallery").submit(function(event){
            event.preventDefault();
            var formData = new FormData(this);
            var gambar = $('#imgPreview').attr('src');
            formData.append("gambar",gambar);
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url('admin/gallery_submit')?>',
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
                        swal('Berhasil Menambahkan Foto Gallery','','success').then(function() {
                            window.location='<?php echo site_url('admin/gallery') ?>';
                        });
                    },
                    error : function(respon){
                        alert("gagal"+respon);
                    }
                });
        });
        $("#submitUrutan").click(function(e){
            var urutan = [];
            $(".item-drag").each(function(index){
                urutan[index] = $(this).attr("data-id");
            });
            var json = JSON.stringify(urutan);
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/gallery_urutan')?>',
                data : {'urutan' : json},
                beforeSend: function() {
                    $('.ajaxLoader').show();
                },
                complete: function(){
                    $('.ajaxLoader').hide();
                },
                success : function(respon){
                    swal('Berhasil Merubah Urutan Gallery','','success').then(function() {
                        window.location='<?php echo site_url('admin/gallery') ?>';
                    });
                }
            });
        });
        $(".item-drag a.delete").click(function(e){
            e.preventDefault();
            var id_gallery = $(this).attr('data-id');
            var parent = $(this).parent();
            swal({
                title : 'Hapus Header ? ',
                type :'warning',
                showCloseButton: true,
                showCancelButton: true,
            }).then(function() {
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url('admin/gallery_delete')?>',
                    data : {'id_gallery' : id_gallery},
                    beforeSend: function() {
                        $('.ajaxLoader').show();
                    },
                    complete: function(){
                        $('.ajaxLoader').hide();
                    },
                    success : function(respon){
                        parent.velocity("fadeOut", { delay: 500, duration: 500 });
                        parent.remove();
                        swal('Berhasil Menghapus foto gallery','','success').then(function() {
                            $("#submitUrutan").click();
                            // window.location='<?php echo site_url('admin/header') ?>';
                        });
                    }
                });
            });
        });
    });
    </script>
    <script>
    var urutan_item = document.getElementById('urutan-item');
    $(".item-drag-caption").each(function(index){
        $(this).text("Urutan "+index);
    });
        Sortable.create(urutan_item,{
            draggable: ".item-drag",
            animation: 150,
            onEnd: function(evt){
                $(".item-drag-caption").each(function(index){
                    $(this).text("Urutan "+index);
                });
            }
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
    </script>
  </body>
</html>
