
<div class="topbar">

  

    
    <?php if(config('layout.extras.user.display')): ?>
        <?php if(config('layout.extras.user.layout') == 'offcanvas'): ?>
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Tissir</span>
                    <span class="symbol symbol-35 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">T</span>
                    </span>
                </div>
            </div>
 
           
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\demo1\resources\views/layout/partials/extras/_topbar.blade.php ENDPATH**/ ?>