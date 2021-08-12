
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
                  <div class="testimonial-photo"> <img src="{{asset('assets/images/it_service/eduardo.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Eduardo Garcia</h4>
                    <span class="testimonial-position">Villa cuahuctemoc</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content">La camioneta de redilas que pedi me la entregaron a tiempo y fue muy buen trabajo. </div>
                  <div class="testimonial-photo"> <img src="{{asset('assets/images/it_service/chong.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Omar Chong</h4>
                    <span class="testimonial-position">Toluca</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content">EL trabajo realizado fue de mi agrado, muy contento con mi producto. </div>
                  <div class="testimonial-photo"> <img src="{{asset('assets/images/it_service/fernando.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Francisco Rangel</h4>
                    <span class="testimonial-position">Xonacatlán</span> </div>
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
            <div class="call_icon"> <img src="{{asset('assets/images/it_service/phone_icon.png')}}" alt="#" /> </div>
            <div class="inner_cont">
              <h2>SOLICITE UNA COTIZACIÓN GRATUITA</h2>
              <p>Obtenga respuestas y consejos de las personas que desea.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="{{route ('contacto') }}">Contáctenos</a> </div>
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
              <li><p>En grupo selkar nos preocupamos por entregar sus productos en el mejor tiempo posible y 
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
          
              <span style="font-size:18px;"><a href="tel:+9876543210">Telefono: +52 7282882747</a></span></p>
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
<script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
