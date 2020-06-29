



<?php $__env->startSection('content'); ?>

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">La list des produit
                    <div class="text-muted pt-2 font-size-sm">Datatable product list</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    
                    <!--begin::Dropdown Menu-->
               
                </div>
                <!--end::Dropdown-->
                <!--begin::Button-->
                <a href="http://tissir.cc/Products/create" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Ajouter</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">

              <!--begin::Search Form-->
              <?php echo Form::open(['action' => 'ProductsController@look', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

              <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <?php echo e(Form::text('look_for', '', ['class' => 'form-control form-control-solid','placeholder' => 'Search...','id'=>'kt_datatable_search_query'])); ?>

                               
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>

                            <div class="col-md-4 my-2 my-md-0">
                                <?php echo e(Form::submit('Search', ['class'=>'btn btn-light-primary px-6 font-weight-bold'])); ?>

                               
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        
                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

            <!--end::Search Form-->

            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Referance</th>
                    <th>Marque</th>
                    <th>Stock</th>
                    <th>Prix d'achat</th>
                    <th>Prix de vente</th>
                    <th>date</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
              

                    <?php if(count($product) > 0): ?>
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td></td>
                        <td><?php echo e($item->reference); ?></td>
                        <td><?php echo e($item->marque); ?></td>
                        <td><?php echo e($item->stock); ?></td>
                        <td><?php echo e($item->prix_achat); ?></td>
                        <td><?php echo e($item->prix_vent); ?></td>
                        <td><?php echo e(date('d-m-Y', strtotime($item->created_at))); ?></td>
                        <td align="center"><?php echo e($item->type); ?></td>
                        <td align="center">

                            <?php if($item->stock == 0 ): ?> 
                            0
                            <?php elseif($item->stock == 1 ): ?>
                            1
                            <?php elseif($item->stock > 1 ): ?>
                            2
                            <?php endif; ?>


                        </td>
                        <td nowrap>
                            


                            <a href="http://tissir.cc/Products/<?php echo e($item->id); ?>/edit" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                <span class="svg-icon svg-icon-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                           
                            
                          

                        </td>
                       
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>No Product found</p>
                <?php endif; ?>



                 
                </tbody>
            </table>


            


        </div>

    </div>




    <?php if( count($productE) > 0): ?>

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">La list des Equivalent
                    <div class="text-muted pt-2 font-size-sm">Equivalent product list</div>
                </h3>
            </div>
            
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Referance</th>
                    <th>Marque</th>
                    <th>Stock</th>
                    <th>Prix d'achat</th>
                    <th>Prix de vente</th>
                    <th>date</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                </tr>
                </thead>
                <tbody>
                
                   
                    <?php $__currentLoopData = $productE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td></td>
                        <td><?php echo e($item->reference); ?></td>
                        <td><?php echo e($item->marque); ?></td>
                        <td><?php echo e($item->stock); ?></td>
                        <td><?php echo e($item->prix_achat); ?></td>
                        <td><?php echo e($item->prix_vent); ?></td>
                        <td><?php echo e($item->created_at); ?></td>
                        <td align="center"><?php echo e($item->type); ?></td>
                        <td align="right">1</td>
                        <td nowrap></td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             



                 
                </tbody>
            </table>
        </div>

    </div>
  
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(asset('plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

<script>


    "use strict";
    // Class definition
    var KTKBootstrapTouchspin = function() {
    
        // Private functions
        var validationStateDemos = function() {
            // validation state demos
            $('#kt_touchspin_1_validate').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
    
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: ''
            });
    
            // vertical buttons with custom icons:
            $('#kt_touchspin_2_validate').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
    
                min: 0,
                max: 100,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
            });
    
            $('#kt_touchspin_3_validate').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
                verticalbuttons: true,
                verticalupclass: 'ki ki-plus',
                verticaldownclass: 'ki ki-minus'
            });
        }
    
        return {
            // public functions
            init: function() {
                validationStateDemos();
            }
        };
    }();
    
    jQuery(document).ready(function() {
        KTKBootstrapTouchspin.init();
    });
        </script>
    
    <script src="<?php echo e(asset('plugins/custom/datatables/datatables.bundle.js')); ?>" type="text/javascript"></script>

    
    <script src="<?php echo e(asset('js/pages/crud/datatables/basic/basic.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo1\resources\views/pages/datatables.blade.php ENDPATH**/ ?>