<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
	<div class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="part-txt">
                        <h1><?=$title?></h1>
                        <ul>
                            <li><a href="/"> Home</a></li>
                            <li><i class="icofont-double-right"></i></li>
                            <li class="current"><?=$title?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Start -->
    <div class="container">
            <div class="row">
                <div class="col-lg-8 p-2 mb-5 pb-5">
                    <img class="mb-5" src="<?= base_url('/assets/images/services/web.jpg') ?>" alt="">

                    <div class="heading">
                       <h2>Web Design and Hosting</h2> 
                    </div>

                    <p>
                    Web Design and Proper Hosting is a necessity if your business requires a unique web solution to solve your business problem.
                    In Web design we provide web graphic design; user interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization
                    </p>
                </div>
                <div class="col-lg-4">
                    <ul class="page-nav-vertical">
                        <li><a href="<?= base_url('/biometric-systems') ?>">Biometric Systems</a></li>
                        <li><a href="<?= base_url('/alarm-systems') ?>">Alarm Systems</a></li>
                        <li><a href="<?= base_url('/electrical-fence') ?>">Electrical Fence </br> and Motor Gates</a></li>
                        <li><a href="<?= base_url('/computer-maintenance') ?>">Computer Maintenance </br> and Repair</a></li>
                        <li><a href="<?= base_url('/it-support') ?>">IT Support</a></li>
                        <li class="active"><a href="<?= base_url('/web-design') ?>">Web Design and Hosting</a></li>
                        <li><a href="<?= base_url('/graphic-design') ?>">Graphic Design</a></li>
                        <li><a href="<?= base_url('/cloud-services') ?>">Cloud Services</a></li>
                        <li><a href="<?= base_url('/network-installation') ?>">Network Installation </br> and Services</a></li>
                    </ul>					
                </div>
            </div>
    </div>
    <!-- Services Section End -->
<?= $this->endSection() ?>
    
    