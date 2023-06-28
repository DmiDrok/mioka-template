//=require inputmask.js
//=require tilt.min.js
//=require js-cookie.min.js
//=require fancybox.umd.js
//=require swiper.min.js
//=require fix-wp.js
//=require lazyload.min.js
//=require choices.min.js
//=require air-datepicker.js


const safeCallFunc = (func, ctx) => {
  // try {
    func.call(ctx)
  // } catch(err) {
  //   console.error(err.message);
  // }
};

// Вызываем на любых устройствах
const funcsToCall = [
  setCorrectHeaderByScroll, setCorrectTelInputs, setCorrectBurger, setCorrectVisibilityForm,
  setCorrectContactForm, setCorrectPopupTriggers, setCorrectImagesZoom, setCorrectDropdowns,
  setCorrectAccordion, setCorrectSliders, setCorrectLazyLoad, setCorrectDateInputs,
];

// Вызываем только на компьютерах, т. к. требовательные
const desktopFuncs = [
  setCorrectTiltCards, setCorrectSmoothScrollToAnchors
];

funcsToCall.forEach((func) => {
  safeCallFunc(func, this);
});

if (window.matchMedia('(min-width: 760px)').matches) {
  desktopFuncs.forEach((func) => {
    safeCallFunc(func, this);
  });
}


// По скроллу - скрываем верхнюю часть шапки
function setCorrectHeaderByScroll() {
  const header = document.querySelector('#header');
  const headerTop = document.querySelector('.header-top');
  const headerBottom = document.querySelector('.header-bottom');
  const safetyPixels = 5; // Чтобы не было никаких зазоров

  const scrollState = () => {    
    if (!header.classList.contains('hidden')) {
      headerTop.classList.add('hidden');
    }
    if (!header.classList.contains('active')) {
      headerBottom.classList.add('active');
    }
    if (!header.style.transform) {
      header.style.transform = `translateY(${-(headerTop.clientHeight + safetyPixels) + 'px'})`;
    }
  };
  
  const topState = () => {
    if (headerTop.classList.contains('hidden')) {
      headerTop.classList.remove('hidden');
    }
    if (header.style.transform) {
      header.style.transform = null;
    }
    if (window.scrollY <= 0) {
      headerBottom.classList.remove('active');
    }
  };

  const checkScrollPosition = () => {
    if (scrollPositions.at(-1)) {
      if (window.scrollY > scrollPositions.at(-1)) {
        scrollState();
      } else {
        topState();
      }
    } else if (window.scrollY > 0 && !headerBottom.classList.contains('active')) {
      scrollState();
    }

    scrollPositions.push(window.scrollY);
    if (scrollPositions.length > 2) {
      scrollPositions.splice(0, scrollPositions.length - 2);
    }
  };

  const scrollPositions = [];
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
function setCorrectTiltCards() {
  const cards = document.querySelectorAll('.tilt-card');
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
  const burger = document.querySelector('.burger');
  const header = document.querySelector('.header');

  const scrollTo = (node, hash) => {
    if (!node) {
      node = document.querySelector(hash);
    }

    history.pushState({}, '', hash); // Не location.hash, т.к. при нём будет дергаться страничка

    let customOffset = (window.matchMedia('(max-width: 640px)').matches) ? 50 : 20;
    const nodeTop = node.getBoundingClientRect().top

    if (nodeTop < 0) {
      customOffset += header.clientHeight / 2.5;
    }

    const scrollCoordY = nodeTop + window.scrollY;
    window.scrollTo({
      top: scrollCoordY - customOffset,
      behavior: 'smooth',
    });
  };

  // Пользователь мог сразу ввести hash страницы - переводим его на нужную секцию
  if (location.hash) {
    const el = document.querySelector(location.hash);
    if (!el) return;

    el.scrollIntoView(true);
  }

  anchorLinks.forEach((anchorLink) => {
    anchorLink.addEventListener('click', (event) => {
      event.preventDefault();

      // Чтобы на мобильных при клике закрывалось меню
      if (event.target.closest('.mobile-menu')) {
        event.target.closest('.mobile-menu').classList.remove('active');
        burger.classList.remove('active');
      }

      const hash = anchorLink.getAttribute('href');
      const anchorNode = document.querySelector(hash);
      scrollTo(anchorNode, hash);
    });
  });
}

// Отображать форму в подвале или нет
function setCorrectVisibilityForm() {
  const contactForm = document.querySelector('.footer-form form');

  if (Cookies.get('formSended')) {
    contactForm.classList.add('disabled');
    contactForm.title = 'Вы уже отправляли форму.';

    Array.from(contactForm.elements).forEach((child) => {
      child.disabled = true;
    });
  }
}

// Отправка формы в подвале
function setCorrectContactForm() {
  const contactForm = document.querySelector('.footer-form form');
  if (!contactForm) return;
  contactForm.removeAttribute('novalidate');

  const contactFormFields = contactForm.querySelectorAll('.wpcf7-form-control')
  const contactFormSubmit = contactForm.querySelector('input[type="submit"]');
  const contactFormTel = contactForm.querySelector('input[type="tel"]');
  contactFormFields.forEach((el) => {
    el.setAttribute('required', true);
  });
  contactFormTel.pattern = '\\+\\d-\\d{3}-\\d{3}-\\d{2}-\\d{2}';

  contactFormSubmit.classList.add('trigger');
  contactFormSubmit.dataset.popupSelector = '.popup-footer-form';
  contactFormSubmit.dataset.formSelector = `[action="${contactForm.getAttribute('action')}"]`;

  const errorsInputs = new Set();
  
  contactForm.addEventListener('submit', (event) => {
    // Валидация поля телефона, т.к. используется маска
    if (contactForm['usertel']) {
      if (contactForm['usertel'].value.replace(/[+_-]/g, '').length !== 11) {
        contactForm['usertel'].classList.add('error');
        contactForm['usertel'].title = 'Введите корректный номер телефона!';

        errorsInputs.add(contactForm['username']);
      } else if (contactForm['usertel'].classList.contains('error')) {
        contactForm['usertel'].classList.remove('error');
      }

      if (errorsInputs.size !== 0) {
        errorsInputs.clear();
        return;
      } else {
        errorsInputs.forEach(errInp => errInp.classList.remove('error'));
      }
    }
  });

  contactForm.addEventListener('wpcf7mailsent', () => {
    // Для предотвращения спама - отправляем если не отправляли ранее
    if (!Cookies.get('formSended')) {
      const halfDay = 0.5;
      Cookies.set('formSended', true, { expires: halfDay });
      setCorrectVisibilityForm();
    }
  });
}

// Триггер попапов
function setCorrectPopupTriggers() {
  const triggers = document.getElementsByClassName('trigger');
  const popups = document.querySelectorAll('.popup');
  const showPopup = (popup) => {
    popup.classList.add('active');

    setTimeout(() => {
      popup.classList.remove('active');
    }, 5000);
  };
  const closePopupGlobal = (event, popup) => {
    if (event.target.closest('.popup') !== popup) {
      popup.classList.remove('active');
    }
  };
  
  // Логика открытия попапов.
  // Т. к. некоторые триггеры появляются в процессе выполнения JS
  // Для надёжности поместил в макротаску
  setTimeout(() => {
    for (const trigger of triggers) {
      const formSelector = trigger.dataset.formSelector;
      const popupSelector = trigger.dataset.popupSelector;
      const popup = document.querySelector(popupSelector);
      const form = document.querySelector(formSelector);

      if (formSelector) {
        form.addEventListener('wpcf7mailsent', () => {
          showPopup(popup);
        });
      } else {
        trigger.addEventListener('click', () => {
          showPopup(popup);
        });
      }
    }
  }, 100);
  
  const observer = new MutationObserver((mutations) => {
    for (let mutation of mutations) {
      if (mutation.type === 'attributes') {
        const closePopupFunc = (event) => {
          closePopupGlobal(event, mutation.target);
        };
        if (mutation.target.classList.contains('active')) {
          document.addEventListener('click', closePopupFunc);
        } else {          
          document.removeEventListener('click', closePopupFunc);
        }
      }
    }
  });

  // Логика работы попапов
  popups.forEach((popup) => {
    observer.observe(popup, { attributes: true });

    const closePopup = popup.querySelector('.popup-close');
    const acceptPopup = popup.querySelector('.popup__accept');
    const closePopupFunc = (event) => {
      event.stopPropagation();
      popup.classList.remove('active')
    };

    closePopup.addEventListener('click', closePopupFunc);
    acceptPopup.addEventListener('click', closePopupFunc); 
  });
}

// Приближение фотографий
function setCorrectImagesZoom() {
  Fancybox.bind("[data-fancybox]", {
    Thumbs: {
      type: "classic",
    },
    Images: {
      Panzoom: {
        maxScale: 2,
      },
    },
  });
}

// Аккордеон в ответах на вопросы
function setCorrectAccordion() {
  const questionsList = document.querySelector('.questions-list');
  const questions = questionsList.querySelectorAll('.question');

  const showQuestion = (question, answer) => {
    question.setAttribute('aria-expanded', true);
    answer.setAttribute('aria-hidden', false);
    answer.style.maxHeight = answer.scrollHeight + 'px';
  };
  const hideQuestion = (question, answer) => {
    question.classList.remove('active');
    question.setAttribute('aria-expanded', false);
    answer.setAttribute('aria-hidden', true);
    answer.style.maxHeight = null;
  };

  questionsList.addEventListener('click', (event) => {
    const questionInner = event.target.closest('.question__inner');
    if (!questionInner) return; // Клик должен быть по кнопке, чтобы не закрывался при выделении текста

    const question = event.target.closest('.question');
    const answer = question.querySelector('.question__answer');
    
    questions.forEach((anotherQuestion) => {
      if (anotherQuestion === question) return;

      const answer = anotherQuestion.querySelector('.question__answer');
      hideQuestion(anotherQuestion, answer);
    });

    question.classList.toggle('active');

    if (question.classList.contains('active')) {
      showQuestion(question, answer);
    } else {
      hideQuestion(question, answer);
    }
  });
}

// Слайдеры
function setCorrectSliders() {
  const makeDocumentsSlider = () => {
    const documentsSlider = document.querySelector('.documents-slider .swiper');
    const documentsSwiper = new Swiper(documentsSlider, {
      slidesPerView: 1,
      grabCursor: true,
      navigation: {
        nextEl: '.documents-slider__nav-btn_next',
        prevEl: '.documents-slider__nav-btn_prev',
      },
      breakpoints: {
        651: {
          slidesPerView: 3,
        },
  
        381: {
          slidesPerView: 2,
        }
      }
    });
  };
  const makeTeamSlider = () => {
    const teamSlider = document.querySelector('.team-slider__outer');
    const teamSwiper = new Swiper(teamSlider, {
      slidesPerView: 1,
      spaceBetween: 30,
      grabCursor: true,
      navigation: {
        nextEl: '.team-slider__nav-btn_next',
        prevEl: '.team-slider__nav-btn_prev',
      },
      breakpoints: {
        1031: {
          spaceBetween: 50,
          slidesPerView: 3,
        },

        641: {
          slidesPerView: 2,
        }
      }
    });
    const tiltCards = teamSlider.querySelectorAll('.tilt-card');
    teamSwiper.on('slideChangeTransitionStart', () => {
      tiltCards.forEach((el) => {
        el.vanillaTilt.destroy();
      });
    });

    teamSwiper.on('slideChangeTransitionEnd', () => {
      tiltCards.forEach((el) => {
        VanillaTilt.init(el, {
          reverse: true,
          max: 5,
          speed: 600,
          glare: true,
          'max-glare': .2,
          gyroscope: false,
        });
      });
    });
  };
  const makeSpecialistSlider = () => {
    const specialistSlider = document.querySelector('.choice-slider-specialist__inner');
    const specialistSwiper = new Swiper(specialistSlider, {
      slidesPerView: 4,
      slidesPerGroup: 4,
      spaceBetween: 15,
      grabCursor: false,
      simulateTouch: false,
      navigation: {
        prevEl: '.modal-slider-nav-specialists__nav-btn_prev',
        nextEl: '.modal-slider-nav-specialists__nav-btn_next',
      },
    });
  };

  makeDocumentsSlider();
  makeTeamSlider();
  makeSpecialistSlider();
}

// Инициализация библиотеки ленивой загрузки
function setCorrectLazyLoad() {
  new LazyLoad({
    thresholds: '300px 100%',
    use_native: true,
  });
}

// Выпадающие списки
function setCorrectDropdowns() {
  const dropdowns = document.querySelectorAll('.dropdown__select');

  dropdowns.forEach((dropdown) => {
    const choices = new Choices(dropdown, {
      searchEnabled: false,
      shouldSort: false,
      itemSelectText: '',
    });
  });
}

// Выбор даты
function setCorrectDateInputs() {
  const dateInputs = document.querySelectorAll('.datetime-select__input');
  if (!dateInputs.length) return;

  dateInputs.forEach((dateInput) => {
    new AirDatepicker(dateInput, {
      minDate: new Date(),
      selectedDates: [new Date()],
      timepicker: true,
      minHours: 10,
      maxHours: 23,
      minutesStep: 5,
      position: 'right center',
      buttons: ['clear', 'today'],
    });
  });
}
