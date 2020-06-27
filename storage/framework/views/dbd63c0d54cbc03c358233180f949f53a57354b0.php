



<?php $__env->startSection('content'); ?>



<div class="card card-custom card-sticky" id="kt_page_sticky_card">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
				Ajouter un nouveau produit<i class="mr-2"></i>
				<small class=""> Produit</small>
			</h3>
        </div>
        <?php echo Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>


		<div class="card-toolbar">
			
			<div class="btn-group">
				<button type="button" class="btn btn-primary font-weight-bolder">
					<i class="ki ki-check icon-sm"></i>
					Enregistrer    
				</button>
				<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
					<ul class="nav nav-hover flex-column">
						<li class="nav-item">
							<a href="#" class="nav-link">
								
                                <?php echo e(Form::submit('Enregistrer et Ajouter', ['class'=>'bg-transparent border-0'])); ?>

							</a>
                        </li>
                      
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<!--begin::Form-->
		<form class="form" id="kt_form">
			<div class="row">
				<div class="col-xl-2"></div>
				<div class="col-xl-8">

					<div class="my-5">
                        <h3 class=" text-dark font-weight-bold mb-10">Product Details:</h3>
                        <div class="form-group row">
                            <?php echo e(Form::label('title', '# Reference' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('reference', '', ['class' => 'form-control form-control-solid','placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Prix d\'achate' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('prixa', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Prix de vante' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('prixv', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Type' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('type', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Marque' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('marque', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'equivalent' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('equivalent', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'stock' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('stock', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>
                
					
						
						<div class="form-group row">
							<label class="col-3"></label>
							<div class="col-9">
								<div class="checkbox-inline">
									<label class="checkbox">
										<input type="checkbox"/> 
                                        j'ai vérifié si ce reference existait avant.
										<span></span>
									</label>
								</div>
							</div>
                        </div>
                        

					</div>
					
				
				</div>
				<div class="col-xl-2"></div>
			</div>
		</form>
		<!--end::Form-->
    </div>
    


<!--close form here--><?php echo Form::close(); ?>


</div>
 




<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>


    <script src="<?php echo e(asset('js/pages/widgets.js')); ?>" type="text/javascript"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo1\resources\views/pages/creat.blade.php ENDPATH**/ ?>