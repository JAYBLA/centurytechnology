<?= $this->extend('templates/dashboard') ?>

<?= $this->section('stylesheet') ?>
 <style>
     .dataTables_filter{
         float: right !important;
     }
 </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
            <div class="col-8 offset-2">                           
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create A Post</h3>
                    </div>
                    <?= session()->getFlashdata('error') ?>
                    <?= service('validation')->listErrors() ?>
                    <form action="<?= base_url('/dashboard/post-create') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="input" class="form-control" name="title" />                    
                        </div>
                        <div class="form-group">
                                <label for="body">Text</label>
                                <textarea name="body" class="form-control" ></textarea><br />
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div> 
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script>
        CKEDITOR.replace( 'body');
    </script>
<?= $this->endSection() ?>