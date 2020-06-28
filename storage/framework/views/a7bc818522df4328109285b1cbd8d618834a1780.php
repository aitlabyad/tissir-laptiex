



<?php $__env->startSection('content'); ?>



<div class="card card-custom card-sticky" id="kt_page_sticky_card">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
				Edite produit<i class="mr-2"></i>
				<small class=""> Produit</small>
			</h3>
        </div>
        <?php echo Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <?php echo e(Form::hidden('_method', 'PUT')); ?>


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
                            <?php echo e(Form::text('reference', $product->reference, ['class' => 'form-control form-control-solid','placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Prix d\'achate' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('prixa', $product->prix_achat, ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Prix de vente' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('prixv', $product->prix_vent, ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Type' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('type', $product->type, ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'Marque' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('marque', $product->marque, ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'equivalent' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('equivalent', $product->equivalent, ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <?php echo e(Form::label('title', 'stock' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])); ?>

                            <div class="col-9">
                            <?php echo e(Form::text('stock', $product->stock, ['class' => 'form-control form-control-solid', 'placeholder' => ''])); ?>

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
                        <?php echo Form::close(); ?>



                        <div class="card card-custom gutter-b bg-light-danger">
                            <?php echo Form::open(['action'=> ['ProductsController@destroy',$product->id] , 'method' => 'POST']); ?>

                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                                    <div class="d-flex flex-column mr-5">
                                        <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                            Supprimer
                                        </a>
                                        <p class="text-dark-50">
                                            Cette action est irréversible.
                                        </p>
                                    </div>
                                    <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                        <?php echo e(Form::hidden('_method' , 'DELETE')); ?>

                                    <?php echo e(Form::submit('Supprimer',['class'=>'btn font-weight-bolder text-uppercase btn-danger py-4 px-6'])); ?>

                                    </div>
                                   
                                </div>
                            </div>

                            <?php echo Form::close(); ?>

                        </div>


                      
                            

                              
                             
                       
               
                        

					</div>
					
				
				</div>
				<div class="col-xl-2"></div>
			</div>
		</form>
		<!--end::Form-->
    </div>
    


<!--close form here-->

</div>
 




<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>


    <script src="<?php echo e(asset('js/pages/widgets.js')); ?>" type="text/javascript"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo1\resources\views/pages/edit.blade.php ENDPATH**/ ?>