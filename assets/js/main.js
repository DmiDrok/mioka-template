setCorrectHeaderByScroll();
setCorrectTelInputs();
setCorrectBurger();
setCorrectServiceCards();
setCorrectSmoothScrollToAnchors();

// setCorrectVisibilityForm();
setCorrectContactForm();


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
  const cards = document.querySelectorAll('.tild-card');
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

// Плавный скролл к якорям
function setCorrectSmoothScrollToAnchors() {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach((anchorLink) => {
    anchorLink.addEventListener('click', (event) => {
      event.preventDefault();

      const anchorNode = document.querySelector(anchorLink.getAttribute('href'));
      anchorNode.scrollIntoView({
        block: 'start',
        behavior: 'smooth',
      });
    });
  });
}

// Отображать форму в подвале или нет
function setCorrectVisibilityForm() {
  const contactForm = document.forms['contact-form'];

  if (Cookies.get('formSended')) {
    contactForm.remove();
  }
}

// Отправка формы в подвале
function setCorrectContactForm() {
  const contactForm = document.forms['contact-form'];
  const contactFormAction = contactForm.getAttribute('action');

  const needValues = ['username', 'usertel', 'usermsg'];
  const errorsInputs = new Set();
  
  contactForm.addEventListener('submit', (event) => {
    event.preventDefault();

    console.log(errorsInputs);

    // if (contactForm['username'].value.length < 2) {
    //   contactForm['username'].classList.add('error');
    //   contactForm['username'].title = 'Введите корректное имя!';

    //   errorsInputs.add(contactForm['username']);
    // } else if (contactForm['username'].classList.contains('error')) {
    //   contactForm['username'].classList.remove('error');
    // }

    // if (contactForm['usertel'].value.replace(/[+_-]/g, '').length !== 11) {
    //   contactForm['usertel'].classList.add('error');
    //   contactForm['usertel'].title = 'Введите корректный номер телефона!';

    //   errorsInputs.add(contactForm['username']);
    // } else if (contactForm['usertel'].classList.contains('error')) {
    //   contactForm['usertel'].classList.remove('error');
    // }
    
    // if (contactForm['usermsg'].value.length < 10) {
    //   contactForm['usermsg'].classList.add('error');
    //   contactForm['usermsg'].title = 'минимум 10 символов';

    //   errorsInputs.add(contactForm['username']);
    // } else if (contactForm['usermsg'].classList.contains('error')) {
    //   contactForm['usermsg'].classList.remove('error');
    // }

    // if (errorsInputs.size !== 0) {
    //   errorsInputs.clear();
    //   return;
    // } else {
    //   errorsInputs.forEach(errInp => errInp.classList.remove('error'));
    // }

    const formData = new FormData(contactForm);
    fetch(contactFormAction, {
      method: 'POST',
      body: formData,
    });
    Cookies.set('formSended', true, { expires: 1 });

    contactForm.reset();
  });
}

document.querySelectorAll('.wpcf7-form-control').forEach((el) => {
  el.setAttribute('required', true)
})