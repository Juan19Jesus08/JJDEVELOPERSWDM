@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_asistencia_remota.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Asistencia remota</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">Solucionamos tus errores a distancia.</h5>
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
                            <div class="box-icon-classic-icon linearicons-couch"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title"> Comodidad</h5>
                            <p class="box-icon-classic-text">No vengas directamente. Te ayudamos a solucionar tus errores desde donde tu te encuentres con una conexión a internet.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-rocket"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Velocidad</h5>
                            <p class="box-icon-classic-text">Dale solución inmediatamente a tus problemas. Ten un tiempo de respuesta mas rápido y corrige tus errores.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-wallet"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Rentabilidad</h5>
                            <p class="box-icon-classic-text">No gastes de más en transporte y en tu tiempo. Dale solución inmediatamente a tus equipos de cómputo.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-book "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Aprendizaje</h5>
                            <p class="box-icon-classic-text">Aprende solucionar errores que te sucedan. Observe en tiempo real  como solucionamos tu problema y aprende de ello.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-calendar-full"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Flexibilidad</h5>
                            <p class="box-icon-classic-text">Adaptable tus horarios flexibles. Resuelve los problemas de tu equipo en el momento que mas te adecúe .</p>
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
              <article class="services-classic" data-toggle="modal" data-target="#optimo">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_reloj.jpg" 
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-clock " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Optimización</a></h5>
                    <p class="services-classic-text">Optimizamos tu equipo para que sea más eficiente.<br/><br/></p>
                    </div>            
            </div>
            </div>
            </article>
              </div>

            <!-- Services Creative-->
              
               <div class="efecto_puntero">
              <article class="services-classic" data-toggle="modal" data-target="#dispositivos">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_impresora.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-printer" style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Instalación y configuración de  dispositivos</a></h5>
                    <p class="services-classic-text">Instalamos y configuramos tus dispositivos.<br/></p>
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
                    <h5 class="services-classic-title"><a >Configuración e instalación</a></h5>
                    <p class="services-classic-text">Instalamos y configuramos tus programas.<br/><br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->
              
              <div class="efecto_puntero">
              <article class="services-classic" data-toggle="modal" data-target="#limpieza">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_error.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-broom " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Limpieza de errores en sistema operativo</a></h5>
                    <p class="services-classic-text">Corregimos el mal funcionamiento de tu computadora.</p>
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
                    <h5 class="services-classic-title"><a >Eliminación de virus</a></h5>
                    <p class="services-classic-text">Remueve cualquier virus con nuestra ayuda.<br/><br/></p>
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
<div class="modal modal-1" id="optimo" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:30%;">Optimización</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_reloj.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es optimización?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">La optimización es hacer que una tarea se realice más rápidamente haciendo que consuma menos memoria. Se hace siempre con respecto al tiempo de ejecución de los programas el espacio del disco duro.
                                 </p>
                               <hr>
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                    Tipos de optimización más comunes son: <br/>
                                    Limpieza de archivos y programas.<br>/>
                                    Desfragmentación de disco.<br/>
                                    Borrar datos temporales.<br/>
                                    Eliminar las tareas que se ejecutan en segundo plano.<br/>
                                    Actualizar tus programas.
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="dispositivos" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%;">Instalación y configuración de dispositivos</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_impresora.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una instalación y configuración de dispositivos?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                   Los dispositivos o periféricos son elementos de hardware que permiten el ingreso y salida de datos de la computadora, éstos dan la posibilidad de aumentar la utilidad de la misma. Algunos periféricos no requieren de una instalación especial, basta con conectarlos y comenzaran a funcionar. 
                                 </p>
                                 <hr>
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                Entre los más comunes son: <br/>mouse, monitor, tarjeta de memoria, memoria USB, teclado.<br/>
                                Al contrario de los periféricos antes mencionados, hay algunos otros que, si requieren de una instalación, además de que, si llegaran a configurar de una mala manera, éstos pueden llegar a presentar problemas entorpeciendo el funcionamiento de éstos.<br/> Los dispositivos más comunes son:<br/> impresora, escáner, conexiones de video, lectores biométricos.

                                </p>
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
               <h5 style="color:white;margin-left:10%;">Configuración e instalación</h5>
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

<div class="modal modal-1" id="limpieza" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%;">Limpieza de error en sistema operativo</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_error.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una limpieza de error en sistema operativo ?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Aunque los errores en el sistema operativo son más comunes de lo que se pueda pensar, ya sea por una mala instalación del sistema operativo o programa, una actualización que haya salido mal, etc. pueden provocar el mal funcionamiento de la computadora.
                                  <p/>
                                  <hr>
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                Es importante corregirlos para garantizar un estado óptimo de la misma. Los errores pueden presentarse a manera de mensajes de error, bloqueos de la computadora, reinicios inesperados, alentamiento de la misma, pudiendo llegar a ser frustrante.
                                </p>
                                 <hr>
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                    Soluciones más comunes:<br/>
                                    Eliminar datos de navegación;
                                    Corregir una mala instalación del sistema operativo;
                                    Recuperar datos perdidos;
                                    Desinstalación de software;
                                    Búsqueda de actualizaciones;
                                    Desfragmentación del disco duro;

                                </p>
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
               <h5 style="color:white;margin-left:10%;">Eliminación de virus</h5>
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


@stop