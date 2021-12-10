$(function () {
  $(".slide-one-item").owlCarousel({
    center: false,
    items: 1,
    loop: true,
    stagePadding: 0,
    margin: 0,
    autoplay: true,
    pauseOnHover: false,
    animateOut: "fadeOut",
    nav: true,
    navText: [
      '<span class="icon-keyboard_arrow_left">',
      '<span class="icon-keyboard_arrow_right">',
    ],
  });

  // Menu responsivo
  function menuResponsivoFs() {
    const menu = $(".btn-menu");
    menu.on("click", function (e) {
      e.preventDefault();

      const menuResponsivo = $(".menu-responsivo");
      menuResponsivo.slideToggle(200);
    });
  }
  menuResponsivoFs();

  // ScrollTop
  function scrollTopo() {
    $(window).scroll(function () {
      const topoBar = $(".topScroll");
      let window = $(this).scrollTop();

      if (window > 200) {
        console.log("Testando" + window);
        topoBar.fadeIn(400);
      } else {
        topoBar.fadeOut(400);
      }
    });
  }
  scrollTopo();

  function owlCarouselPublicidadeTestemunhos() {
    $(".publicidade-carousel").owlCarousel({
      center: false,
      items: 1,
      loop: true,
      stagePadding: 0,
      margin: 30,
      autoplay: true,
      pauseOnHover: false,
      nav: true,
    });
    $(".slider").owlCarousel({
      center: false,
      items: 3,
      loop: true,
      stagePadding: 0,
      margin: 20,
      autoplay: true,
      pauseOnHover: false,
      nav: true,
      navText: [
        '<span class="icon-keyboard_arrow_left">',
        '<span class="icon-keyboard_arrow_right">',
      ],
    });
  }
  owlCarouselPublicidadeTestemunhos();
}, jQuery);

// JavaScript puro
setTimeout(() => {
  loading.style.display = "none";
  loading.remove();
}, 1000);
