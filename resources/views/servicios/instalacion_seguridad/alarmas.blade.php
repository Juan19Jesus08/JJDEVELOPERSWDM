@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_alarmas_car.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Instalación de alarmas.</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">Mantente siempre seguro.</h5>
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
                            <div class="box-icon-classic-icon linearicons-shield"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Seguridad</h5>
                            <p class="box-icon-classic-text">Evita tener intrusos y que no te tomen por sorpresa en tu hogar o negocio. Hazlo más seguro en todo memento .</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-wifi  "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Control</h5>
                            <p class="box-icon-classic-text"> Vigila tu negocio u hogar a distancia. Control a distancia desde cualquier lugar por conectividad WIFi o GSM.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-wallet icon3"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Rentabilidad</h5>
                            <p class="box-icon-classic-text">Disfruta de los beneficios de tener asegurado tu negocio o local. El costo en cualquier sistema de alarma se compensa al evitar un robo.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-home icon3 "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Tranquilidad</h5>
                            <p class="box-icon-classic-text">Sal de tu casa o negocio con la tranquilidad de que  queda protegido en todo momento, inclusive si cortan la luz eléctrica.</p>
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
              
               <article class="services-classic" data-toggle="modal" data-target="#alarmas_alambrico">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_alarma_cable.jpg" 
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-lan2 " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Instalación de alarmas vía alámbrica</a></h5>
                    <p class="services-classic-text">Instalamos y configuramos el equipo para tu negocio o casa por cable, siempre cuidando la estética.</p>
                    </div>            
            </div>
            </div>
            </article>

            <!-- Services Creative-->
              
               <article class="services-classic" data-toggle="modal" data-target="#alarmas_inalambrico">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_alarma_wifi2.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-wifi  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Instalación de alarmas vía inalámbrica</a></h5>
                    <p class="services-classic-text">Instalamos y configuramos el equipo para tu negocio o casa en red vía wifi.<br/>
                      <br/></p>
                    </div>
                  </div>
            </div>
            </article>
            <!-- Services Creative-->
              
               <article class="services-classic" data-toggle="modal" data-target="#monitoreo_aplicacion">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_monitoreo_aplicacion.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-laptop-phone  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Monitoreo por aplicación</a></h5>
                    <p class="services-classic-text">Puedes ver lo que ocurre por medio de una aplicación en tu dispositivo movil o en tu equipo.<br/>
                      <br/>
                      </p>
                    </div>
                  </div>
               
              </div>
            </article>
              
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
BRINDANDO UN NIVEL DE CALIDAD Y SERVICIOS INCOMPARABLES</h4>
                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Soluciones eficientes en seguridad.</p>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-4 col-xl-3"><a class="button button-lg button-primary button-winona wow fadeInUp" href="/contact/#cotizacion" >Solicitar presupuesto</a></div>
            </div>
          </div>
        </div>
      </section>
      
             <!-- Section de los precios-->
<div class="modal modal-1" id="alarmas_alambrico" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%;">Alarmas alámbricas</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_alarma_cable.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una instalación de alarmas vía alámbrica?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Las alarmas son dispositivos de alerta y persuación; sus dos objetivos principales son:
                                    Alertar al propietario o personal de seguridad sobre una violación de seguridad
                                    Activar una alerta sonora/lumínica con altos niveles de sonoridad o incandescencia para disuadir al intruso de continuar con su actividad.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Algunas ventajas de una instalación alámbrica son:
                                     Mayor velocidad de conexión<br/>
                                     Precio accesible<br/>
                                     Mayor cobertura<br/>
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

<div class="modal modal-1" id="alarmas_inalambrico" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:5%;">Alarmas inalámbricas</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_alarma_wifi2.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una instalación de alarmas vía inalámbrica?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Las alarmas inalámbricas son sistemas de alarma que no necesitan cables para conectar los detectores y sensores al panel de control, sino que se comunican por señales. Las alarmas inalámbricas dan mucha libertad.
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Algunas ventajas de una instalación inalámbrica son:
                                    Ahorro en costo de instalación<br/>
                                     Fácil inctalación<br/>
                                     Mayor discreción<br/>
                                     Mayor flexibilidad en la ubicación
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="monitoreo_aplicacion" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:5%;">Monitoreo por aplicación</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_monitoreo_aplicacion.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es monitoreo por aplicación?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Hoy en día la tecnología puede mejorar la seguridad a un costo muy reducido. Actualmente es posible ofrecer seguridad mientras esté fuera de su propiedad, siendo capaz de<b> vigilar</b> lo que ocurre desde su <b>dispositivo móvil</b> en <b>tiempo real</b>.
                               Las alarmas pueden emitir alertas vía telefónica a un teléfono particular (voz y sms), a una serie de contactos predefinidos y a una central de monitoreo. La central, mediante contrato previo, puede apoyar en la atención de emergencias reportadas por el sistema.
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

@stop