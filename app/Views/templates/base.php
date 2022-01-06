<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?> | CenturyTechnology</title>

        <link rel="icon" href="<?=base_url('/favicon.gif')?>" type="image/gif">

        <link rel="stylesheet" href="<?= base_url('/assets/css/animate.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/animate-2.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/icofont/icofont.min.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/odometer.min.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/owl.carousel.min.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/slick.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/lightboxed.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">

        <link rel="stylesheet" href="<?= base_url('/assets/css/custom.css') ?>">    

        <link href="<?= base_url('/assets/dist/hc-offcanvas-nav.css') ?>" rel="stylesheet" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>
    <body>

        <div class="preloader">
            <div class="loader"><img src="<?= base_url('/assets/images/spinner.gif') ?>" alt="image"></div>
        </div>

        <div class="main-content">
            <div class="header d-none d-lg-block">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="top-right">
                                    <ul>
                                        <li>
                                            <span><i class="icofont-clock-time"></i></span>
                                            08:00 AM - 08:00 PM
                                        </li>
                                        <li>
                                            <span><i class="icofont-email"></i></span>
                                            <a href="mailto:info@centurytechnology.co.tz" style="color:#fff !important;">info@centurytechnology.co.tz
                                            </a>
                                        </li>
                                        <li>
                                            <span><i class="icofont-google-map"></i></span>
                                            Morogoro - Tanzania
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-header">
                    <div class="container">
                        <div class="row no-gutters justify-content-between">
                            <div class="col-xl-2 col-lg-2 col-3">
                                <div class="logo">
                                    <a href="#">
                                        <img src="<?= base_url('/assets/images/logo.png') ?>" alt="LOGO">
                                    </a>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-none d-flex col-3">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <img src="<?= base_url('/assets/images/btn-img.png') ?>" alt="image">
                                </button>
                            </div>
                            <div class="col-xl-9 col-lg-9 next">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="collapse navbar-collapse mobile-menu" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="/">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="#" id="serviceDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Service <span><i class="icofont-simple-down"></i></span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="serviceDropdown">
                                                    <a class="dropdown-item" href="<?= base_url('/biometric-systems') ?>">Biometric Systems</a>
                                                    <a class="dropdown-item" href="<?= base_url('/alarm-systems') ?>">Alarm Systems</a>
                                                    <a class="dropdown-item" href="<?= base_url('/electrical-fence') ?>">Electrical Fence </br> and Motor Gates</a>
                                                    <a class="dropdown-item" href="<?= base_url('/computer-maintenance') ?>">Computer Maintenence </br> and Repair</a>
                                                    <a class="dropdown-item" href="<?= base_url('/it-support') ?>">IT Support</a>
                                                    <a class="dropdown-item" href="<?= base_url('/web-design') ?>">Web Design and Hosting</a>
                                                    <a class="dropdown-item" href="<?= base_url('/graphic-design') ?>">Graphic Design</a>
                                                    <a class="dropdown-item" href="<?= base_url('/cloud-services') ?>">Cloud Services</a>
                                                    <a class="dropdown-item" href="<?= base_url('/network-installation') ?>">Network Installation </br> and Services</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Mobile menu -->
            <nav class="navbar navbar-expand-lg navbar-light bg-gray d-lg-none fixed-top shadow">
                <div class="col-6">
                    <a class="navbar-brand" href="/">
                        <img src="<?= base_url('/assets/images/logo.png') ?>" alt="LOGO">
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <button class="century-mobile-toggle border-0" type="button">
                        <span class="navbar-toggler-icon text-danger"></span>
                    </button>
                </div>
            </nav>

            <nav id="century-mobile-navigation" class="d-lg-none">
                <ul>
                    <li><a href="/">Home</a></li>            
                    <li>
                    <a href="#">Services</a>
                    <ul>
                        <li><a href="<?= base_url('/biometric-systems') ?>">Biometric Systems</a></li>
                        <li><a href="<?= base_url('/alarm-systems') ?>">Alarm Systems</a></li>
                        <li><a href="<?= base_url('/electrical-fence') ?>">Electrical Fence and Motor Gates</a></li>
                        <li><a href="<?= base_url('/computer-maintenance') ?>">Computer Maintenence and Repair</a></li>
                        <li><a href="<?= base_url('/it-support') ?>">IT Support</a></li>
                        <li><a href="<?= base_url('/web-design') ?>">Web Design and Hosting</a></li>
                        <li><a href="<?= base_url('/graphic-design') ?>">Graphic Design</a></li>
                        <li><a href="<?= base_url('/cloud-services') ?>">Cloud Services</a></li>
                        <li><a href="<?= base_url('/network-installation') ?>">Network Installation and Services</a></li>
                    </ul>
                    </li>
                    <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                </ul>
            </nav>




            <?= $this->renderSection('content') ?>

        </div>

        <div class="footer">
            <div class="main-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="site-info">
                                <div class="logo">
                                    <img src="<?= base_url('/assets/images/logo.png') ?>" alt="logo">
                                </div>
                                <p>       
                                    <ul>                                
                                        <li><span><i class="icofont-ui-call mr-2"></i></span><a href="tel:+255658120546" style="color:#fff !important;">+255658120546</a></li>
                                        <li><span><i class="icofont-email mr-2"></i></span><a href="mailto:info@centurytechnology.co.tz" style="color:#fff !important;">info@centurytechnology.co.tz
                                    </a>
                                        </li>
                                        <li><span><i class="icofont-google-map mr-2"></i></span> Morogoro - Tanzania
                                        </li>
                                    </ul>
                                </p>
                                <div class="social">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>                                
                                </div>
                            </div>
                        </div>                   
                    
                        <div class="col-md-8">
                            <div class="footer-service">
                                <h3 class="title">Services</h3>
                                <div class="row">
                                    <div class="col-sm-6 mb-2">
                                        <ul>
                                            <li><a href="<?= base_url('/biometric-systems') ?>"><span><i class="icofont-double-right"></i></span>Biometric Systems</a></li>
                                            <li>
                                                <a href="<?= base_url('/alarm-systems') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                Alarm Systems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/electrical-fence') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                Electrical Fence and Motor gates
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/computer-maintenance') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                Computer Maintenance and Repair
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/it-support') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                IT Support
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>										
                                            <li>
                                                <a href="<?= base_url('/web-design') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                Web Design and Hosting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/graphic-design') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                Graphic Designing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/cloud-services') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                Cloud services
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/network-installation') ?>">
                                                    <span><i class="icofont-double-right"></i>
                                                </span>
                                                Network Installation and Service
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <p>&copy;  <script>document.write(new Date().getFullYear())</script> Century Technology</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to top button -->
        <a id="century-back-top-button"></a>
        
        </script>
        <script src="<?= base_url('/assets/js/jquery-3.6.0.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/odometer.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/jquery.appear.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('/assets/js/owl.carousel2.thumbs.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/imagesloaded.pkgd.min.js') ?>"></script>
        <script src="<?= base_url('/assets/js/isotope.pkgd.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/slick.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/lightboxed.js') ?>"></script>

        <script src="<?= base_url('/assets/js/popper.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script>

        <script src="<?= base_url('/assets/js/main.js') ?>"></script>
        
        <script src="<?= base_url('/assets/dist/hc-offcanvas-nav.js') ?>"></script>

        <script>
            jQuery(document).ready(function($) {
                $('#century-mobile-navigation').hcOffcanvasNav({
                    disableAt: 1024,
                    customToggle: $('.toggle'),
                    navTitle: 'Back',
                    levelTitleAsBack: true,
                    customToggle: '.century-mobile-toggle',
                });
            });
        </script>
        <script>
            var btn = $('#century-back-top-button');

            $(window).scroll(function() {
            if ($(window).scrollTop() > 500) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
            });

            btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '500');
            });
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function () {
                <?php if(session()->getFlashdata('status')){?>
                    swal({
                        title: "<?= session()->getFlashdata('status') ?>",
                        text: "<?= session()->getFlashdata('status_txt') ?>",
                        icon: "<?= session()->getFlashdata('status_icon') ?>",
                        button: "OK!",
                    });
                <?php } ?>
            });
        </script>
    </body>

</html>