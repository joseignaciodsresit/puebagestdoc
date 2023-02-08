<?php /* Template Name: Docs */ ?>
<?php get_header() ?>
<div id="sections">
      <section class="section--header">
        <div class="section__wrap">
          <div class="section__primary">
            <h1 class="section__title">Encuentra el <span>tramite</span> que buscas</h1>
            <p class="section__description">Donec venenatis pulvinar maecenas torquent cras tellus fames lectus senectus
            </p>
          </div>
          <div class="cols">
            <div class="col-xs-12 col-md-6 dscroll">
              <article class="article--fast">
                <div class="article__tag">Mas popular</div>
                <div class="article__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/gif/magnifying-glass.gif"></div>
                <div class="article__body">
                  <h5 class="article__title"><a href="#caja_busqueda">Documentos disponibles</a></h5>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-md-6 dscroll">
              <article class="article--fast">
                <!--.article__tag-->
                <div class="article__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/gif/upload.gif"></div>
                <div class="article__body">
                  <h5 class="article__title"><a id="subir-documento" href="#">Subir documento</a></h5>
                </div>
              </article>
            </div>
          </div>
          <div class="section__secondary dscroll">
            <div class="section__search">
              <div class="section__search__text">Más de 35 mil documentos emitidos</div>
              <div class="section__search__input">
                <div class="section__search__results">
                  <div id="block-list">
                  </div>
                  <div class="section__search__results__notfound"><span class="section__face">Documento no encontrado</span>
                    <p class="section__description">¿No encontraste el documento que buscabas?	</p>
                    <p class="section__description"><a href="<?php echo site_url( '/Contacto/' ); ?>">Cuéntanos</a> qué documento te gustaría que añadiéramos	</p>
                  </div>
                </div>
                <input id="search" type="text" placeholder="Buscar documento">
                <div class="section__search__button"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg"></div>
              </div>
              <div class="section__search__back"></div>
              <div class="section__search__info">
                <div class="section__search__box">
                  <div class="section__info__tag"></div>
                  <div class="section__info__name">Declaración jurada</div>
                  <div class="section__info__title"> </div>
                  <div class="section__info__description">Fusce mattis odio nisl est imperdiet pellentesque condimentum turpis per colus et primis eu lacinia accumsan.
                  </div>
                  <div class="section__info__link"></div>
                  <div class="section__search__footer"><a href="#" class="btn btn--transparent clear-info-box">Cancelar		</a><a href="#" target="_blank" class="btn btn--white">Ir a trámite<span class="fa fa-external-link"></span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<section class="section--docs" id="caja_busqueda">
  <div class="section__wrap section--md">
    <div class="section__header section__header--center"> 
      <h3 class="section__title">Categorías</h3>
      <div class="section__filters filters dscroll">
      <?php
          $terms = get_terms( array(
            'taxonomy' => 'category',
            'hide_empty' => false, // default: true
          ) );
          
          if ( empty( $terms ) || is_wp_error( $terms ) ) {
            return;
          }

          echo '<ul data-filter-group="category" class="menu button-group">';
          echo '<li data-filter="*" class="section__filter current">Todos</li>';

          foreach( $terms as $term ) {
            echo '<li data-filter=".' . sanitize_title($term->name) . '" class="section__filter">' . esc_attr( $term->name ) . '</li>';
          }

          echo '</ul>';
          ?>
      </div>
    </div>
    <div class="section__body">
      <div class="cols cols-gutter-2 grid">

        <?php
              $args = array(  
                  'post_type' => 'documentos',
                  'post_status' => 'publish',
                  'posts_per_page' => -1, 
                  'orderby' => 'title', 
                  'order' => 'ASC', 
              );

              $loop = new WP_Query( $args ); 

              while ( $loop->have_posts() ) : $loop->the_post();

                  $categories = wp_get_object_terms( get_the_ID(), 'category', array( 'fields' => 'names' ) );
                  $categories_id = wp_get_object_terms( get_the_ID(), 'category', array( 'fields' => 'ids' ) );
                  $categories_slugs = wp_get_object_terms( get_the_ID(), 'category', array( 'fields' => 'slugs' ) );

                  $categories_classes = '';
                  foreach($categories_slugs as $category_slug) {
                    $categories_classes .= sanitize_title($category_slug) . ' ';
                  }
              ?>

              <div class="col-xs-12 col-md-4 <?php echo $categories_classes ?>">
                  <article id="regimen" class="article--doc">
                      <div class="article__icon"><img src="<?php echo get_field("icono", "category_".$categories_id[0]); ?>"></div>
                      <div class="article__body">
                      <h5 class="article__title"><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h5>
                      <a data-modal-docs class="btn btn--link-xs"><?php echo implode(', ', $categories) ?></a>
                      </div>
                  </article>
              </div>

              <?php

              endwhile;

              wp_reset_postdata(); 
      ?>
      </div>
    </div>
  </div>
</section>



<?php get_footer() ?>