<?php /* Template Name: Home */ ?>
<?php get_header() ?>

  <div id="sections">
      <section class="section--main">
        <div class="section__primary">
            <div class="section__wrap section__wrap--main">
                <div class="section__body dscroll">
                    <h1 class="section__title"><?php the_field('titulo_principal')?></h1>
                    <p class="section__description"><?php the_field('subtitulo_principal')?></p><a
                        href="<?php echo site_url( '/docs/' ); ?>" class="btn"><?php the_field('boton_principal')?></a>
                    <!--.section__search
              .section__search__results
              	input#search(type="text" placeholder="Buscar documento")
              .section__search__button
              	img(src="./img/icons/search.svg")
              -->
                </div>
                <div class="section__image dscroll"><img src="<?php the_field('icono_principal')?>"></div>
            </div>
        </div>
      </section>

      <section class="section--features">
        <div class="section__wrap">
            <div class="cols">
                <div class="col-md-6">
                    <div class="section__articles dscroll">
                        <div class="section__upper">
                            <?php
                    $i = 0; // Inicializar el contador
                    $cajas = get_field('cajas_informativas');
                    if ($cajas) {
                      foreach ($cajas as $caja) {
                        if ($i < 2) {
                  ?>
                            <article class="article--feature article--feature--index">
                                <div class="article__body">
                                    <div class="article__image"><img src="<?php echo $caja['icono_caja']; ?>"></div>
                                    <h4 class="article__title"><?php echo $caja['titulo_caja']; ?></h4>
                                    <p class="article__description"><?php echo $caja['descripcion_caja']; ?></p>
                                </div>
                            </article>
                            <?php
                        }
                        $i++;
                      }
                    }
                  ?>
                        </div>
                        <div class="section__lower">
                            <?php
                    $i = 0; // Inicializar el contador
                    $cajas = get_field('cajas_informativas');
                    if ($cajas) {
                      foreach ($cajas as $caja) {
                        if ($i >= 2) {
                  ?>
                            <article class="article--feature article--feature--index">
                                <div class="article__body">
                                    <div class="article__image"><img src="<?php echo $caja['icono_caja']; ?>"></div>
                                    <h4 class="article__title"><?php echo $caja['titulo_caja']; ?></h4>
                                    <p class="article__description"><?php echo $caja['descripcion_caja']; ?></p>
                                </div>
                            </article>
                            <?php
                        }
                        $i++;
                      }
                    }
                  ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section__body dscroll">
                        <h5 class="section__uppertitle"><?php the_field('encabezado_superior_info')?></h5>
                        <h2 class="section__title"><?php the_field('titulo_bloque_informativo')?></h2>
                        <p class="section__content"><?php the_field('parrafo_bloque_informativo')?></p>
                        <a href="<?php echo site_url( '/Personas/' ); ?>"
                            class="btn"><?php the_field('boton_bloque_informativo')?><span
                                class="fa fa-external-link"></span></a>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section class="section--partners">
        <div class="section__wrap">
            <article class="article--partners">
                <div class="article__image"><img src="<?php echo get_field('partner_1'); ?>"></div>
                <div class="article__image"> <img src="<?php echo get_field('partner_2'); ?>"></div>
                <div class="article__image"><img src="<?php echo get_field('partner_3'); ?>"></div>
                <div class="article__image article__image--resit"><img
                        src="<?php echo get_field('partner_4_resit'); ?>"></div>
                <div class="article__image"><img src="<?php echo get_field('partner_5'); ?>"></div>
            </article>
        </div>
      </section>
      <section class="section--faq">
        <div class="section__wrap">
            <div class="section__header">
                <h2 class="section__title">Como es el proceso de <span>firma</span></h2>
                <p class="section__description">Vestibulum ultrices felis laoreet pretium lobortis arcu aenean nullam
                    litora. Purus lobortis congue tristique tempor sem risus aliquam elit arcu sagittis interdum duis
                    nisl imperdiet porttitor est etiam blandit ullamcorper.</p>
            </div>
            <div class="section__body">
                <div class="cols">
                    <div class="col-md-6 dscroll">
                        <div class="section__faq">
                            <div class="faq">
                                <?php
                                  $cajas_tutorial = get_field('caja_tutorial');
                                  if ($cajas_tutorial) {
                                      foreach ($cajas_tutorial as $caja) {
                                ?>
                                <div class="faq__item">
                                    <h3 class="faq__question"><span
                                            class="fa fa-angle-down"></span><?php echo $caja['titulo_paso']; ?></h3>
                                    <div class="faq__answer">
                                        <div class="section__content">
                                            <p class="section__description"><?php echo $caja['descripcion_paso']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 dscroll">
                        <div class="section__gifs">
                            <?php
                                $i = 0; // Inicializar el contador
                                $cajas_tutorial = get_field('caja_tutorial');
                                if ($cajas_tutorial) { 
                                  foreach ($cajas_tutorial as $caja) {
                            ?>
                            <div class="section__gif <?php if($i == 0){ echo "section__gif--show";}?>">
                                <img src="<?php echo $caja['video_paso']; ?>">
                            </div>

                            <?php
                              $i++; 
                                      }
                                 }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="section--features section--features--2">
        <div class="section__wrap">
            <div class="cols">
                <div class="col-md-6 dscroll">
                    <div class="section__body">
                        <h5 class="section__uppertitle"><?php the_field('encabezado_superior_empresas')?></h5>
                        <h2 class="section__title"><?php the_field('titulo_modulo_empresas')?></h2>
                        <p class="section__content"><?php the_field('parrafo_modulo_empresas')?></p><a
                            href="<?php echo site_url( '/Empresas/' ); ?>"
                            class="btn"><?php the_field('botono_modulo_empresas')?></a>
                    </div>
                </div>
                <div class="col-md-6 dscroll">
                    <div class="section__image"> <img src="<?php echo get_field('icono_empresa'); ?>"></div>
                </div>
            </div>
        </div>
      </section>
      <section class="section--faq section--faq--index">
        <div class="section__wrap">
            <div class="cols">
                <div class="col-md-6">
                    <div class="section__image"><img src="<?php echo get_field('icono_faq'); ?>"></div>
                </div>
                <div class="col-md-6">
                    <div class="section__faq">
                        <div class="section__header">
                            <h2 class="section__title">Preguntas frecuentes </h2>
                        </div>
                        <div class="section__body">
                            <div class="section__faq">
                                <div class="faq">
                                    <?php
                                  $cajas_faq = get_field('modulo_preguntas_frecuentes');
                                  if ($cajas_faq) {
                                      foreach ($cajas_faq as $caja) {
                                ?>
                                    <div class="faq__item">
                                        <h3 class="faq__question"><span
                                                class="fa fa-angle-down"></span><?php echo $caja['pregunta']; ?></h3>
                                        <div class="faq__answer">
                                            <div class="section__content">
                                                <p class="section__description"><?php echo $caja['respuesta']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="section--contactus">
          <div class="section__wrap">
              <div class="section__body">
                  <h5 class="section__toptitle"><?php the_field('encabezado_superior')?></h5>
                  <h3 class="section__title"><?php the_field('titulo_contacto')?></h3>
                  <p class="section__description"><?php the_field('parrafo_contacto')?>
                  </p><a href="<?php echo site_url( '/Contacto/' ); ?>" class="btn"><?php the_field('boton_contacto')?></a>
              </div>
          </div>
      </section>
  </div>

</body>

<?php get_footer() ?>


