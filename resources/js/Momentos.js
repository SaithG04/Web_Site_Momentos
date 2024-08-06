// Función para manejar la pantalla de TABLET
function handleTabletScreen(event) {
  if (event.matches) {
    let slideIndex = 0;
    showSlides(".slideshow-inner", 925); // Ancho de la diapositiva para TABLET
  } else {
    // Puedes hacer algo si la media query deja de cumplirse
  }
}

// Función para manejar la pantalla de CELULAR
function handleMobileScreen(event) {
  if (event.matches) {
    let slideIndex = 0;
    showSlides(".slideshow-inner", 421); // Ancho de la diapositiva para CELULAR
  } else {
    // Puedes hacer algo si la media query deja de cumplirse
  }
}

// Función para manejar la pantalla de PC
function handlePCScreen(event) {
  if (event.matches) {
    let slideIndex = 0;
    showSlides(".slideshow-inner", 840); // Ancho de la diapositiva para PC
  } else {
    // Puedes hacer algo si la media query deja de cumplirse
  }
}

// Función común para mostrar las diapositivas
function showSlides(slideshowSelector, slideWidth) {
  let slides = document.querySelectorAll(".mySlides");
  let slideIndex = 0;

  function animateSlides() {
    slideIndex++;
    if (slideIndex >= slides.length) {
      slideIndex = 0;
    }

    let translateValue = -slideWidth * slideIndex;
    document.querySelector(slideshowSelector).style.transform = `translateX(${translateValue}px)`;

    setTimeout(animateSlides, 2000); // Cambia de diapositiva cada 2 segundos
  }

  animateSlides();
}

// Listeners de media query para TABLET, CELULAR y PC
const tabletMediaQuery = window.matchMedia("(min-width: 768px)");
tabletMediaQuery.addListener(handleTabletScreen);
handleTabletScreen(tabletMediaQuery);

const mobileMediaQuery = window.matchMedia("(max-width: 767px)");
mobileMediaQuery.addListener(handleMobileScreen);
handleMobileScreen(mobileMediaQuery);

const pcMediaQuery = window.matchMedia("(min-width: 991px)");
pcMediaQuery.addListener(handlePCScreen);
handlePCScreen(pcMediaQuery);