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
                <div class="col-lg-8 p-2 mb-5 pb-5 col-sm-12">
                    <img class="mb-5" src="<?= base_url('/assets/images/services/fence.jpg') ?>" alt="">

                    <div class="heading">
                       <h2>Electrical Fence and Motor Gates</h2> 
                    </div>

                    <p>
                    Electric fencing is a security system that prevents access to a premise. Unlike CCTV Camera and sensors (e.g. motion sensors), which react after intrusion, electric fencing is an active protection system that blocks an unauthorised access to a specific location before intrusion.

                    One may use electric fencing to protect homes, warehouses, offices, hotels, guest houses, and other similar premises. Generally electric fencing system works as the physical and psychological access denial.

                    Are you in need of electric fencing for your home or business? If yes, Century Technology remains your best choice

                    </p>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <ul class="page-nav-vertical">
                        <li><a href="<?= base_url('/biometric-systems') ?>">Biometric Systems</a></li>
                        <li><a href="<?= base_url('/alarm-systems') ?>">Alarm Systems</a></li>
                        <li class="active"><a href="<?= base_url('/electrical-fence') ?>">Electrical Fence </br> and Motor Gates</a></li>
                        <li><a href="<?= base_url('/computer-maintenance') ?>">Computer Maintenance </br> and Repair</a></li>
                        <li><a href="<?= base_url('/it-support') ?>">IT Support</a></li>
                        <li><a href="<?= base_url('/web-design') ?>">Web Design and Hosting</a></li>
                        <li><a href="<?= base_url('/graphic-design') ?>">Graphic Design</a></li>
                        <li><a href="<?= base_url('/cloud-services') ?>">Cloud Services</a></li>
                        <li><a href="<?= base_url('/network-installation') ?>">Network Installation </br> and Services</a></li>
                    </ul>					
                </div>
            </div>
    </div>
    <!-- Services Section End -->
<?= $this->endSection() ?>
    
    