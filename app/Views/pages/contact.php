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
                            <p>Lorem Ipsu is siply dmmyt the pring been thltext industry standard<br>dummy text ever
                                sice the when an unown</p>
                        </div>
                        <form>
                            <input type="text" placeholder="Name:" required>
                            <input type="email" placeholder="Email:" required>
                            <textarea placeholder="Message..." required></textarea>
                            <button type="submit" class="def-btn">Submit Now <i
                                    class="icofont-double-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="address-area">
                        <div class="single-box">
                            <div class="title">
                                <h3>Address-1</h3>
                            </div>
                            <div class="details">
                                <ul>
                                    <li><span><i class="icofont-clock-time"></i></span>12:05 AM 07:10 PM</li>
                                    <li><span><i class="icofont-ui-call"></i></span>+8865 6344 2988</li>
                                    <li><span><i class="icofont-email"></i></span><a href="mailto:info@centurytechnology.co.tz">info@centurytechnology.co.tz</a>
                                    </li>
                                    <li><span><i class="icofont-google-map"></i></span> 5689 Tampines St 4452 Tampines,
                                        USA.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
    
    