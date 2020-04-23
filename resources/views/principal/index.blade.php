@extends('welcome')           
@section('contenido')

      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_welcome_carrusel7.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 style="text-transform: none;" class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Bienvenido a &lt;JDev-S/&gt; </span></h3><a class="button button-lg button-primary button-winona button-shadow-2" href="/contact/#cotizacion" >Comienza!!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_software5.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-xl-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Desarrollo de software</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInRight" data-caption-delay="300">Desarrollamos tu software ideal.</h5>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2"  href="/contact/#cotizacion" >Comienza!!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_equipo_carrusel2.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-xl-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInLeft" data-caption-delay="100">Soluciones computacionales</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="0">Que tu preocupación sólo sean tus clientes, nos encargamos de tus equipos.</h5>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2"  href="/contact/#cotizacion" >Comienza!!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="/images/r_redes_carrusel.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-md-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Instalación de redes</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInRight" data-caption-delay="300">Soluciones de red ajustadas a tus necesidades.</h5>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2"  href="/contact/#cotizacion" >Comienza!!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             <div class="swiper-slide context-dark" data-slide-bg="/images/r_cctv_carrusel2.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-xl-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInLeft" data-caption-delay="100">Seguridad y vigilancia</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="0">Lo primero es tu seguridad. Mantén tu propiedad segura estés donde estés.</h5>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2"  href="/contact/#cotizacion" >Comienza!!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>

      <!-- About Company-->
      <section class="section section-md section-lg-0 bg-gray-100 text-md-left section-relative" id="service">
        <div class="tabs-custom container" id="tabs-8">
          <div class="row row-40 flex-lg-row-reverse">
            <div class="col-lg-4">
              <div class="nav-tabs-2-button">
                <h5 class="nav-tabs-2-title" style="font-size:30px;">Servicios </h5><span class="icon mdi mdi-arrow-down" data-custom-scroll-to="service"></span>
              </div>
              <ul class="nav nav-tabs-2">
                <li class="nav-item-2 wow fadeInRight" role="presentation"><a class="active" href="#tabs-8-1" data-toggle="tab">Desarrollo de software</a></li>
                <li class="nav-item-2 wow fadeInRight" role="presentation"><a href="#tabs-8-2" data-toggle="tab">Soluciones computacionales</a></li>
                <li class="nav-item-2 wow fadeInRight" role="presentation"><a href="#tabs-8-3" data-toggle="tab">Instalación de redes</a></li>
                  <li class="nav-item-2 wow fadeInRight" role="presentation"><a href="#tabs-8-4" data-toggle="tab">Seguridad y vigilancia</a></li>
              </ul>
            </div>
            <div class="col-lg-8 tab-content-1 wow fadeInLeft">
                <br/>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-8-1">
                    
            <div class="owl-carousel owl-theme" data-items="1" data-sm-items="1" data-lg-items="1" data-margin="30" data-autoplay="false" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut"> 
                
                
                  <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/r_web.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Desarrollo web</h5>
                          <p class="box-info-text" style="  text-align: justify;">El Internet se ha convertido en un herramienta muy importante para el mundo y nos permite acceder a muchos recursos. Las empresas usan  sitios web para darse a conocer, ofreciendo sus servicios a los clientes desde cualquier parte a través de una conexión a Internet, muchas empresas crecen exponencialmente gracias a sus sitios web.</p><a class="box-info-link" href="/soluciones_web">Leer más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                    
                    <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/r_escritorio.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Desarrollo de escritorio</h5>
                          <p class="box-info-text" style="  text-align: justify;">Una aplicación de escritorio es aquella que se instala en tu computadora y dependiendo del caso, ésta puede funcionar con Internet o sin Internet. Estas herramientas ayudan a los negocios a agilizar, disminuir la carga de trabajo y reducir fallos.</p><a class="box-info-link" href="/soluciones_escritorio">Leer Más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                
                <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/r_movil.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Desarrollo móvil</h5>
                          <p class="box-info-text" style="text-align: justify;">Una aplicación móvil es esencial para las empresas a la hora de querer incrementar sus ganancias. Éstas son muy útiles para que los clientes puedan comprar y observar tus productos y/o servicios desde el lugar que se encuentren, haciendo más agil y sencillo este proceso.</p><a class="box-info-link" href="/soluciones_movil">Leer Más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                
                
                </div>                   
                </div>
                  
            <div class="tab-pane fade" id="tabs-8-2">
            <div class="owl-carousel owl-theme" data-items="1" data-sm-items="1" data-lg-items="1" data-margin="30" data-autoplay="false" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut"> 
                
                
                  <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/about-1-326x390.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Análisis y reparación de equipo de cómputo</h5>
                          <p class="box-info-text" style="  text-align: justify;">La computadora se ha convertido en una herramienta fundamental, es muy importante prestarle atencion y brindarle  mantenimiento para prevenir fallas y garantizar que se encuentren en un estado óptimo. Un buen mantenimiento provee un buen funcionamiento del equipo, prolongando su tiempo de vida y previniendo bloqueos. El periodo recomendado para darle mantenimiento a una computadora es de un mínimo de 2 veces por año (cada 6 meses).</p><a class="box-info-link" href="/analisis_reparacion_computo">Leer más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                    
                    <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/pc2.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Armado de computadoras</h5>
                          <p class="box-info-text" style="  text-align: justify;">Una computadora ensamblada es aquella que es armada por un experto, la cual esta diseñada para cumplir las necesidades específicas de cada usuario. Tiene la misma calidad y mismo funcionamiento que una computadora de marca, la diferencia es que ésta puede ser personalizada al gusto.</p><a class="box-info-link" href="/ensamblado">Leer más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                
                    <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/r_remotos.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Asistencia remota</h5>
                          <p class="box-info-text" style="  text-align: justify;">Soporte o asistencia remota, es un servicio en el que el técnico se conecta al ordenador del cliente a distancia, haciendo uso de internet y por medio de un programa de conexión remota. Éste permite resolver múltiples problemas siempre y cuando se relacionen con software. Éste puede incluir servicios como ayuda en instalación de programas, eliminación de virus, instalación y configuración de periféricos. Ofrece ventajas como  rápidez, cómodidad, flexibilidad, entre otros.</p><a class="box-info-link" href="/asistencia_remota">Leer más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                
                </div>  
         </div>
                <div class="tab-pane fade" id="tabs-8-3">
            <div class="owl-carousel owl-theme" data-items="1" data-sm-items="1" data-lg-items="1" data-margin="30" data-autoplay="false" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut"> 
                
                <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/r_red2_inicio.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Instalación de red de computadoras</h5>
                          <p class="box-info-text" style="  text-align: justify;" >Una red de computadoras es un conjunto de equipos conectados entre si, facilitando la comunicación y el transporte de datos. Para las empresas una red es una de las formas más prácticas para compartir recursos, permitiendo ahorrar tiempo, dinero y a la vez ser más productivos.</p><a class="box-info-link" href="/cableado_computadoras">Leer más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                
                
                </div>  
                </div>
                  
                                  <div class="tab-pane fade" id="tabs-8-4">
            <div class="owl-carousel owl-theme" data-items="1" data-sm-items="1" data-lg-items="1" data-margin="30" data-autoplay="false" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut"> 
                
                
                  <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/r_cctv.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Videovigilancia CCTV</h5>
                          <p class="box-info-text" style="  text-align: justify;">La videovigilancia CCTV es una tecnología enfocada a la seguridad de negocios u hogares, éstas pueden ser instaladas tanto en interiores como en exteriores. Una instalación CCTV te da la posibilidad de estar monitorenando las 24 horas del día sin importar el lugar y la distancia en que te encuentres, siempre tendrás vigilado tu establecimiento u hogar. </p><a class="box-info-link" href="/videovigilancia_cctv">Leer Más</a>
                        </div>
                      </div>
                    </div>
                   </div>
                    
                    <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="/images/r_alarma_principal.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Instalación de alarmas</h5>
                          <p class="box-info-text" style="  text-align: justify;">La alarma es una tecnología enfocada a la seguridad de casas y de negocios. Pueden advertir de un peligro de forma automática. Una instalacion de alarma te da el control las 24 horas del día sin importar el lugar y la distancia en que te encuentres, siempre tendrás protegido tu establecimiento u hogar.</p><a class="box-info-link" href="/alarmas">Leer Más</a>
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

      <!-- Section-->
      <!-- Icon Creative-->

      <!-- Section-->

      <!-- Tell-->
      <section class="section section-xl bg-default" >
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Realiza tu Cotización</span></h3>
          <!--<form action={{route('contact')}} method="POST"> -->
           <form class="rd-form rd-mailform form-style-1" method="POST" action={{route('contact')}}>
              {{ csrf_field() }}
            <div class="row row-20 gutters-20">
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                  <input class="form-input" id="nombre_completo" type="text" name="nombre_completo" data-constraints="@Required">
                  <label class="form-label" for="nombre_completo">Nombre completo*</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInUp">
                  <input class="form-input" id="email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="email"> E-mail*</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                  <input class="form-input" id="nombre_empresa" type="text" name="nombre_empresa" data-constraints="@Required">
                  <label class="form-label" for="nombre_empresa">Nombre completo de la empresa*</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInUp">
                  <input class="form-input" id="telefono" type="text" name="telefono" data-constraints=" @Required">
                  <label class="form-label" for="telefono"> Teléfono*</label>
                </div>
              </div>
              <div class="col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                  <!--Select 2-->
                  <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="categoria" id="categoria">
                    <option >Seleccione la categoría de su proyecto</option>
                    <option value="Desarrollo web">Desarrollo web</option>
                    <option value="Desarrollo móvil">Desarrollo móvil</option>
                    <option value="Desarrollo de escritorio">Desarrollo de escritorio</option>
                    <option value="Ensamblado">Ensamblado</option>
                    <option value="Análisis y reparación de equipo de cómputo">Análisis y reparación de equipo de cómputo</option>
                      <option value="Asistencia remota">Asistencia remota</option>
                    <option value="Videovigilancia CCTV">Videovigilancia CCTV</option>
                    <option value="Instalación de alarmas">Instalación de alarmas</option>
                    <option value="Instalación de red de computadoras">Instalación de red de computadoras</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap wow fadeIn">
                  <label class="form-label" for="descripcion">Descripción del Proyecto</label>
                  <textarea class="form-input textarea-lg" id="descripcion" name="descripcion" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <div class="group-custom-1 group-middle oh-desktop">
              <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Consultar</button>
              <!-- Quote Classic-->
              <article class="quote-classic quote-classic-3 wow slideInDown">
                <div class="quote-classic-text">
                  <p class="q">Siéntete libre de escribirnos.</p>
                </div>
              </article>
            </div>
          </form>
        </div>
      </section>

      <!-- Subscribe to Our Newsletter-->

      <!-- Latest news-->

@stop

