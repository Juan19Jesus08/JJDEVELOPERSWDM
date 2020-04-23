@extends('welcome')
@section('contenido')
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_mobil13.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Desarrollo móvil</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">Hazte notar e incrementa tus ganancias.</h5>
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
                            <div class="box-icon-classic-icon linearicons-eye "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Mayor visibilidad</h5>
                            <p class="box-icon-classic-text">Hazte notar y llega a un público más amplio. Publica tu aplicación en la tienda, se una de las favoritas de la gente y capta la atención de clientes de otros lugares. </p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-smartphone-notification "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Notificaciones</h5>
                            <p class="box-icon-classic-text">No te olvides de tus clientes. Mantén a tus usuarios siempre informados con novedades, avisos, ofertas y promociones.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                      
                      <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-bullhorn  "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Promover tus servicios</h5>
                            <p class="box-icon-classic-text">Aprovecha las herramientas de la tecnologia. Proporciona descripciones detalladas de tus productos y/o servicios.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                      
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-store  "></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title">Canal de venta</h5>
                            <p class="box-icon-classic-text">Que la tecnología esté de tu lado. Amplifica tus ventas acercando tus servicios a tus clientes a través del dispositivo más utilizado.</p>
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
              
        <div class="efecto_puntero">                  <!-- Services Creative-->
        <article class="services-classic" data-toggle="modal" data-target="#solucion_movil">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_solucion_movil.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-lamp  " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a >Aplicaciones móviles personalizadas</a></h5>
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
               <article class="services-classic" data-toggle="modal" data-target="#gimnasio">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_gimnasio.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-dumbbell" style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Gimnasio</a></h5>
                    <p class="services-classic-text">Haz que tus clientes puedan realizar pagos, armar sus horario de entrenamiento y ver la información de tus servicios.</p>
                    </div>
                  </div>
            </div>
            </article>
              </div>
              
               <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#tienda_online">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_tienda_movil.jpg" 
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-bag   " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Tienda online</a></h5>
                    <p class="services-classic-text">Logra que tus clientes realizen sus compras de una manera más sencilla desde cualquier parte del mundo y a cualquier hora.</p>
                    </div>            
            </div>
            </div>
            </article>
              </div>
            <!-- Services Creative-->
              
              <div class="efecto_puntero"> 
              <article class="services-classic" data-toggle="modal" data-target="#restaurantes">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_restaurante.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-chef    " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a>Restaurantes</a></h5>
                    <p class="services-classic-text">Ayda a tus clientes a realizar sus reservaciones de una forma más fácil y a ordenar su comida a domicilio.<br/><br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->
                <div class="efecto_puntero">
               <article class="services-classic" data-toggle="modal" data-target="#institucion_educativa">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_educacion.jpg"
                alt="Card image cap">
              <div class="card-body">
                     <div class="unit-left"><span class="services-classic-icon linearicons-graduation-hat  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Institución educativa</a></h5>
                    <p class="services-classic-text">Que tus alumnos sigan aprendiendo sin importar el lugar donde se encuentren.<br/><br/><br/></p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              
            <!-- Services Creative-->

                <div class="efecto_puntero">
                <article class="services-classic" data-toggle="modal" data-target="#hospitales">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_hospital.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span  class="services-classic-icon linearicons-heart-pulse  " style="font-size:50px;"></span></div>
                  <div class="unit-body">
                    <h5 class="services-classic-title"><a >Hospitales</a></h5>
                    <p class="services-classic-text">Haz que tus pacientes eviten largas filas, permíteles que realizen sus citas desde su casa, revisen horarios y vean la información de tus servicios.</p>
                    </div>
                  </div>
               
              </div>
            </article>
              </div>
              

              
            <!-- Services Creative-->
                <div class="efecto_puntero">
                <article class="services-classic" data-toggle="modal" data-target="#catalogo_productos">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_catalogo.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-store " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a >Catálogo de productos</a></h5>
                        <p class="services-classic-text">Muestra todos los productos y/o servicios que ofreces a tus clientes y haz que te conozcan.<br/><br/></p>
                      </div>
                    </div>
                  </div>
            </article>
              </div>
              
                          <!-- Services Creative-->
                <div class="efecto_puntero">
                <article class="services-classic" data-toggle="modal" data-target="#concesionarios">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_concesionario.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-car2  " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a>Concesionarios</a></h5>
                        <p class="services-classic-text">Muestra tu catálogo junto con sus características, horarios, e información en general de tu negocio.<br/><br/></p>
                      </div>
                    </div>
                  </div>
            </article>
              </div>
              
                                      <!-- Services Creative-->
                <div class="efecto_puntero">
                <article class="services-classic" data-toggle="modal" data-target="#eventos">
               <div class="card mb-2">
              <img class="card-img-top" src="/images/r_eventos.jpg"
                alt="Card image cap">
              <div class="card-body">
                      <div class="unit-left"><span class="services-classic-icon linearicons-ticket   " style="font-size:50px;"></span></div>
                      <div class="unit-body">
                        <h5 class="services-classic-title"><a href="#">Eventos</a></h5>
                        <p class="services-classic-text">Enseña a tus participantes los detalles de tu evento, horarios y actividades que habrá.<br/><br/></p>
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
                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Solución móvil.</p>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-4 col-xl-3"><a class="button button-lg button-primary button-winona wow fadeInUp" href="/contact/#cotizacion" >Solicitar presupuesto</a></div>
            </div>
          </div>
        </div>
      </section>
      
             <!-- Section de los precios-->
<div class="modal modal-1" id="solucion_movil" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:15%; ">Soluciones móviles</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_solucion_movil.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Qué es una aplicación móvil personalizada?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                Hoy en día, prácticamente todos contamos con un dispositivo móvil con en el que interactuamos diariamente para realizar nuestras tareas cotidianas, ya sea compra de productos, pagar en un restaurante, etc. Por ello, la adaptación a un entorno móvil es muy importante si nos queremos ajustar a los nuevos hábitos de los usuarios.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                 Grandes beneficios que aporta una aplicación móvil en un negocio son: ayuda a encontrar nuevos usuarios, mejora la relación con el usuario, ofrecen un canal de difusión con los clientes, fideliza a los clientes, permite enviar notificaciones o avisos, etc.
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="gimnasio" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:35%; ">Gimnasio</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_gimnasio.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para gimnasio?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">La tecnología abre oportunidades para hacer crecer tu negocio por medio de las aplicaciones móviles.
                               
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                              Disponer de una aplicación móvil para tu gimnasio puede ayudarte a ser descubierto por nuevos clientes. Además de que es una excelente herramienta para llevar una mejor relación con tus usuarios, pudiendo dar a conocer información acerca del establecimiento, tal como: horarios, servicios ofrecidos, avisos, costo de los servicios. De igual manera, permitir ver a los usuarios el estus de su suscripción, establecer y ver el seguimiento de rutinas de entrenamiento, definir dietas, entre muchas otras cosas más.
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>
 

<div class="modal modal-1" id="tienda_online" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:25%; ">Tienda online</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_tienda_movil.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para tienda online?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                               <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una aplicación de <b>tienda online</b> esta diseñada para que los clientes puedan <b>observar</b> y <b>comprar</b> productos o servicios que la empresa ofrezca. 
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                               Estudios demuestran que los usuarios utilizan sus smartphones los 7 días de la semana, los 365 días del año para ver productos o servicios y comprar.  
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                     Beneficios<br/>
                                     Mandar mensajes a tus clientes manteniéndolos al día de lo que ofreces.<br/>
                                     Es más útil para que el cliente pueda ver y comprar sin que pierda tiempo.<br/>
                                     Incrementa las ganancias de tu negocio.

                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="restaurantes" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:25%; ">Restaurantes</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_restaurante.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para restaurante?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">
                                   Una aplicación móvil de un <b>restaurante</b> es una herramienta para que tus clientes puedan comer los platillos de una manera más fácil así <b>solucionando problemas</b> que se presenten.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Ventajas<br/>
                                    Realizar reservaciones en el lugar donde estés sin ir al establecimiento.<br/>
                                    Pedir tus platillos favoritos y que te los puedan llevar hasta el lugar donde estés.
                                    Ver el menú y la información general.<br/>
                                    Incrementar tus ganancia.<br/>
                                    Evitar las llamadas a tu restaurante en las horas pico.<br/>
                                    Realizar pagos sin estar sacando dinero o la tarjeta.
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="institucion_educativa" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%; ">Institución educativa</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_educacion.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para institución educativa?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una aplicación para una institución educativa posibilita un aprendizaje en cualquier situación.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Ventajas<br/>
                                     Permiten el aprendizaje en cualquier contexto, dentro y fuera del aula. La vida se convierte en el escenario perfecto para el aprendizaje.<br/>
                                      influyan positivamente sobre la motivación del alumnado.<br/>
                                      permiten crear un entorno de aprendizaje más personalizado, adaptado a las necesidades concretas de cada alumno, fomentando el aprendizaje auto-dirigido.<br/>
                                    
                                 </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="hospitales" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:30%; ">Hospitales</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_hospital.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para hospital?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;"> Una aplicación movil de un <b>hospital</b> es una herramienta para  facilitarle el acceso a la salud de tus pacientes.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Ventajas.<br/>
                                     Consulta datos clínicos de tus pacientes e indicadores de gestión de calidad dondequiera que estés.<br/>
                                     Permite a tus pacientes sacar una cita sin formarse.<br/>
                                     Recuerdale a tus pacientes que dia y a que hora les toca su próxima cita.<br/>
                                     Mejora la atención del paciente.<br/>
                                     Mayor seguridad en los historiales clínicos.<br/>
                                     Observar la informacion general y horarios.<br/>
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="catalogo_productos" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:10%; ">Cátalogo de productos</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_catalogo.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para cátalogo de productos?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una aplicación móvil de un <b>catálogo de productos</b> es una herramienta diseñada para que tus clientes puedan ver los productos que ofreces en el lugar que este las 24 hrs del dia, 7 dias de la semana y 365 dias del año.
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Ventajas<br/>
                                     Incrementa tus ganacias.<br/>
                                     Incrementaras el numero de clientes.<br/>
                                     Geolocaliza en el mapa tu local, con indicaciones GPS para que los nuevos clientes no se pierdan.<br/>
                                     Comunicación con el cliente.
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="concesionarios" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:25%; ">Concesionario</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_concesionario.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para concesionario?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una aplicación para <b>concesionarios</b> es una herramienta diseñada para para concretar citas, realizar personalizaciones de vehículos, ofrecer un catálogo con imágenes y descripciones e incluso enviar presupuestos y facturas.
 
                                 </p>
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                     Ventajas<br/>
                                     Incrementar tus ganancias.<br/>
                                     Incrementar el número de clientes.<br/>
                                     Comunicación con tus clientes.<br/>
                                     Hacer reservas de vehículo por medio de citas.<br/>
                                     Vender desde cualquier lugar.<br/>
                                     Actualizar tu catálogo.<br/>
                                     Observar información general de tu negocio.
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>

<div class="modal modal-1" id="eventos" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="background:#0066BB; ">
               <h5 style="color:white;margin-left:35%; ">Eventos</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
                 <div class="modal-body" style="background:#F5F5F5;">
                    <div class="card mb-2">
                       <div class="unit flex-column flex-md-row align-items-center">
                          <div class="unit-left">
                             <img class="box-info-figure" src="/images/r_eventos.jpg" width="200px" height="200px">
                          </div>   
                                <div class="unit-body" style="margin-left:0;">
                                   <div class="box-info-content">
                                      <h5 class="box-info-title" >¿Por qué hacer una app móvil para eventos?</h5>
                                   </div>
                           </div>
                      </div>
                     <div class="card-body " >                      
                            <div class="info_card">
                                <p style="text-align: justify; line-height: 1.5; font-size:12px;">Una aplicación móvil para <b>eventos</b> es una herramienta desarrollada para que tu diseñes el evento que siempre has soñado ayudándote a organizarlo.
                                 <hr>
                                 <p style="text-align: justify;  line-height: 1.5; font-size:12px;">
                                    Ventajas<br/>
                                     Fomentar mucho más la interacción y participación de los asistentes.<br/>
                                     Indicar dónde se encuentra el lugar, los cambios de hora, las formas para llegar o hacerles llegar el pase de entrada al evento.<br/>
                                     Actualizar información, enviar notificaciones push, anunciar cuando será el próximo evento.<br/>
                                     Comunicación es la clave para que la organización de un evento funcione correctamente.
                                </p>
                               </div>
                          </div> 
                     </div>    
                </div>
           </div>
      </div>
</div>
@stop