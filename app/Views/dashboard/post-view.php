<?= $this->extend('templates/dashboard') ?>

<?= $this->section('stylesheet') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
            <div class="col-8 offset-2">                           
                <div class="card mt-3">
                    <div class="card-header card-header-company">
                        <h3 class="card-title">Update A Post</h3>
                    </div>
                    <?= session()->getFlashdata('error') ?>
                    <?= service('validation')->listErrors() ?>
                    <form action="<?= base_url('/dashboard/post-update') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id" id="id" value="<?= esc($posts['id']) ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="input" class="form-control" name="title" value="<?= $posts['title'] ?>"/>                    
                            </div>
                            <div class="form-group">
                                    <label for="content">Text</label>                                
                                    <textarea name="content" id="content" class="form-control" ><?= $posts['body'] ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="featured_image">Featured Image</label>
                                <input name="featured_image" type="file" class="form-control" value="<?= $posts['file_name'] ?>" accept="image/*" />
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" class="btn btn-company">Submit</button>
                        </div>
                    </form>
                </div>
            </div> 
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <!-- <script>
        CKEDITOR.replace( 'body' );
    </script> -->
<?= $this->endSection() ?>