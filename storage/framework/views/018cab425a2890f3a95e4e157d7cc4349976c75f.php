<?php if(count($errors)> 0 ): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <script>

            $.notify({
                // options
                message: '<?php echo e($error); ?>' 
            },{
                // settings
                type: 'danger'
            });

        </script>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(session('success') ): ?>
   
         <script>

            $.notify({
                // options
                message: '<?php echo e(session('success')); ?>' 
            },{
                // settings
                type: 'success'
            });

        </script>
        

<?php endif; ?><?php /**PATH C:\xampp\htdocs\demo1\resources\views/inc/notification.blade.php ENDPATH**/ ?>