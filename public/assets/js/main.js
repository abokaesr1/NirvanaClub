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
    // $('#carusel2').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: false,
    //     dots: true,
    //     responsive: {
    //         1000: { items: 1.3 }, // 2 items for large screens
    //         0: { items: 1 }     // 1 item for smaller screens
    //     }
    // });

    function showProjectsbyCat( cat ){
        if ( cat == 'all'){
          $('#projects-hidden .project').each(function(){
             var owl   = $(".owlcarousel .carusel2");
             elem      = $(this).parent().html();
             owl.owlCarousel('add', elem).owlCarousel('update');
             $(this).parent().remove();
          });
        }
        else{
          $('#projects-hidden .project.'+ cat).each(function(){
             var owl   = $(".owlcarousel  .carusel2");
             elem      = $(this).parent().html();
            owl.owlCarousel('add', elem).owlCarousel('update');
             $(this).parent().remove();
          });
          $('#carusel2 .project:not(.project.'+ cat + ')').each(function(){
             var owl   = $(".owlcarousel  .carusel2");
             targetPos = $(this).parent().index();
             elem      = $(this).parent();
             $( elem ).clone().appendTo( $('#projects-hidden') );
             owl.owlCarousel('remove', targetPos).owlCarousel('update');;
          });
        }
      }

    // Click event for filters
    $("#project-terms a").click(function (e) {
        e.preventDefault();
        $("#project-terms a").removeClass("active");

        var cat = $(this).attr("id");
        $(this).addClass("active");
        console.log(cat);
        showProjectsbyCat(cat);
    });

    // Initialize Owl Carousel
    $("#carusel2").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            1000: { items: 1.3 },
            0: { items: 1 },
        },
    });

     const carousel = $("#carusel4").owlCarousel({
         loop: true,
         margin: 0,
         nav: false,
         dots: false,
         items: 1
     });
     $("#project-terms").owlCarousel({
        items : 5, //10 items above 1000px browser width
        nav: true,
        navText: ["<", ">"], // Customize arrow icons
        dots: false,
        itemsDesktop : [1000,2], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,2], // betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : false,

    });

    $("#carusel-whyjoin").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            1000: { items: 3.5 },
            0: { items: 1 },
        },
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

 });
