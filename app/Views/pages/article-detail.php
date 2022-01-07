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
<div class="blog-details">
         <div class="container">
            <div class="row justify-content-between">
                  <div class="blog-main-content">
                     <div class="part-img">
                        <img src="<?=base_url()?>/uploads/<?= $posts['file_name'] ?>" alt="image">
                     </div>
                     <div class="blog-info">
                        <ul>
                           <li class="color"><?= date('Y-m-d', strtotime($posts['created_at'])) ?></li> 
                        </ul>
                     </div>
                     <div class="part-txt">
                        <h2><?= $posts['title'] ?></h2>
                        <p><?= $posts['body'] ?></p>
                     </div>
                  </div>
            </div>
         </div>
      </div>
<?= $this->endSection() ?>