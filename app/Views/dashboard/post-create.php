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
                <div class="card mt-3">
                    <div class="card-header card-header-company">
                        <h2>Create A Post</h2>
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
                        <button type="submit" class="btn btn-company">Submit</button>
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