<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-8">
      <div class="secao1">
        <h2><?php the_field('titulo_secao1') ?></h2>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>