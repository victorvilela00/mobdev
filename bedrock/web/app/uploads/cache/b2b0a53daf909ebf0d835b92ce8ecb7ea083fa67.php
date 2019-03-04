<div class="container container-form">
  <div class="col-md-5 offset-md-7 form-box">
    <div class="row">
      <div class="box-title">
        <h2>Insira aqui seus dados:</h2>
      </div>
        <?php echo do_shortcode('[contact-form-7 id="55" title="Form Página Principal"]') ?>
    </div>
  </div>
</div>

<?php $__env->startSection('content'); ?>

<div class="secao secao1">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
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
    </div>
  </div>
</div>

<div class="secao secao2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php the_field('titulo_secao2') ?></h2>
        <p><?php the_field('texto_secao2') ?></p>
      </div>
    </div>
        <!-- carousel -->
    
    <div class="row">
        <div class="col-md-6">
          <div id="carousel-indicator" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-indicator" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-indicator" data-slide-to="1"></li>
              <li data-target="#carousel-indicator" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slide1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slide2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slide3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-indicator" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carousel-indicator" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>


    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>