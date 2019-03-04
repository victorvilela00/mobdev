<?php $__env->startSection('content'); ?>

<div class="secao secao1">
  <div class="container">
    <div class="row">
        <div class="col-md-7">
          <h2><?php the_field('titulo_secao1') ?></h2>
          <p><?php the_field('texto_secao1') ?></p>
          <div class="center" style="margin-top: 60px">
              <div class="image-box">
                  <img src="<?php the_field('imagem_1_secao_1') ?>">
                  <h3><?php the_field('titulo_da_imagem_1_secao_1') ?></h3>
              </div>
              <div class="separator"></div>
              <div class="image-box">
                  <img src="<?php the_field('imagem_2_secao_1') ?>">
                  <h3><?php the_field('titulo_da_imagem_2_secao_1') ?></h3>
              </div>
              <div class="separator"></div>
              <div class="image-box">
                  <img src="<?php the_field('imagem_3_secao_1') ?>">
                  <h3><?php the_field('titulo_da_imagem_3_secao_1') ?></h3>
              </div>
          </div>
        </div>
        <div class="col-md-4 offset-md-6 form-box">
            testando...
        </div>
    </div>
  </div>
</div>

<div class="secao secao2">
  <div class="container">
    <div class="row">
        <div class="col-md-7">
          <h2><?php the_field('titulo_secao2') ?></h2>
          <p><?php the_field('texto_secao2') ?></p>

        </div>
        <div class="col-md-4 offset-md-6 form-box">
            testando...
        </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>