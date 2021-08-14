<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_left">
                        <h2 style="text-transform: none;">¿Qué dicen los clientes?</h2>
                        <p class="large">Aquí están los testimonios de los clientes.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7">
                <div class="full">
                    <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonial_slider" data-slide-to="1"></li>
                            <li data-target="#testimonial_slider" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-container">
                                    <div class="testimonial-content"> Excelente trabajo me gusto demasido el trabajo qye realizaron en la pipa que pedi, muy contento con el trabajo. </div>
                                    <div class="testimonial-photo"> <img src="{{asset('assets/img/it_service/eduardo.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                                    <div class="testimonial-meta">
                                        <h4>Eduardo Garcia</h4>
                                        <span class="testimonial-position">Villa cuahuctemoc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-container">
                                    <div class="testimonial-content">La camioneta de redilas que pedi me la entregaron a tiempo y fue muy buen trabajo. </div>
                                    <div class="testimonial-photo"> <img src="{{asset('assets/img/it_service/chong.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                                    <div class="testimonial-meta">
                                        <h4>Omar Chong</h4>
                                        <span class="testimonial-position">Toluca</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-container">
                                    <div class="testimonial-content">EL trabajo realizado fue de mi agrado, muy contento con mi producto. </div>
                                    <div class="testimonial-photo"> <img src="{{asset('assets/img/it_service/fernando.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                                    <div class="testimonial-meta">
                                        <h4>Francisco Rangel</h4>
                                        <span class="testimonial-position">Xonacatlán</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="full"> </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="contact_us_section">
                        <div class="call_icon"> <img src="{{asset('assets/img/it_service/phone_icon.png')}}" alt="#" /> </div>
                        <div class="inner_cont">
                            <h2>SOLICITE UNA COTIZACIÓN GRATUITA</h2>
                            <p>Obtenga respuestas y consejos de las personas que desea.</p>

                        </div>
                        <div class="container-redes">
                                <a href="https://api.whatsapp.com/send?phone=+527222818870&text=¿Qué servicios ofrecen?" target="_blank">
                                    <img src="{{asset('assets/img/icon-whatsapp.png') }}" width="80" height="80" title="Enviar mensaje de WhatsApp" alt="whatsapp">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
    <div class="container-fuild">
        <div class="row">
            <div class="map_section">
                <div id="map"></div>
            </div>
            <div class="footer_blog">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-heading left_text">
                            <h2>Grupo Selkar</h2>
                        </div>
                        <ul class="footer-menu">
                            <li>
                                <p>En grupo selkar nos preocupamos por entregar sus productos en el mejor tiempo posible y
                                    de la mejor calidad</p>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="main-heading left_text">
                            <h2>Servicios</h2>
                        </div>
                        <ul class="footer-menu">
                            <li><a href="#"><i class="fa fa-angle-right"></i> Creación de remolques.</li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Reparación de remolques</li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Mantenimiento de remolques</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="main-heading left_text">
                            <h2>Contáctanos</h2>
                        </div>
                        <p> Juan Aldama S/N entre Juarez e Hidalgo<br>
                            Col. Arroyo vista hermosa, Toluca, Edo. de México<br>
                            CP 520236 <br>

                            <span style="font-size:18px;"><a href="tel:+9876543210">Telefono: +52 7282882747</a></span>
                        </p>
                        <div class="footer_mail-section">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cprt">
                <p>Grupo selkar S.A de C.V</p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- menu js -->
<script src="{{asset('assets/js/menumaker.js')}}"></script>
<!-- wow animation -->
<script src="{{asset('assets/js/wow.js')}}"></script>
<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- revolution js files -->
<script src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- map js -->



