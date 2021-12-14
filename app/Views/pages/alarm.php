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
                    <img class="mb-5" src="<?= base_url('/assets/images/services/alarm.jpg') ?>" alt="">

                    <div class="heading">
                       <h2>Alarm Systems</h2> 
                    </div>

                    <p>
                    No one likes to think about break-ins or burglaries in their homes or business, but the fact is that property crimes are among the most common offences committed in Tanzania. Most break-ins cost more than just money. Victims often feel violated and fearful about being in their home after an incident. Protecting your home is one of the best things you can do for yourself and your family. Other than the obvious benefit of alarm system installation, if someone breaks into your house, there are actually other valuable benefits to have home security system solution in your home. Thanks to technological advances, security system installation can do more than just keep burglars away. In fact, some security systems can control the temperature of your home, monitor your children's whereabouts, and even let the babysitter in when you're away from home. To make this happen, applications are enabled using automation devices like motion detectors, door and window sensors, and lighting and door lock controls.
                    </p>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <ul class="page-nav-vertical">
                        <li><a href="<?= base_url('/biometric-systems') ?>">Biometric Systems</a></li>
                        <li class="active"><a href="<?= base_url('/alarm-systems') ?>">Alarm Systems</a></li>
                        <li><a href="<?= base_url('/electrical-fence') ?>">Electrical Fence </br> and Motor Gates</a></li>
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
    
    