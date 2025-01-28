 //<!-- toggle active -->
 $(document).ready(function () {

     $('li').click(function () {

         $('li').removeClass('active');
         $(this).addClass('active');
     });
 });

//<!-- Height header  -->
 $(document).ready(function () {
     const winh = $(window).height();
     $('.header').height(winh);
 });

//<!-- Toggle icon  -->
 document.getElementById("myButton").addEventListener("click", function () {
     var icon = document.getElementById("myIcon");
     if (icon.classList.contains("fa-bars")) {
         icon.classList.remove("fa-bars");
         icon.classList.add("fa-xmark");
     } else {
         icon.classList.remove("fa-xmark");
         icon.classList.add("fa-bars");
     }
 });

//<!-- Height #ahmad -->

 $(function () {
     var winh = $(window).height(),
         navh = $('.navbar').innerHeight(),
         space = winh - navh;
     $('#ahmad').css('margin-top', (space / 4) + 'px');


 });

//<!-- owl carousel -->

 $(document).ready(function () {
     // Carousel 1 settings
     $('#carusel1 , #carusel3 ').owlCarousel({
         loop: true,
         margin: 10,
         nav: false,
         dots: true,
         responsive: {
             1000: { items: 3 }, // 3 items for large screens
             0: { items: 1 }     // 1 item for smaller screens
         }
     });

     // Carousel 2 settings
     $('#carusel2').owlCarousel({
         loop: true,
         margin: 10,
         nav: false,
         dots: true,
         responsive: {
             1000: { items: 1.3 }, // 2 items for large screens
             0: { items: 1 }     // 1 item for smaller screens
         }
     });
     const carousel = $("#carusel4").owlCarousel({
         loop: true,
         margin: 0,
         nav: false,
         dots: false,
         items: 1
     });

     // Custom Navigation Buttons
     // Navigate on Div Click
     $("#prev").click(function () {
         carousel.trigger('prev.owl.carousel');
     });
     $("#next").click(function () {
         carousel.trigger('next.owl.carousel');
     });
     $("#aaa").click(function () {
         carousel.trigger('next.owl.carousel');
     });
     const map = L.map('map').setView([25.276987, 55.296249], 10);
     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         maxZoom: 19,
         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
     }).addTo(map);

     L.marker([25.276987, 55.296249]).addTo(map)
         .bindPopup('Hello This is your First Location')
         .openPopup();
 });
