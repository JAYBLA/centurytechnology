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
<div class="blog blog-inner">
    <div class="container">
        <div class="row">
            <?php if (! empty($posts) && is_array($posts)): ?>
            <?php foreach($posts as $posts_item): ?>
            <div class="col-md-4 mb-5">
                <div class="single-box">
                    <div class="part-img">
                        <img src="<?=base_url()?>/uploads/<?= $posts_item['file_name'] ?>" alt="image">
                    </div>
                    <div class="part-txt">
                        <div class="blog-info float-right">
                            <div class="date">
                                <span><?= date('Y-m-d', strtotime($posts_item['created_at'])) ?></span>
                            </div>
                        </div>
                        <a href="/articles/<?= $posts_item['slug'], 'url' ?>"><?= esc($posts_item['title']) ?></a>
                        <p><?= character_limiter($posts_item['body'], 180) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>

            <div class="col-xl-12 col-lg-12 mt-4">
                <div class="pagination text-center">
                    <?php if ($pager) :?>
                    <?php $pagi_path='/articles'; ?>
                    <?php $pager->setPath($pagi_path); ?>
                        <ul>
                              <li><?= $pager->links() ?></li>
                        </ul>
                    <?php endif ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>