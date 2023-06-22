

<?php $__env->startSection('content'); ?>
    <h1>Ini Adalah Halaman Dashboard</h1>
   
<?php $__env->stopSection(); ?>

<?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
<?php endif; ?>
<?php echo $__env->make('admin.layout.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum-web2\praktikum10\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>