


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-8">
        
            
            
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e($message); ?>

                    </div>
                <?php else: ?>
                    
                    <div id="app">
                        <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                        
                    </div>
                <?php endif; ?>                
            
        
    </div>    
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-project\crud-new\test-project\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>