



<?php $__env->startSection('content'); ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    <!--begin: Stats Widget 19-->
                    <div class="card card-custom bg-light-success card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body my-3">
                            <a href="#"
                                class="card-title font-weight-bolder text-success text-hover-state-dark font-size-h6 mb-4 d-block">Totale
                                de Vente</a>
                            <div class="font-weight-bold text-muted font-size-sm">
                                <span class="text-dark-75 font-size-h2 font-weight-bolder mr-2"><?php echo e($total); ?></span>MAD</div>

                        </div>
                        <!--end:: Body-->
                    </div>
                    <!--end: Stats:Widget 19-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 20-->
                    <div class="card card-custom bg-light-warning card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body my-4">
                            <a href="#"
                                class="card-title font-weight-bolder text-warning font-size-h6 mb-4 text-hover-state-dark d-block">Profit</a>
                                <div class="font-weight-bold text-muted font-size-sm">
                                    <span class="text-dark-75 font-weight-bolder font-size-h2 mr-2"><?php echo e($profit); ?></span>MAD</div>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 20-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 21-->
                    <div class="card card-custom bg-light-info card-stretch gutter-b">
                        <!--begin::ody-->
                        <div class="card-body my-4">
                            <a href="#"
                                class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Les
                                produit epuise</a>
                            <div class="font-weight-bold text-muted font-size-sm">
                                <span class="text-dark-75 font-weight-bolder font-size-h2 mr-2"><?php echo e($count); ?></span>
                            </div>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 21-->
                </div>
            </div>






           

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>











<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

  
<script src="<?php echo e(asset('js/pages/widgets.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo1\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>