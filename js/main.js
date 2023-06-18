setCorrectHeaderByScroll();
setCorrectTelInputs();
setCorrectBurger();
setCorrectServiceCards();


// По скроллу - скрываем верхнюю часть шапки
function setCorrectHeaderByScroll() {
  const header = document.querySelector('#header');
  const headerTop = document.querySelector('.header-top');
  const headerBottom = document.querySelector('.header-bottom');

  const scrollState = () => {
    const safetyPixels = 5; // Чтобы не было никаких зазоров
    headerTop.classList.add('hidden');
    headerBottom.classList.add('active');
    header.style.transform = `translateY(${-(headerTop.clientHeight + safetyPixels) + 'px'})`;
  };

  const topState = () => {
    headerTop.classList.remove('hidden');
    headerBottom.classList.remove('active');
    header.style.transform = null;
  };

  const checkScrollPosition = () => {
    if (window.scrollY > 0) {
      scrollState();
    } else {
      topState();
    }
  };
  checkScrollPosition();

  window.addEventListener('scroll', () => {
    checkScrollPosition();
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

// Настройка логики бургера
function setCorrectBurger() {
  const burger = document.querySelector('.burger');
  const mobileMenu = document.querySelector('.mobile-menu');

  burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });
}

// Эффект наклона на карточах услуг
function setCorrectServiceCards() {
  const cards = document.querySelectorAll('.service');
  const options = {
    reverse: true,
    max: 5,
    speed: 600,
    glare: true,
    'max-glare': .2,
    gyroscope: false,
  };
  
  cards.forEach((card) => {
    VanillaTilt.init(card, options);
  });
}