setCorrectHeaderByScroll();
setCorrectTelInputs();
setCorrectBurger();


// По скроллу - скрываем верхнюю часть шапки
function setCorrectHeaderByScroll() {
  const header = document.querySelector('#header');
  const headerTop = document.querySelector('.header-top');
  const headerBottom = document.querySelector('.header-bottom');

  const scrollState = () => {
    const safetyPixels = 5; // Чтобы не было никаких зазоров
    headerTop.classList.add('hidden');
    headerBottom.classList.add('active');
    header.style.marginTop = -(headerTop.clientHeight + safetyPixels) + 'px';
  };

  const topState = () => {
    headerTop.classList.remove('hidden');
    headerBottom.classList.remove('active');
    header.style.marginTop = null;
  };

  window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
      scrollState();
    } else {
      topState();
    }
  }, { passive: true });
}

// Маски для полей ввода телефона
function setCorrectTelInputs() {
  const mask = new Inputmask('+7-999-999-99-99');
  const telInputs = document.querySelectorAll('input[type="tel"]');

  telInputs.forEach((telInput) => {
    mask.mask(telInput);
  });
}

function setCorrectBurger() {
  const burger = document.querySelector('.burger');
  const mobileMenu = document.querySelector('.mobile-menu');

  burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });
}