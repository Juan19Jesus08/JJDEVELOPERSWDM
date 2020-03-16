@extends('welcome')           
@section('contenido')
<div class="bg-slider-wrapper">
            <div id="bg-slider" class="flexslider bg-slider">
                <ul class="slides">
                    <li class="slide slide-1"></li>
                    <li class="slide slide-2"></li>
                    <li class="slide slide-3"></li>
                </ul>
            </div>
        </div><!--//bg-slider-wrapper--> 
        <section id="home-promo" class="home-promo section">
            <div class="container text-center">                
                <h2 class="title">
                    <span class="upper">We build</span>
                    <span class="middle">Web and Mobile Apps</span>
                    <span class="bottom">for startups and agencies</span>
                </h2>
                <button class="btn btn-cta btn-cta-primary" type="button" data-toggle="modal" data-target="#modal-contact" data-backdrop="static">Talk to us</button>
            </div><!--//container-->
        </section><!--//promo-->

<!----------------------------------------------------------------------->
    <section id="latest-work" class="latest-work section">
        <div class="container-fluid text-center">
            <h2 class="title text-center">Our Latest Work</h2>
            <div id="work-carousel" class="items owl-carousel owl-theme">
                <div class="item item-1">
                    <div class="row">
                        <figure class="figure-container col-lg-6 col-12">
                            <a href="http://wrapbootstrap.com/preview/WB0N38R04" target="_blank"></a>
                        </figure>
                        <div class="content col-lg-6 col-12">
                            <div class="content-inner">
                                <h3 class="project-title">Velocity web application</h3>
                                <ul class="meta list-unstyled">
                                    <li><strong>Client:</strong> 3rd Wave Media</li>
                                    <li><strong>What we did:</strong> SaaS development, UX design</li>
                                </ul><!--//meta-->
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus, nec mattis nibh eleifend. Duis et enim at lacus pharetra mollis molestie nec magna. Maecenas tristique laoreet tristique...</p>
                                </div><!--//desc-->
                                <p class="link" ><i class="fas fa-briefcase"></i> <a class="more-link" href="case-study-1.html">Read full case study</a></p>
                                <p class="link" ><i class="fas fa-external-link-alt"></i> <a class="site-link" href="http://wrapbootstrap.com/preview/WB0N38R04" target="_blank">Website link</a></p>
                            </div><!--//content-inner-->
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//item-->
                <div class="item item-2">
                    <div class="row">
                        <figure class="figure-container col-lg-6 col-12">
                            <a class="img-link" href="http://wrapbootstrap.com/preview/WB09R23P8" target="_blank"></a>
                        </figure>
                        <div class="content col-lg-6 col-12">
                            <div class="content-inner">
                                <h3 class="project-title">Delta mobile app </h3>
                                <ul class="meta list-unstyled">
                                    <li><strong>Client:</strong> App Startup</li>
                                    <li><strong>What we did:</strong> App development</li>
                                </ul><!--//meta-->
                                <div class="desc">
                                    <p>Mauris in vestibulum ex. Donec vel malesuada tortor. Etiam consequat semper pulvinar. Integer sit amet felis nisl. Proin leo metus, volutpat vel fringilla vel, faucibus et mi. Duis finibus erat erat, quis mollis...</p>
                                </div><!--//desc-->
                                <p class="link" ><i class="fas fa-briefcase"></i> <a class="more-link" href="case-study-2.html">Read full case study</a></p>
                                <p class="link" ><i class="fas fa-external-link-alt"></i> <a class="site-link" href="http://wrapbootstrap.com/preview/WB09R23P8" target="_blank">Website link</a></p>
                            </div><!--//content-inner-->
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//item-->
                <div class="item item-3">
                    <div class="row">
                        <figure class="figure-container col-lg-6 col-12">
                            <a class="img-link" href="http://wrapbootstrap.com/preview/WB07364T3" target="_blank"></a>
                        </figure>
                        <div class="content col-lg-6 col-12">
                            <div class="content-inner">
                                <h3 class="project-title">Tempo </h3>
                                <ul class="meta list-unstyled">
                                    <li><strong>Client:</strong> Startup Week</li>
                                    <li><strong>What we did:</strong> Site design &amp; development</li>
                                </ul><!--//meta-->
                                <div class="desc">
                                    <p>Sed ornare suscipit risus, sed elementum justo porta ac. Duis ultricies lobortis nibh sed facilisis. Etiam eu leo sapien. Integer gravida at urna ac bibendum. Nullam eu orci at felis fermentum lobortis...</p>
                                    <p class="link" ><i class="fas fa-briefcase"></i> <a class="more-link" href="case-study-1.html">Read full case study</a></p>
                                    <p class="link" ><i class="fas fa-external-link-alt"></i> <a class="site-link" href="http://wrapbootstrap.com/preview/WB07364T3" target="_blank">Website link</a></p>
                                </div><!--//desc-->
                            </div><!--//conten-inner-->
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//item-->
            </div><!--//owl-carousel-->
            <a class="btn btn-cta btn-cta-secondary" href="work.html">View all case studies</a>
        </div><!--container-fluid-->
    </section><!--//latest-work-->
   <!-- ---------------------------------------------------------------------------------------------------->
        <section id="testimonials" class="testimonials section">
        <div class="container">
            <h2 class="title text-center">Testimonials</h2>
            <p class="intro text-center">Don’t just take our word for it – see what our clients are saying</p>
            <div class="row">
                <div class="item col-lg-6 col-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fas fa-quote-left"></i> 
                            <blockquote class="quote">We had great experience working with Phasellus ut cursus tellus. Etiam ullamcorper varius diam, nec consequat dolor gravida non. Nullam commodo feugiat arcu, ut scelerisque nisl vulputate eget. Cras a euismod elit. 
                                
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-1.png" alt="" />
                                <p class="name">Katherine Hamilton<br />
                                    <span class="source-title">Product Manager</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-fluid" src="assets/images/client/client-logo-1.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->        
                    </div><!--//item-inner-->        
                </div><!--//item-->
                
                <div class="item col-lg-6 col-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fas fa-quote-left"></i> 
                            <blockquote class="quote">Cras condimentum erat vel quam dignissim, eu venenatis velit porta. Praesent fermentum, mi sit amet mollis fringilla, ex risus condimentum mauris, at dapibus ipsum turpis non ipsum.                           
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-2.png" alt="" />
                                <p class="name">Aaron Brown<br />
                                    <span class="source-title">Marketing Director</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-fluid" src="assets/images/client/client-logo-2.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->     
                    </div><!--//item-inner-->           
                </div><!--//item-->
                
                <div class="clearfix"></div>
                
                <div class="item col-lg-6 col-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fas fa-quote-left"></i> 
                            <blockquote class="quote">Pellentesque nec maximus justo, a ultrices ligula. Duis sollicitudin suscipit arcu eget interdum. Nullam et porttitor sem, id iaculis eros. Sed feugiat leo et ligula pulvinar, et lobortis velit pretium.                         
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-3.png" alt="" />
                                <p class="name">Phillip Perry<br />
                                    <span class="source-title">Product Manager</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-fluid" src="assets/images/client/client-logo-3.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->  
                    </div><!--//item-inner-->              
                </div><!--//item-->
                
                <div class="item col-lg-6 col-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fas fa-quote-left"></i> 
                            <blockquote class="quote">We are impressed by lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tellus nisi, maximus vel risus vel, fermentum faucibus magna. Aliquam sed aliquet eros. Nunc nec aliquet ligula.
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-4.png" alt="" />
                                <p class="name">Victoria Simmons<br />
                                    <span class="source-title">Product Designer</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-fluid" src="assets/images/client/client-logo-4.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->  
                    </div><!--//item-inner-->              
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//testimonials-->  
<!------------------------------------------------------------------------------------------------------------->
<section id="logos" class="logos section">
        <div class="container text-center">
            <h2 class="title">Who we have worked with</h2>
            <p class="intro">SaaS / Mobile apps / Marketing sites / Internal apps</p>
            <ul class="logo-list list-inline row">
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-1.png" alt="" /></a></li>
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-2.png" alt="" /></a></li>
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-3.png" alt="" /></a></li>                   
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-4.png" alt="" /></a></li> 
            </ul><!--//logo-list-->
            <ul class="logo-list list-inline row last">
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-5.png" alt="" /></a></li>
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-6.png" alt="" /></a></li>
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-7.png" alt="" /></a></li>                   
                <li class="col-md-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-8.png" alt="" /></a></li>                   
            </ul><!--//logos-list-->               
        </div><!--//container-->
    </section><!--//logos-->

   <!-- --------------------------------------------------------------------------------------------------->
      <section id="cta-section" class="cta-section section text-center home-cta-section">
        <div class="container">
           <h2 class="title">Want to have a quick chat?</h2>
           <p class="phone contact-info">
               <span class="intro">We are only a phone call away</span>
               <span class="info"><a href="tel:+08001234567">0800 123 4567</a></span>
           </p><!--//phone-->
           <p class="email contact-info">
               <span class="intro">You can also email us</span>
               <span class="info"><a href="mailto:hello@yourdevstudio.com">hello@yourdevstudio.com</a></span>
           </p><!--//phone-->              
        </div><!--//container-->
    </section><!--//cta-section-->
   <!-- --------------------------------------------------------------------------------------------->

        <section id="latest-blog" class="latest-blog section">
        <div class="container">
            <h2 class="title text-center">Latest Blog Posts</h2>
            <div class="row">
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-fluid" src="assets/images/blog/blog-thumb-1.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">DevStudio helps XYZ launch</a></h3>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus, nec mattis nibh eleifend. Duis et enim at lacus pharetra mollis molestie nec magna. Maecenas tristique laoreet tristique. Ut pellentesque diam nec odio hendrerit euismod.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-fluid" src="assets/images/blog/blog-thumb-2.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">devAid - Free Bootstrap Theme</a></h3>
                            <div class="desc">
                                <p>Mauris libero leo, dapibus a congue ut, mollis sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus augue nec nulla ultricies, <a href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">Download now</a> vitae tincidunt lacus scelerisque.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-fluid"  src="assets/images/blog/blog-thumb-3.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">DevStudio Team Lorem Ipsum</a></h3>
                            <div class="desc">
                                <p>In vel mauris consequat, ullamcorper diam id, eleifend tellus. Phasellus elementum facilisis eleifend. Nullam imperdiet odio massa, et blandit augue porta vehicula. Proin venenatis ullamcorper enim, in vulputate nisi luctus eget. Justo vitae tincidunt vestibulum. Cras consectetur lacinia massa.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-fluid" src="assets/images/blog/blog-thumb-4.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">Our Consectetur Adipiscing</a></h3>
                            <div class="desc">
                                <p>Aenean eget molestie ipsum, in commodo felis. Sed vitae enim est. Nunc at eros id purus vulputate elementum in vel nisi. Donec tempus turpis et viverra semper. Curabitur facilisis sem elit, vitae condimentum enim auctor ac. Sed orci magna, euismod eu mi eu, fringilla tincidunt orci. Phasellus molestie.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//latest-blog-->
@stop