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
                            <input type="input" class="form-control" name="title" value="<?= esc($posts['title']) ?>"/>                    
                        </div>
                        <div class="form-group">
                                <label for="body">Text</label>                                
                                <textarea name="body" class="form-control" ><?= esc($posts['body']) ?></textarea>
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
    <script>
        CKEDITOR.replace( 'body' );
    </script>
<?= $this->endSection() ?>