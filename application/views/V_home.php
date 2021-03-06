<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LPMP</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/icon-lpmp.jpg" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/photoswipe-skin/default-skin.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- nav -->
    <?php $this->load->view('komponen/navbar') ?>
    <!-- <div class="clearfix"></div> -->
    <!-- content -->
    <div class="col-xs-12 separator"></div>
    <div class="content">
    <div class="container-fluid no-padding">
        <div class="col-xs-12 no-padding" id="head-line">
            <div class="col-md-1"></div>
            <div class="col-md-10 col-xs-12">
                <div class="col-xs-12 no-padding">
                    <div class="artikel-header">
                        <span class="artikel-header-judul">Headline</span>
                        <div class="artikel-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="col-xs-12 col-md-8 head-line-hot no-padding headline-slider-for">
                            <?php foreach ($artikel_headline as $data) {
                            ?>
                            <a href="<?php echo site_url('artikel/headline')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$data['judul']) ?>" class="artikel-link headline-hot-link">
                                <img src="<?php echo base_url().$data['icon']?>" alt="" class="img-responsive">
                                <div class="head-line-hot-text hvr-sweep-to-right">
                                    <span class="judul"><?php echo $data['judul'] ?></span><br>
                                    <span class="sub-judul"><?php echo $data['subjudul'] ?></span>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="col-xs-12 col-md-4 head-line-side no-padding-right headline-slider-nav">
                            <?php foreach ($artikel_headline as $key=>$data) {
                            ?>
                            <a href="#" class="artikel-link <?php if($key==0){echo "artikel-active"; } ?>">
                                <div class="col-xs-12 head-line-side-item no-padding">
                                    <div class="col-xs-5 no-padding-left">
                                        <img src="<?php echo base_url().$data['icon']?>" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-7 no-padding">
                                        <div class="head-line-side-item-title artikel-title artikel-title"><?php echo $data['judul'] ?></div>
                                        <div class="head-line-side-item-sub-title"><?php echo $data['subjudul'] ?></div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <di class="col-md-1"></di>
        </div>
        <div class="col-xs-12 separator"></div>
        <div class="col-xs-12 no-padding" id="layanan">
            <div class="col-md-1"></div>
            <div class="col-xs-12 col-md-10 no-padding-repsonsive">
                <div class="col-xs-12 col-md-12 no-padding">
                    <div class="artikel-header pengetahuan-header">
                        <span class="artikel-header-judul">Layanan</span>
                        <div class="artikel-header-underline pengetahuan-header-underline"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
            <div class="col-md-1"></div>
            <div class="col-xs-12 col-md-10 no-padding-repsonsive">
                <div class="layanan-slider">
                    <div class="col-xs-12 col-md-3 no-padding layanan-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/backpack.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 no-padding layanan-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/bookshelf.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 no-padding layanan-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/pie-chart.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 no-padding layanan-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/speech-bubble.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="col-xs-12 separator"></div>
        <div class="col-xs-12 no-padding" id="2-kolom">
            <div class="col-md-1 no-padding"></div>
            <div class="col-xs-12 col-md-6 no-padding-responsive" id="jembatan-pengetahuan">
                <div class="artikel-header pengetahuan-header">
                    <span class="artikel-header-judul">Jembatan Pengetahuan</span>
                    <div class="artikel-header-underline pengetahuan-header-underline"></div>
                </div>
                <div class="artikel-body">
                    <?php foreach ($artikel_jembatan_pengetahuan as $data) {
                    ?>
                    <a href="<?php echo site_url('artikel/jembatan-pengetahuan')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$data['judul']) ?>" class="artikel-link">
                        <div class="col-xs-12 jembatan-pengetahuan-item no-padding">
                            <div class="col-xs-12 col-md-4 no-padding-left">
                                <img src="<?php echo base_url().$data['icon']?>" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-md-8 no-padding">
                                <div class="jembatan-pengetahuan-item-title artikel-title"><?php echo $data['judul'] ?></div>
                                <div class="jembatan-pengetahuan-item-sub-title"><?php echo $data['subjudul'] ?></div>
                                <div class="jembatan-pengetahuan-item-text">
                                    <?php
                                    $string = strip_tags($data['isi']);
                                    if (strlen($string) > 200) {
                                        $stringCut = substr($string, 0, 200);
                                        $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                        echo $string." ... ";
                                    }
                                    else{
                                        echo $string;
                                    }
                                     ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 no-padding-responsive" id="jurnal-inspirasi">
                <div class="artikel-header">
                    <div class="artikel-header buku-header">
                        <span class="artikel-header-judul">Jurnal Inspirasi</span>
                        <div class="artikel-header-underline buku-header-underline"></div>
                    </div>
                </div>
                <div class="artikel-body">
                    <?php foreach ($artikel_jurnal_inspirasi as $data) {
                    ?>
                    <a href="<?php echo site_url('artikel/jurnal-inspirasi')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$data['judul']) ?>" class="artikel-link">
                        <div class="col-xs-12 jurnal-inspirasi-item no-padding">
                            <div class="col-xs-5 no-padding-left">
                                <img src="<?php echo base_url().$data['icon']?>" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-7 no-padding">
                                <div class="jurnal-inspirasi-item-title artikel-title"><?php echo $data['judul'] ?></div>
                                <div class="jurnal-inspirasi-item-sub-title"><?php echo $data['subjudul'] ?></div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-1 no-padding"></div>
        </div>
        <div class="col-xs-12 separator"></div>
        <div class="col-xs-12 no-padding" id="artikel">
            <div class="col-md-1 no-padding"></div>
            <div class="col-xs-12 col-md-10 no-padding-repsonsive">
                <div class="col-xs-12 col-md-4 no-padding-left artikel-wrap">
                    <div class="artikel-header inside-school-header">
                        <span class="artikel-header-judul">Inside School</span>
                        <div class="artikel-header-underline inside-school-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="artikel-hot">
                            <img src="<?php echo base_url().$artikel_inside_school[0]['icon'] ?>" alt="" class="img-responsive artikel-hot-img">
                            <a href="<?php echo site_url('artikel/inside-school')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$artikel_inside_school[0]['judul']) ?>" class="artikel-hot-caption-wrap">
                                <span class="artikel-hot-caption">
                                    <span class="artikel-hot-date"><?php echo date("d/m/Y", strtotime($artikel_inside_school[0]['datetime'])) ?></span><br>
                                    <?php echo $artikel_inside_school[0]['judul'] ?>
                                </span>
                            </a>
                        </div>
                        <div class="artikel-normal">
                            <ul>
                                <?php foreach($artikel_inside_school as $key=>$inside_school){
                                    if($key == 0){
                                        continue;
                                    }
                                 ?>
                                <li><a href="<?php echo site_url('artikel/inside-school')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$inside_school['judul']) ?>"><?php echo $inside_school['judul'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 no-padding-left artikel-wrap">
                    <div class="artikel-header kabar-sepekan-header">
                        <span class="artikel-header-judul">Kabar Sepekan</span>
                        <div class="artikel-header-underline kabar-sepekan-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="artikel-hot">
                            <img src="<?php echo base_url().$artikel_kabar_sepekan[0]['icon']?>" alt="" class="img-responsive artikel-hot-img">
                            <a href="<?php echo site_url('artikel/kabar-sepekan')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$artikel_kabar_sepekan[0]['judul']) ?>" class="artikel-hot-caption-wrap">
                                <span class="artikel-hot-caption">
                                    <span class="artikel-hot-date"><?php echo date("d/m/Y", strtotime($artikel_kabar_sepekan[0]['datetime'])) ?></span><br>
                                    <?php echo $artikel_kabar_sepekan[0]['judul'] ?>
                                </span>
                            </a>
                        </div>
                        <div class="artikel-normal">
                            <ul>
                                <?php foreach($artikel_kabar_sepekan as $key=>$kabar_sepekan){
                                    if($key == 0){
                                        continue;
                                    }
                                 ?>
                                <li><a href="<?php echo site_url('artikel/kabar-sepekan')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$kabar_sepekan['judul']) ?>"><?php echo $kabar_sepekan['judul'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 no-padding-left artikel-wrap">
                    <div class="artikel-header hidup-guruku-header">
                        <span class="artikel-header-judul">Hidup Guruku</span>
                        <div class="artikel-header-underline hidup-guruku-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="artikel-hot">
                            <img src="<?php echo base_url().$artikel_hidup_guruku[0]['icon']?>" alt="" class="img-responsive artikel-hot-img">
                            <a href="<?php echo site_url('artikel/hidup-guruku')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$artikel_hidup_guruku[0]['judul']) ?>" class="artikel-hot-caption-wrap">
                                <span class="artikel-hot-caption">
                                    <span class="artikel-hot-date"><?php echo date("d/m/Y", strtotime($artikel_hidup_guruku[0]['datetime'])) ?></span><br>
                                    <?php echo $artikel_hidup_guruku[0]['judul'] ?>
                                </span>
                            </a>
                        </div>
                        <div class="artikel-normal">
                            <ul>
                                <?php foreach($artikel_hidup_guruku as $key=>$hidup_guruku){
                                    if($key == 0){
                                        continue;
                                    }
                                 ?>
                                <li><a href="<?php echo site_url('artikel/hidup-guruku')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$hidup_guruku['judul']) ?>"><?php echo $hidup_guruku['judul'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 no-padding"></div>
        </div>
        <div class="col-xs-12 separator"></div>
        <div class="col-xs-12 no-padding" id="media">
            <div class="col-md-1 no-padding"></div>
            <div class="col-xs-12 col-md-5 no-padding-repsonsive">
                <div class="artikel-body">
                    <div class="col-xs-12 gallery-container no-padding">
                        <div class="col-xs-12 no-padding">
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
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 ">
                <div class="artikel-body">
                    <p class="media-heading">Gallery</p>
                    <div class="media-text media-text-slider">
                        <?php foreach ($gallery as $data) { ?>
                        <p><?php echo $data['keterangan'] ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1 no-padding"></div>
        </div>
        <div class="col-xs-12 separator2"></div>
        <div class="col-xs-12 no-padding" id="media2">
            <div class="col-md-1 no-padding"></div>
            <div class="col-xs-12 col-md-5 col-md-push-5">
                <div class="artikel-body">
                    <iframe src="https://www.youtube.com/embed/uIx0KXLAk14"></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 col-md-pull-5 no-padding-repsonsive">
                <div class="artikel-body">
                    <div class="artikel-body">
                        <p class="media-heading">Video</p>
                        <p class="media-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1 no-padding"></div>
        </div>
        <div class="col-xs-12 separator"></div>
    </div>
    </div>
    <!-- footer -->
    <?php $this->load->view('komponen/footer') ?>
    <!-- end footer -->
    <!-- PhotoSwipe -->
    <?php $this->load->view('komponen/photoswipe') ?>
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/slick/slick.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/velocity.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/photoswipe.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/photoswipe-ui-default.min.js"></script>
    <script>
    $(".head-line-side a").hover(function(){
        $(this).click();
    });
    var height_head_line_hot = $(".head-line-hot img").height()/4;
    var height = $("#2-kolom").height()/4;
    var height2 = $("#2-kolom").height()/3;
    if (window.matchMedia('(min-width: 992px)').matches) {
        $(".head-line-side-item").each(function(){
            $(this).css("height",height_head_line_hot);
        });
        $(".jurnal-inspirasi-item").each(function(){
            $(this).css("height",height);
        });
        $(".jembatan-pengetahuan-item").each(function(){
            $(this).css("height",height2);
        });
    }
    $('.headline-slider-for').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         fade: true,
         asNavFor: '.headline-slider-nav'
    });
    $('.headline-slider-nav').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         vertical : true,
         asNavFor: '.headline-slider-for',
         focusOnSelect: true
    });
    $(".headline-slider-nav a").click(function(e){
        $(this).addClass("artikel-active");
        if($(this).siblings().hasClass("artikel-active")){
            $(this).siblings().removeClass("artikel-active");
        }
    });
    </script>
    <script>
    var items = [];
    var a = 0;
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
    console.log(items);
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
    <script type="text/javascript">
    $('.gallery-slider').slick({
        dots : true,
        infinite: true,
        arrows : false,
        asNavFor : '.media-text-slider'
    });
    $('.media-text-slider').slick({
        dots : false,
        infinite: true,
        arrows : false,
        draggable : false,
        fade : true,
        asNavFor : '.gallery-slider'
    });
    </script>
    <script>
    $("document").ready(function(){
        $(".layanan-slider").slick({
            nextArrow : $('.layanan-slider-next'),
            prevArrow : $('.layanan-slider-prev'),
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
        });
    });
    </script>
</body>
</html>
