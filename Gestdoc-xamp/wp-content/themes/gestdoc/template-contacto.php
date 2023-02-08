<?php /* Template Name: Contacto */ ?>
<?php get_header() ?>
<div id="sections">
      <section class="section--contact">
        <div class="section__wrap section__wrap--sm">
          <div class="section__header">
            <h3 class="section__title"><?php the_field('titulo_principal')?></h3>
            <p class="section__description"><?php the_field('subtitulo_principal')?></p>
          </div>
          <div class="section__body">
            <div class="cols">
              <div class="section__flex">
                <div class="col-md-5">
                  <div class="section__dates">
                    <h4 class="section__title"><?php the_field('titulo_secundario')?></h4>
                    <p class="section__description"><?php the_field('parrafo_secundario')?></p>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="section__form">
                    <?php echo do_shortcode('[contact-form-7 id="206" title="Formulario de contacto" html_class="form"]'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>

<?php get_footer() ?>