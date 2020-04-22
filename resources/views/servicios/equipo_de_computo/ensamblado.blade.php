@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/ensamblado4.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Ensamblado</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">La computadora de tus sueños al mejor precio.</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation--> 
        </div>
      </section>

      <section class="section section-md section-lg-0 bg-gray-100 text-md-left section-relative" id="about">
        <div class="tabs-custom container" id="tabs-8">
          <div class="row row-40 flex-lg-row-reverse">
            <div class="col-lg-11 tab-content-2 wow fadeInLeft">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-8-1">
                  <div class="row row-40 row-lg-50 row-xl-60">
                       <!--<div class="row row-300 row-lg-50>-->
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-tag"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Precio accesible</h5>
                            <p class="box-icon-classic-text">Haz que tu dinero rinda y obten más por menos. La computadora que siempre has querido a un bajo costo.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-magic-wand"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">A la medida</h5>
                            <p class="box-icon-classic-text">Tú tienes el control de que es lo que quieres. No gastes de más en algo que no ocupes y obtén justo lo que necesitas.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-inbox2"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Actualizable</h5>
                            <p class="box-icon-classic-text">Que tu computadora no se quede atrás y ponla al día. Instala y configura los componentes más nuevos de la actualidad.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-thumbs-up"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Calidad</h5>
                            <p class="box-icon-classic-text">Igual de  confiable que una de marca. Obtén la misma calidad, seguridad y funcionamiento que una computadora de fábrica.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                                          <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-laptop-phone"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Lo último en tecnología</h5>
                            <p class="box-icon-classic-text">No te arriesgues comprando un equipo que quedará obsoleto en muy poco tiempo. Adquiere lo último del mercado en tecnología.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          
 <section class="section section-lg bg-default" id="services">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Lo que ofrecemos!!</span></h3>
          <div class="owl-carousel dots-style-2" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-autoplay="false" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
              
               <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#sol_hogar">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_pc_hogar2.jpg" 
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-home icon" style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Soluciones para el hogar</a></h5>
                    <p class="services-classic-text"> El aprendizaje y la diversion en un mismo lugar.<br/><br/></p>
                    </div>            
            </div>
            </div>
            </article>
              </div>

            <!-- Services Creative-->
              
                <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#sol_trabajo">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_pc_oficina.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-briefcase " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Soluciones para el trabajo</a></h5>
                    <p class="services-classic-text">Cumple con tus deberes y ganate el ascenso que siempre has querido.<br/><br/></p>
                    </div>
                  </div>
            </div>
            </article>
              </div>
            <!-- Services Creative-->
              
               <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#sol_gamer">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_pc_gamer2.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-gamepad " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Soluciones para gamers</a></h5>
                    <p class="services-classic-text">Que el poder nunca te falte, conquista la campaña.<br/><br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->
              
               <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#sol_personalizadas">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_pc_personalizable.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-palette " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Soluciones personalizadas</a></h5>
                    <p class="services-classic-text">Danos tus requerimientos y recibe el equipo que necesitas. "Se la sensación de tus amigos"<br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->
    <!-- Services Creative-->

              
            <!-- Services Creative-->
          </div>
                                 
        </div>
</section>
          
          <section class="section parallax-container" data-parallax-img="/images/bg-image-1.jpg">
        <div class="parallax-content section-lg context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-between align-items-center row-20">
              <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                <div class="cta-classic">
                  <h4 class="cta-classic-title wow fadeInLeft">
Nos ajustamos a tu presupuesto </h4>
                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Soluciones eficientes de PC.</p>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-4 col-xl-3"><a class="button button-lg button-primary button-winona wow fadeInUp" href="/contact/#cotizacion" >Solicitar presupuesto</a></div>
            </div>
          </div>
        </div>
      </section>
      
             <!-- Section precios-->

<div class="modal modal-1" id="sol_hogar" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%; ">Soluciones para el hogar</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_pc_hogar2.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una solución para el hogar?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Las PC de escritorio son una herramienta básica en la vida de cualquier persona y han demostrado con el paso de los años que son imprescindibles. Recrea la manera de trabajar y entretenerse desde tu hogar con componentes adecuados acorde a sus necesidades.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

<div class="modal modal-1" id="sol_trabajo" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%; ">Soluciones para el trabajo</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_pc_oficina.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una solución para el trabajo?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Durante un tiempo se pensó que serian reemplazadas, pero gracias a la disminución en el precio de sus componentes y su buena calidad, se mantienen vigentes en el mercado. Estos equipos tienen una impresionante capacidad de respuesta haciendo que las labores del se aprovechen optimizando los tiempos de trabajo.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

<div class="modal modal-1" id="sol_gamer" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%; ">Solución para gamers</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_pc_gamer2.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una solución gamer?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Los aspectos que hacen un equipo gamer algo especial, es disfrutar de la tecnología con mayor potencia haciendo de nuestra vida digital una experiencia única. Imágenes perfectas en todo momento en uno o más monitores, un desempeño profesional y muy potente.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

<div class="modal modal-1" id="sol_personalizadas" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%; ">Soluciones personalizadas</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_pc_personalizable.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una solución personalizada?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una de las grandes ventajas es que podemos escoger cada una de las partes que la integran, con el propósito de decidir las características técnicas que debe tener dependiendo de función que realizara el equipo.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

          

@stop