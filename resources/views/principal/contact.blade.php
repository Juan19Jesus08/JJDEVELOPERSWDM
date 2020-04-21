@extends('welcome')
@section('contenido')
<head>
  <!-- Site made with Mobirise Website Builder v4.3.5, https://mobirise.com -->
  <title> Free HTML Bootstrap Google Maps Template</title>
  <link rel="stylesheet" href="/estilo/mobirise-icons.css">
  <link rel="stylesheet" href="/estilo/tether.min.css">
  <link rel="stylesheet" href="/estilo/bootstrap.min.css">
  <link rel="stylesheet" href="/estilo/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/estilo/bootstrap-reboot.min.css">
  <!--<link rel="stylesheet" href="/estilo/styles.css">-->
  <link rel="stylesheet" href="/estilo/style.css">
  <link rel="stylesheet" href="/estilo/style2.css">
  <link rel="stylesheet" href="/estilo/mbr-additional.css" type="text/css">
</head>
<style>
  #vl {
  border-right: 1px solid green;
  height: 400px;
}  
</style>

<!-- Google Analytics -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFK425"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFK425');</script>
<!-- /Google Analytics -->
      <section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="false" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="/images/slide-1-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h1  style="font-size:60px;text-transform: none;"><span>&lt;JDev-S/&gt;</span></h1>
                    <h2  style="font-size:40px;" class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">¿Algún proyecto en mente?<br/> </h2>
                       <h3  style="font-size:30px;" class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">No dudes en contactarnos, estamos para ayudarte. </h3>
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
      <br/>
      <br/>

<section class="mbr-section form4 cid-qv7rl9AWVJ" id="form4-6x" data-rv-view="10736" style="background-color: #f5f5f5;"> 
            <h1 class="oh-desktop"><span class="d-inline-block wow slideInDown">INFORMACIÓN DE CONTACTO</span></h1>
    <br/><br/>
    <div class="container">
 
        <div class="row">
            <div class="col-md-6 " id="vl" style="margin-bottom:35px">
                <div class="google-map" ><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyANOAQtpBzoK0a2jIVIUgn28Agglci6-lQ&q=place_id:EkBQYXNlbyBkZSBMb3MgVm9sY2FuZXMsIExhcyBSZXluYXMsIDM2NzIwIFNhbGFtYW5jYSwgR3RvLiwgTWV4aWNvIi4qLAoUChIJxcjchNmELIQRlkB3pp7GfkcSFAoSCT2jy6_ehCyEEffDJX1K2JVp" allowfullscreen=""></iframe></div>
            </div>
            
            
            
            <div class="col-md-6">
                <div class="section-title 2">
                        <div class=section-title-more>
                            <h3> ¿Tienes alguna duda?</h3>
                        </div>
                        <div>
                            
                            <h6 class=section-title-heading><span>Queremos conocer tu proyecto, no dudes en llamarnos </span></h6>
                        </div>
                    </div>
                    
                    <div class="row padding-bottom-sm-90">
                        <div class=col-sm-4>
                            <div class="contact-item margin-bottom-xs-40"><i class="icon mdi mdi-cellphone-android"  style="font-size:50px;color:#28bd25"></i>
                                <p style="font-size:13px;"><b>Teléfono/WhatsApp</b><br/> (464)1124092                              
                                    <br />(443)1111547<br/>(461)2250333</p>
                            </div>
                        </div>
                        <div class=col-sm-4>
                            <div class="contact-item margin-bottom-xs-40"><i class="icon mdi mdi-map-marker" style="font-size:50px;color:#28bd25" ></i>
                                <p style="font-size:13px;"><b>Dirección:</b><br/>
                                   <!-- Paseo de los volcanes
                                    <br /> #127 col. Las Reynas.
                                    <br/> Salamanca, Gto-->
                                     </p>
                            </div>
                        </div>
                        <div class=col-sm-4>
                            <div class="contact-item margin-bottom-xs-40"><i class="icon mdi mdi-email" style="font-size:50px; color:#28bd25";></i>
                                <p style="font-size:13px;"><b>Em@il:</b>
                                    
                                    <br/><a href=mailto:info@teknik.mx>serviclientedev@jjdeveloperswdm.com</a></p>
                            </div>
                        </div>
                    </div>
                    <a class="button button-sm button-primary button-winona" href="/contact/#cotizacion">Cotizar!!</a>
            </div>
        </div>
        
    </div>
</section>

        <div class="container" style="margin-top:60px;">
          <h1 class="oh-desktop"><span class="d-inline-block wow slideInUp" id="cotizacion">Realiza tu Cotización</span></h1>
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



  <!--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>-->
  @stop
  
