@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_pc_escritorio.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Desarrollo de escritorio</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">Agiliza tus procesos.</h5>
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
                            <div class="box-icon-classic-icon linearicons-rocket  "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Velocidad</h5>
                            <p class="box-icon-classic-text">Automatiza los procesos dentro de tu empresa y ahorra tiempo. Simplifica los procesos de tu negocio al máximo, reduce la carga de trabajo, sé más rápido y deja a tus clientes contentos. </p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-shield "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Seguridad</h5>
                            <p class="box-icon-classic-text">Reduce fallas en tu negocio. Utiliza aplicaciones para volver más seguros tus procesos, cuida la información de tus clientes y de tú empresa.</p>
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
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Algunas soluciones que ofrecemos</span></h3>
          <div class="owl-carousel dots-style-2" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-autoplay="false" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
              
              <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#solucion_escritorio">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_solucion_web.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-lamp  " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a>Soluciones de escritorio</a></h5>
                        <p class="services-classic-text">Descríbenos tu proyecto, nos encargamos de hacerlo realidad.<br/><br/></p>
                      </div>
                    </div>
                  </div>
                <!--<h5 class="services-classic-title">Asistencia en sitio</h5>
                <p class="services-classic-text">A tu lado solucionamos tu problema.</p>
                <div class="unit-left"><span class="services-classic-icon linearicons-site-map"></span></div>-->
            </article>
              </div>
              
                          <!-- Services Creative-->
        <div class="efecto_puntero">
        <article class="services-classic" data-toggle="modal" data-target="#reporte">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_reporte.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-file-charts " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a>Reportes</a></h5>
                        <p class="services-classic-text">Mantente informado del estado de tu empresa con estadisticas y graficos.<br/><br/></p>
                      </div>
                    </div>
                  </div>
                <!--<h5 class="services-classic-title">Asistencia en sitio</h5>
                <p class="services-classic-text">A tu lado solucionamos tu problema.</p>
                <div class="unit-left"><span class="services-classic-icon linearicons-site-map"></span></div>-->
            </article>
              </div>
              
            <!-- Services Creative-->

            <!-- Services Creative-->
              
              
            <!-- Services Creative-->
              <div class="efecto_puntero">
               <article class="services-classic"  data-toggle="modal" data-target="#punto_venta">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_punto_venta.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-cashier  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Punto de venta</a></h5>
                    <p class="services-classic-text">Facilita y lleva el manejo  de tu negocio al siguiente nivel.<br/><br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->

              <div class="efecto_puntero">
                      <article class="services-classic"  data-toggle="modal" data-target="#sistema_cliente">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_sistema_control_cliente.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span  class="services-classic-icon linearicons-profile " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Sistema de control de clientes</a></h5>
                    <p class="services-classic-text">Lleva un registro de tus clientes y aumenta tu productividad.</p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>

              
            <!-- Services Creative-->
                <div class="efecto_puntero">
                <article class="services-classic" data-toggle="modal" data-target="#plataforma_educativa">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_plataforma_educativa.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-graduation-hat  " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a>Plataforma educativa</a></h5>
                        <p class="services-classic-text">Sigue aprendiendo sin importar el lugar donde estés.<br/><br/></p>
                      </div>
                    </div>
                  </div>
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
                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Soluciones de escritorio.</p>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-4 col-xl-3"><a class="button button-lg button-primary button-winona wow fadeInUp" href="/contact/#cotizacion" >Solicitar presupuesto</a></div>
            </div>
          </div>
        </div>
      </section>
      
             <!-- Section de precios-->

<div class="modal modal-1" id="punto_venta" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Punto de venta</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_punto_venta.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es un punto de venta?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">En la actualidad, implementar un punto de venta no es un lujo, sino una necesidad para mejorar la <b>administración</b> del negocio. Este sistema es el encargado de realizar todo el <b>proceso de venta</b>, desde la <b>captura de productos</b>, <b>emisión de comprobantes</b>, <b>control de inventario</b>, <b>emisión de reportes</b>, entre otras
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                   Un <b>punto de venta</b> puede ayudar a los dueños a administrar y automatizar inventarios, transacciones y ofertas. Además de mejorar la <b>eficiencia</b> de los empleados.
                                 </p>
                                <hr>
                                <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                   El <b>punto de venta</b> se compone de varios componentes, basicamente <b>hardware</b> y <b>software</b>. El software de éste puede ser hecho a la medida (desarrollo especial y único para una empresa) o comercial (desarrollados para giros específicos de negocio).
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>


<div class="modal modal-1" id="sistema_cliente" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Sistema control de clientes</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_sistema_control_cliente.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es un sistema de control de clientes?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Un <b>sistema de control de clientes</b> es un recurso que, utilizado adecuadamente puede ayudar a la <b>gestión</b> de clientes, siendo bastante eficaz para empresas de cualquier sector y tamaño. 
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                  Éste ayuda a mejorar los servicios de <b>atención de cliente</b>, asi como mejorar la <b>comunicación</b> con el cliente.
                                Estos software nos ayudan en el día a día con la <b>gestión</b>, <b>monitorización</b>, etc de los datos e información que está presente en la empresa.
                                 </p>
                               
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>


<div class="modal modal-1" id="plataforma_educativa" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Plataforma educativa</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_plataforma_educativa.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una plataforma educativa?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una <b>platafoma educativa</b> web es un entorno virtual en el que existen distintas funcionalidades enfocadas para <b>optimizar tiempo</b> y <b>ahorrar dinero</b> a los <b>centros educativos</b>.  
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                 Éstos responden a las necesidades de gestión ya sea a nivel administrativo, comunicación y <b>proceso de enseñanza</b>. Además provee espacios de trabajo para facilitar el intercambio de información entre <b>docentes</b> y <b>alumnos</b>.
                                 </p>
                               
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>


<div class="modal modal-1" id="reporte" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Reportes</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_reporte.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es un reporte?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Un <b>reporte</b> es un <b>informe o una noticia</b>. Este tipo de documento (que puede ser impreso, digital, audiovisual, etc.) su función es aplicar un formato determinado a los datos para mostrarlos por medio de un diseño atractivo y que sea fácil de interpretar.  
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                Las empresas para tener un crecimiento deben contar con informes de inventario, producción y ventas con los cuales puedan descubrir tendencias y oportunidades de mejora.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                     Beneficios de tener una aplicación de reportes en tu empresa<br/>
                                     Mayor comunicación.<br/>
                                     Incremento .<br/>
                                     Mayor competividad.<br/>
                                     Precisión en el área de finanzas.

                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="solucion_escritorio" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;">Soluciones de escritorio</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_solucion_web.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una solución de escritorio?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una <b>solución de  escritorio</b> es una herramienta similar a una aplicación de web o móvil. Para hacer uso de ella se tiene que instalar el programa en cada computadora que se ocupe y ejecutar. 
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                               Dependiendo la aplicación puede funcionar con internet o sin internet. La razón para tener una solución de escritorio es la necesidad de resolver un problema, ahorrar dinero y tiempo para los usuarios.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                     Ventajas<br/>
                                     Tiempo de respuesta más rápido.<br/>
                                     Permite hacer uso de un mayor número de recursos del equipo.<br/>
                                     Ofrecen más estabilidad y posibilidad de recuperación en fallo.

                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>



          

@stop