@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_redes4.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Instalación de red de computadoras.</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">Mantente siempre conectado.</h5>
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
                            <p class="box-icon-classic-text">No pongas en riesgo la seguridad de tu negocio y obtén más control. Bloquea esos sitios que no estén permitidos y no permitas que intrusos se conecten a la red.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-lan2"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Connectividad</h5>
                            <p class="box-icon-classic-text">Evita que tus trabajadores se queden sin red. Lleva la conectividad a esos espacios en donde no hay red. </p>
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
                            <h5 class="box-icon-classic-title">Agilidad</h5>
                            <p class="box-icon-classic-text">Haz más ágil los procesos dentro de tu empresa y ahorra tiempo. Conecta tus dispositivos en red y facilita la comunicación de tus usuarios.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-bag-dollar "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Reduce costos</h5>
                            <p class="box-icon-classic-text">No hagas gastos innecesarios. No compres dispositivos de más, compártelos con los demás y dale  más espacio a tu local.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-watch"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Fiabilidad</h5>
                            <p class="box-icon-classic-text">Mantente informado de lo que sucede en tu empresa. Ten acceso a los datos de tu empresa a cualquier hora.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                   <!-- <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-oil-pressure"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Organización</h5>
                            <p class="box-icon-classic-text">Evita que tu computadora falle cuando más la necesites y dale el mantenimiento que merece. Corrige a tiempo y anticipa posibles errores evitando lo peor. </p>
                          </div>
                        </div>
                      </article>
                    </div>-->
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
               <article class="services-classic" data-toggle="modal" data-target="#diseño_redes">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_diseño.jpg" 
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-palette " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Diseño de redes</a></h5>
                    <p class="services-classic-text">Te proponemos un diseño de red que se adapte a tus necesidades.<br/>
                      <br/></p>
                    </div>            
            </div>
            </div>
            </article>
              </div>

            <!-- Services Creative-->
              
               <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#consultoria">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_consultoria.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-pencil5 " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Consultoría</a></h5>
                    <p class="services-classic-text">Te damos soluciones al problema de tu conectividad.<br/>
                      <br/></p>
                    </div>
                  </div>
            </div>
            </article>
              </div>
            <!-- Services Creative-->
              
                <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#instalacion_inalambrica">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_inalambrica.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-wifi  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Instalación inalambrica</a></h5>
                    <p class="services-classic-text">Nos encargamos de instalar y configurar tus equipos en red vía wifi.<br/>
                      <br/>
                      </p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->
              
                <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#instalacion_alambrica">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_alambrico.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-lan2 " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a href="#">Instalación alambrica</a></h5>
                    <p class="services-classic-text">Nos encargamos de instalar y configurar tus equipos en red cableados, manteniendo la estetica.</p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
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
                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Soluciones eficientes en red.</p>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-4 col-xl-3"><a class="button button-lg button-primary button-winona wow fadeInUp" href="/contact/#cotizacion" >Solicitar presupuesto</a></div>
            </div>
          </div>
        </div>
      </section>
      
             <!-- Section de precios-->

<div class="modal modal-1" id="diseño_redes" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Diseño de redes</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_diseño.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es un diseño de red?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">El diseño de una red informática es determinar la estructura física de la red, un buen diseño es fundamental para evitar problemas de pérdida de datos, caídas continuas de la red y problemas de lentitud en el procesamiento y transferencia de los datos.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 


<div class="modal modal-1" id="consultoria" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Consultoría</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_consultoria.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una consultoría?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Ya sea que usted posea una red de datos mediana o grande, o esté en proyecto de implementarla, nosotros lo asesoramos para que puede desarrollarla y explotarla de una manera óptima, de acuerdo a los requerimientos y necesidades que impliqué su rubro de negocios.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

<div class="modal modal-1" id="instalacion_inalambrica" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Instalación inalámbrica</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_inalambrica.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una instalación inalámbrica?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una red inalámbrica es aquella que posibilita la conexión de dos o más equipos entre sí, sin que intervengan cables. Estas permiten una gran movilidad a los usuarios dando grandes posibilidades de servicio y productividad.
                                 </p>
                                 <hr>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div> 

<div class="modal modal-1" id="instalacion_alambrica" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#28bd25; ">
               <h5 style="color:white;">Instalación alámbrica</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_alambrico.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una instalación alámbrica?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">La red compuesta de cableado se denomina LAN y se comunican por cables de datos basada en ethernet. Las redes alámbricas son mejores cuando se requiere transferir grandes cantidades de datos a altas velocidades.
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