@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_camara_principal2.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Videovigilancia cctv.</span></h3>
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
                            <h5 class="box-icon-classic-title">Tranquilidad</h5>
                            <p class="box-icon-classic-text">Siéntete seguro en todo momento. Observa lo que ocurra a tu alrededor, vigila y protege tu empresa u hogar a todo momento y no dejes que te tomen por sorpresa.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-wallet "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">No hay pagos mensuales</h5>
                            <p class="box-icon-classic-text">Disfruta de los beneficios de tener camáras de seguridad. Haciendo una única inversión, sin pagos mensuales por la obtención del servicio.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-home icon3"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Para interiores y exteriores</h5>
                            <p class="box-icon-classic-text">Que cualquier rincón quede cubierto. Ten vigilado lo que ocurre dentro o fuera de tu negocio u hogar.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-cog  "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Adaptable</h5>
                            <p class="box-icon-classic-text">Adaptable a las necesidades que tengas. Recibe el número de camáras y el almacenamiento que ocupes.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-earth"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Monitoreo a larga distancia</h5>
                            <p class="box-icon-classic-text">Vigila tu negocio u hogar a distancia. No importa si estas cerca o lejos, tenlo vigilado y está al pendiente de él.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                   <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-screen "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Alta resolución</h5>
                            <p class="box-icon-classic-text">Observa con detalle lo que ocurre. Vigila a todo momento con la mejor calidad y que no se te escape nada.</p>
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
              
               <article class="services-classic" data-toggle="modal" data-target="#cctv_alambrico">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_camara_red.jpg" 
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-lan2 " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Instalación de equipos CCTV vía alámbrica</a></h5>
                    <p class="services-classic-text">Instalamos y configuramos el equipo para tu negocio o casa por cable, siempre cuidando la estética.</p>
                    </div>            
            </div>
            </div>
            </article>

            <!-- Services Creative-->
              
               <article class="services-classic" data-toggle="modal" data-target="#cctv_inalambrico">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_camara_wifi3.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-wifi  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Instalación de equipos CCTV vía inalámbrica</a></h5>
                    <p class="services-classic-text">Instalamos y configuramos el equipo para tu negocio o casa en red vía wifi.<br/>
                      <br/></p>
                    </div>
                  </div>
            </div>
            </article>
            <!-- Services Creative-->
              
               <article class="services-classic" data-toggle="modal" data-target="#ver_internet">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_ver_lugar.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-earth  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Visualización a través de internet</a></h5>
                    <p class="services-classic-text">Puedes ver lo que ocurre desde cualquier lugar por internet.<br/>
                      <br/>
                      </p>
                    </div>
                  </div>
               
              </div>
            </article>
              
            <!-- Services Creative-->
              
               <article class="services-classic" data-toggle="modal" data-target="#ver_pantalla">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_pantalla.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-screen " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Visualización a través de una pantalla</a></h5>
                    <p class="services-classic-text">Observa lo que ocurre  desde una pantalla o un monitor.<br/>
                      <br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              
                 <article class="services-classic" data-toggle="modal" data-target="#almacenamiento">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_dvr.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-hdd  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a href="#">Almacenamiento</a></h5>
                    <p class="services-classic-text">Te ofrecemos la cantidad de alamacenamiento que requieras para tu instalación.<br/>
                      <br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              
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
<div class="modal modal-1" id="cctv_alambrico" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Instalación de equipos CCTV vía alámbrica</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_camara_red.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una instalación de equipos CCTV vía alámbrica?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Un <b>CCTV</b> o circuito cerrado de televisión es una <b>instalación de cámaras</b> que generan un circuito de imágenes.
                                Un <b>sistema CCTV</b> puede adaptarse a las necesidades de cada cliente , éstas pueden ser <b>internas  o externas, estáticas o controladas remotamente</b>. Además con una <b>conexión a internet</b> puedes vigilar tu propiedad incluso cuando estés fuera.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Algunas ventajas de una instalación alámbrica son:
                                     <br/>
                                     <br/>
                                     Mayor velocidad de conexión<br/>
                                     Precio accesible<br/>
                                     Mayor cobertura<br/>
                                     No requiere alimentación
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

<div class="modal modal-1" id="cctv_inalambrico" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Instalación de equipos CCTV vía inalámbrica</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_camara_wifi3.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una instalación de equipos CCTV vía alámbrica?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Un <b>CCTV</b> o circuito cerrado de televisión es una <b>instalación de cámaras</b> que generan un circuito de imágenes.
                                Un <b>sistema CCTV</b> puede adaptarse a las necesidades de cada cliente , éstas pueden ser <b>internas  o externas, estáticas o controladas remotamente</b>. Además con una <b>conexión a internet</b> puedes vigilar tu propiedad incluso cuando estés fuera.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Algunas ventajas de una instalación inalámbrica son:
                                     <br/>
                                     <br/>
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

<div class="modal modal-1" id="ver_internet" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Visualización a través de internet</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_ver_lugar.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es visualizar a través de internet?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Hoy en día la tecnología puede mejorar la seguridad a un costo muy reducido. Actualmente es posible ofrecer seguridad mientras esté fuera de su propiedad, siendo capaz de<b> vigilar</b> lo que ocurre desde su <b>dispositivo móvil</b> en <b>tiempo real</b>.
                               Además, si se cuenta con un sistema de sensores y éste detecta movimiento en zonas donde no debería haber, la cámara podría tomar una captura instantánea y <b>enviar un correo electrónico</b> al propietario.
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="ver_pantalla" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Visualización a través de una pantalla</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_pantalla.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es visualizar a través de una pantalla?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Para que el video se vea con una una buena calidad, se necesita contar con una buena pantalla cpara que se ajuste a tus necesidades.<br/>                            
                                    Con una pantalla conectada a un sistema de videovigolancia, puede permitirle monitorear varias cámaras a la ves en la misma pantalla y mantener vigilado lo que ocurre en su propiedad. 
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="almacenamiento" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Almacenamiento</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_dvr.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es almacenamiento?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                    Los sistemas digitales de videovigilancia actuales ofrecen una gran cantidad de funciones avanzadas.
                                    Un criterio particularmente importante y que puede afectar el valor de un sistema de grabación de un video para vigilancia, es la <b>capacidad de almacenamiento</b>.<b> Mayor resolución</b>, <b>cantidad de cámaras</b>,<b>cantidad de videos archivados</b>, son aspectos a considerar a la hora de pensar en el <b>almacenamiento requerido</b>.
                                </p>
                                <hr>
                                 <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                     A fin de brindar un desempeño en un entorno de seguridad, estos sistemas deben contar con una cantidad de almacenamiento suficiente y satisfacer estos tres parámetros fundamentales: <b>cantidad de videos y su duración</b>,<b>calidad de la imagen de video</b>,<b>cantidad de videos archivados</b>.
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>
          

@stop