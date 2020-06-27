



<?php $__env->startSection('content'); ?>


<div class="card card-custom">
	<div class="card-header">
		<h3 class="card-title">
			Ajouter un nouveau produit
		</h3>
	</div>
    <!--begin::Form-->
    


    <?php echo Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>


    <div class="card-body">

        <div class="form-group row">
            <label  class="col-2 col-form-label">Reference</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="example-text-input"/>
            </div>
        </div>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Reference' ,['class' => 'col-2 col-form-label', 'placeholder' => ''])); ?>

            <div class="col-10">
            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::file('cover_image')); ?>

        </div>
    </div>
        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>





</div>
 




<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/pages/widgets.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo1\resources\views/pages/creat.blade.php ENDPATH**/ ?>