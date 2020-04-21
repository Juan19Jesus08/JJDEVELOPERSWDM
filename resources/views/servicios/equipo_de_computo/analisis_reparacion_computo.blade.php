@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/slide-2-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Análisis y reparación de equipo de cómputo</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">Mantén tu equipo de cómputo trabajando en un estado óptimo.</h5>
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
                            <div class="box-icon-classic-icon linearicons-chart-settings"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Óptimo</h5>
                            <p class="box-icon-classic-text">Que no te desespere tu equipo. Haz tu equipo más rápido y eficiente, dándole la rapidez que se merece y aprovechando su máximo rendimiento.</p>
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
                            <h5 class="box-icon-classic-title">Actualizado</h5>
                            <p class="box-icon-classic-text">Manten tu equipo actualizado. Corrige esos errores de software antiguos y hazlo menos susceptible frente a ataques.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-broom"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Limpieza</h5>
                            <p class="box-icon-classic-text">Evita saturar tu computadora. Deshazte de ese software que ya no utilizas y de esos archivos inecesarios que provocan un funcionamiento más lento.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-heart"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Mayor vida útil</h5>
                            <p class="box-icon-classic-text">Dale una segunda oportunidad a tu computadora y no cambies antes de tiempo. Preserva tu equipo de cómputo por mayor tiempo y dale más utilidad.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-shield-check"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Seguridad</h5>
                            <p class="box-icon-classic-text">Garantiza la seguridad de tu información. Protégete de intrusos no deseados y conserva la integridad tu equipo.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-oil-pressure"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Prevenir problemas</h5>
                            <p class="box-icon-classic-text">Evita que tu computadora falle cuando más la necesites y dale el mantenimiento que merece. Corrige a tiempo y anticipa posibles errores evitando lo peor. </p>
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
              <article class="services-classic" data-toggle="modal" data-target="#mantenimiento_preventivo">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_tecla.jpg" 
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-warning" style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a href="#">Mantenimiento preventivo</a></h5>
                    <p class="services-classic-text">Garantiza el buen funcionamiento de tu computadora.</p>
                    </div>            
            </div>
            </div>
            </article>
              </div>

            <!-- Services Creative-->
              
               <div class="efecto_puntero">
              <article class="services-classic" data-toggle="modal" data-target="#diagnostico_reparacion">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/reparacion.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-screwdriver " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a href="#">Diagnóstico y reparación</a></h5>
                    <p class="services-classic-text">Identificamos y corregimos errores de tu computadora.</p>
                    </div>
                  </div>
            </div>
            </article>
              </div>
            <!-- Services Creative-->
              
               <div class="efecto_puntero">
              <article class="services-classic" data-toggle="modal" data-target="#configuracion_instalacion">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_instalacion.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-cog " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a href="#">Configuración e instalación</a></h5>
                    <p class="services-classic-text">Instalamos y configuramos tus programas.</p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->
              
              <div class="efecto_puntero">
              <article class="services-classic" data-toggle="modal" data-target="#recuperacion_datos">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_recuperacion.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-database " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a href="#">Recuperación de datos</a></h5>
                    <p class="services-classic-text">Recuperamos tu información.<br/><br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->

              
               <div class="efecto_puntero">
              <article class="services-classic" data-toggle="modal" data-target="#eliminacion_virus">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_virus.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span  class="services-classic-icon linearicons-bug " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a href="#">Eliminación de virus</a></h5>
                    <p class="services-classic-text">Remueve cualquier virus con nuestra ayuda.</p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              

              
            <!-- Services Creative-->
                <!--<article class="services-classic">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_soporte_remoto.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-remote-control " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a href="#">Asistencia Remota</a></h5>
                        <p class="services-classic-text"> Solucionamos tu problema a distancia conectandonos a tu computadora.</p>
                      </div>
                    </div>
                  </div>
            </article>-->

                    
              
              
            <!-- Services Creative-->
         <div class="efecto_puntero">
              <article class="services-classic" data-toggle="modal" data-target="#asistencia_sitio">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_asistencia.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-users2 " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a href="#">Asistencia en sitio</a></h5>
                        <p class="services-classic-text"> A tu lado solucionamos tu problema.<br/><br/></p>
                      </div>
                    </div>
                  </div>
                <!--<h5 class="services-classic-title">Asistencia en sitio</h5>
                <p class="services-classic-text">A tu lado solucionamos tu problema.</p>
                <div class="unit-left"><span class="services-classic-icon linearicons-site-map"></span></div>-->
            </article>
              </div>
              
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
                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Soluciones eficientes de reparacion de PC.</p>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-4 col-xl-3"><a class="button button-lg button-primary button-winona wow fadeInUp" href="/contact/#cotizacion" >Solicitar presupuesto</a></div>
            </div>
          </div>
        </div>
      </section>
      
             <!-- Section de los precios-->
<div class="modal modal-1" id="mantenimiento_preventivo" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Mantenimiento preventivo</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_tecla.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es mantenimiento preventivo?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Es el conjunto de actividades dirigidas a proteger los equipos de computo de posibles fallas, utilizando métodos de limpieza física y métodos basados en el uso de software para así obtener un optimo desempeño de los equipos.
                                 </p>
                               <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="diagnostico_reparacion" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Diágnostico y reparación</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/reparacion.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es un diágnostico?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                    El diagnóstico es el análisis que se realiza para determinar cualquier falla y sus posibles causas, esto se hace sistemáticamente para obtener mejores resultados y aplicar una correcta reparación.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>  

<div class="modal modal-1" id="configuracion_instalacion" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Configuración e instalación</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_instalacion.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una configuración e instalación?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">La configuración de un programa o elemento del equipo de computo esta por lo general ligada a la instalación del mismo. Esta configuración será lo que determine cómo, a través de que medios y con qué recursos funcionará el elemento.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>  

<div class="modal modal-1" id="recuperacion_datos" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Recuoeración de datos</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_recuperacion.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una recuperación de datos?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Es un procedimiento para recuperar datos del disco duro de un equipo que se han perdido debido a un fallo del sistema, a un mal funcionamiento mecánico o borrados accidentalmente de una computadora.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>  

<div class="modal modal-1" id="eliminacion_virus" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Eliminación de virus</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_virus.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una eliminación de virus?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una de las grandes problemáticas que desde siempre han estado asociadas a los equipos informáticos son sin lugar a dudas los virus, son uno de los principales riesgos de seguridad, no solo por el efecto negativo que el malware ocasiona al rendimiento de nuestro equipo, también por el peligro de que nuestros datos e información personal caigan en manos de terceros malintencionados.
                                 </p>
                                 <hr>
                               
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>  

<div class="modal modal-1" id="asistencia_sitio" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Asistencia en sitio</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_asistencia.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es asistencia en sitio?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Para un mejor servicio, contamos con asistencia remota en caso de problemas relacionados con software o el sistema operativo garantizando un servicio inmediato y de calidad, en casos de requerirse asistencia personal vamos hasta el sitio.
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