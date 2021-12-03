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
                    <img class="mb-5" src="<?= base_url('/assets/images/services/alarm.jpg') ?>" alt="">

                    <div class="heading">
                       <h2>Alarm Systems</h2> 
                    </div>

                    <p>
                        Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros. Praesent eget mollis nulla, non lacinia urna. Donec sit amet neque auctor, ornare dui rutrum, condimentum justo. Duis dictum, ex accumsan eleifend eleifend, ex justo aliquam nunc, in ultrices ante quam eget massa. Sed scelerisque, odio eu tempor pulvinar, magna tortor finibus lorem, ut mattis tellus nunc ut quam. Curabitur quis ornare leo. Suspendisse bibendum nibh non turpis vestibulum pellentesque.

                    </p>
                </div>
                <div class="col-lg-4">
                    <ul class="page-nav-vertical">
                        <li><a href="<?= base_url('/biometric-systems') ?>">Biometric Systems</a></li>
                        <li class="active"><a href="<?= base_url('/alarm-systems') ?>">Alarm Systems</a></li>
                        <li><a href="<?= base_url('/electrical-fence') ?>">Electrical Fence </br> and Motor Gates</a></li>
                        <li><a href="<?= base_url('/computer-maintenence') ?>">Computer Maintenence </br> and Repair</a></li>
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
    
    