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
	<div class="contact">
        <div class="container">
            <div class="row no-gutters justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="form-area">
                        <div class="title">
                            <h2>Get In Touch:</h2>
                        </div>
                        <?= service('validation')->listErrors() ?>
                        <form action="/contact" method="post">
                        <?= csrf_field() ?>
                            <input type="text" placeholder="Name:" required name="full_name">
                            <input type="text" placeholder="Phone:" required name="phone">
                            <input type="email" placeholder="Email:" required name="email">
                            <textarea placeholder="Message..." required name="message"></textarea>
                            <button type="submit" class="def-btn">Submit Now <i
                                    class="icofont-double-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="address-area">
                        <div class="single-box">
                            <div class="details">
                                <ul>
                                    <li><span><i class="icofont-clock-time"></i></span>08:00 AM 08:00 PM</li>
                                    <li><span><i class="icofont-ui-call"></i></span><a href="tel:+255658120546" style="color:#666666 !important;">+255658120546</a></li>
                                    <li><span><i class="icofont-email"></i></span><a href="mailto:info@centurytechnology.co.tz" style="color:#666666 !important;">info@centurytechnology.co.tz</a>
                                    </li>
                                    <li><span><i class="icofont-google-map"></i></span> Morogoro - Tanzania</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
    
    