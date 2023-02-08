<?php get_header() ?>

<div id="sections">
      <section class="section--header">
        <div class="section__wrap">
          <div class="section__header">
            <h1 class="section__title"><?php the_field('titulo')?></h1>
          </div>
        </div>
      </section>
      <section class="section--singledoc">
        <div class="section__wrap section--md">
          <div class="section__body">
            <div class="section__boxs">
              <div class="section__box">
                <div class="cols"> 
                  <div class="col-md-12">
                    <div class="section__content section--center">
                      <h3 class="section__title">Descripción del documento</h3>
                      <p class="section__description"><?php the_field('descripcion')?></p>
                    </div>
                  </div>
                  <div class="col-md-12"> 
                    <div class="section__footer">
                      <div class="cols">
                        <div class="col-md-6">
                          <div class="section__faq"> 
                            <div class="faq">
                              <div class="faq__item">
                                <h3 class="faq__question"><span class="fa fa-angle-down"></span>Detalle de Requisitos</h3>
                                <div class="faq__answer">
                                  <div class="section__content"> 
                                    <p class="section__description"><?php the_field('requisitos')?></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="section__laststep">
                            <div class="section__valor">
                              <h4 class="section__title">Valor del tramite:</h4>
                              <p class="section__description"><?php the_field('valor')?></p>
                            </div>
                            <div class="section__button"><a id="<?php the_field('id_bpmn')?>" class="btn btn--white">Empezar tramite</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
<?php get_footer() ?>