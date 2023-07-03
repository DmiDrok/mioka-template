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
  try {
    func.call(ctx)
  } catch(err) {
    console.error(err.message);
  }
};

// Паттерн регулярки для проверки корректности введённого номера телефона
// Необходим из-за маски, устанавливаемой в setCorrectMasksOnInputs на input[type="tel"]
window['telephone-pattern'] = '\\+\\d-\\d{3}-\\d{3}-\\d{2}-\\d{2}';

// Вызываем на любых устройствах
const funcsToCall = [
  setCorrectHeaderByScroll, setCorrectMasksOnInputs, setCorrectBurger, setCorrectVisibilityForm,
  setCorrectContactForm, setCorrectTriggers, setCorrectImagesZoom, setCorrectDropdowns,
  setCorrectAccordion, setCorrectSliders, setCorrectLazyLoad, setCorrectDateInputs,
  setCorrectOrderModal, setCorrectOrderForm,
];

// Вызываем только на компьютерах, т. к. требовательные
const desktopFuncs = [
  setCorrectTiltCards, setCorrectSmoothScrollToAnchors
];

// Вызываем на малых экранах, т. к. скрывают/открывают элементы
const mobileFuncs = [
  setCorrectShowMoreBtn,
];

funcsToCall.forEach((func) => {
  safeCallFunc(func, this);
});

// Выполнение тела условий зависит от ширины экрана
const performDependingWidth = () => {
  if (window.matchMedia('(min-width: 760px)').matches) {
    desktopFuncs.forEach((func) => {
      safeCallFunc(func, this);
    });
  } else if (window.matchMedia('(max-width: 759px)').matches) {
    mobileFuncs.forEach((func) => {
      safeCallFunc(func, this);
    });
  }
};
performDependingWidth();

const getScreenOrientationType = () => {
  return screen.orientation.type.includes('landscape') ? 'landscape' : 'portrait'
};
let nowScreenType = getScreenOrientationType();

screen.orientation.addEventListener('change', () => {
  let newOrientationType = getScreenOrientationType();
  if (nowScreenType !== newOrientationType) {
    // Ориентация устройства изменилась
    // Выполняем функции с задержкой, чтобы всё точно обновилось
    setTimeout(() => {
      performDependingWidth();
    }, 100);
    nowScreenType = newOrientationType;
  }
});


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

// Маски для полей ввода (телефона и т. д.)
function setCorrectMasksOnInputs() {
  const setTelMasks = () => {
    const telMask = new Inputmask('+7-999-999-99-99');
    const telInputs = document.querySelectorAll('input[type="tel"]');
  
    telInputs.forEach((telInput) => {
      telMask.mask(telInput);
    });
  };

  setTelMasks();
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
  contactFormTel.pattern = window['telephone-pattern'];

  contactFormSubmit.classList.add('trigger');
  contactFormSubmit.dataset.triggerResultSelector = '.popup-footer-form';
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

// Настройка триггеров попапов, модальных окон
function setCorrectTriggers() {
  const triggers = document.getElementsByClassName('trigger');
  const triggerResults = document.querySelectorAll('.trigger-result');
  // Inert - чтобы пользователь не мог вылезти за пределы попапа / модального окна
  // Поддержка у последних браузеров
  const needInert = [
    document.querySelector('.header'), 
    document.querySelector('.main'), 
    document.querySelector('.footer'),
  ];
  const makeBodyUnscroll = () => {
    if (!document.body.classList.contains('unscroll')) {
      document.body.classList.add('unscroll');
    }
  };
  const makeBodyScroll = () => {
    if (document.body.classList.contains('unscroll')) {
      document.body.classList.remove('unscroll');
    }
  };
  const showTriggerResult = (triggerResult, { timeout, blockScroll }) => {
    triggerResult.classList.add('active');

    if (timeout) {
      setTimeout(() => {
        triggerResult.classList.remove('active');
      }, timeout);
    }

    if (blockScroll) {
      makeBodyUnscroll();
    }
  };
  const closeTriggerResultGlobal = (event, triggerResult) => {
    const triggerResultContent = triggerResult.querySelector('.trigger-result__content');

    if (event.target.closest('.trigger-result__content') !== triggerResultContent) {
      triggerResult.classList.remove('active');
      makeBodyScroll();
    }
  };
  
  // Логика открытия попапов.
  // Т. к. некоторые триггеры появляются в процессе выполнения JS
  // Для надёжности поместил в макротаску
  setTimeout(() => {
    for (const trigger of triggers) {
      const formSelector = trigger.dataset.formSelector;
      const triggerResultSelector = trigger.dataset.triggerResultSelector;
      const triggerResult = document.querySelector(triggerResultSelector);
      const form = document.querySelector(formSelector);
      
      if (formSelector) {
        form.addEventListener('wpcf7mailsent', () => {
          showTriggerResult(triggerResult, { timeout: 5000 });
        });
      } else {
        trigger.addEventListener('click', (event) => {
          event.stopPropagation();
          showTriggerResult(triggerResult, { timeout: null, blockScroll: true });
        });
      }
    }
  }, 100);
  
  const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      if (mutation.type === 'attributes') {
        const closeTriggerResultFunc = (event) => {
          closeTriggerResultGlobal(event, mutation.target);
        };
        if (mutation.target.classList.contains('active')) {
          needInert.forEach((node) => node.inert = true);
          document.addEventListener('click', closeTriggerResultFunc);
        } else {          
          needInert.forEach((node) => node.inert = false);
          document.removeEventListener('click', closeTriggerResultFunc);
        }
      }
    });
  });

  // Логика работы попапов
  triggerResults.forEach((triggerResult) => {
    observer.observe(triggerResult, { attributes: true });

    const closeTriggerResult = triggerResult.querySelector('.close');
    const acceptTriggerResult = triggerResult.querySelector('.accept');
    const closeTriggerResultFunc = (event) => {
      event.stopPropagation();
      triggerResult.classList.remove('active');
      makeBodyScroll();
    };

    if (closeTriggerResult) {
      closeTriggerResult.addEventListener('click', closeTriggerResultFunc);
    }

    if (acceptTriggerResult) {
      acceptTriggerResult.addEventListener('click', closeTriggerResultFunc); 
    }
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
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 15,
      grabCursor: false,
      simulateTouch: false,
      navigation: {
        prevEl: '.modal-slider-nav-specialists__nav-btn_prev',
        nextEl: '.modal-slider-nav-specialists__nav-btn_next',
      },
      breakpoints: {
        800: {
          slidesPerView: 4,
          slidesPerGroup: 4,
        },

        520: {
          slidesPerView: 3,
          slidesPerGroup: 3,
        },

        375: {
          slidesPerView: 2,
          slidesPerGroup: 2,
        }
      }
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

  dropdowns.forEach((dropdown, index) => {
    const choices = new Choices(dropdown, {
      searchEnabled: false,
      shouldSort: false,
      itemSelectText: '',
      noChoicesText: 'Опции не найдены...',
    });
    dropdown.dataset.myChoicesId = index;
    choices.customDefaultLabel = 'Меню выбора';
    window[`my-choices-${index}`] = choices;
  });
}

// Выбор даты
function setCorrectDateInputs() { 
  const dateInputs = document.querySelectorAll('.datetime-select__input');
  if (!dateInputs.length) return;
  
  const minDate = new Date();
  let maxDate = new Date((new Date(minDate)).setMonth(minDate.getMonth() + 1));
  maxDate = new Date(maxDate.setHours(19));
  maxDate = new Date(maxDate.setMinutes(50));
  
  const mobileDatepickerMedia = window.matchMedia('(max-width: 725px)');
  const updateDatepickerToMobileOrNo = ({ isMobile, datepicker }) => {
    datepicker.update({
      isMobile: isMobile
    });
  };
  let isMobile = mobileDatepickerMedia.matches;
  
  dateInputs.forEach((dateInput, index) => {
    const datepicker = new AirDatepicker(dateInput, {
      minHours: 10,
      maxHours: 20,
      minDate: minDate,
      maxDate: maxDate,
      timepicker: true,
      position: 'right bottom',
      buttons: ['clear'],
      isMobile: isMobile,
      weekends: [],
    });

    // В зависимости от браузера будет использоваться разный метод для установки обработчика
    if ('addEventListener' in mobileDatepickerMedia) {
      mobileDatepickerMedia.addEventListener('change', (event) => {
        isMobile = event.matches;
        updateDatepickerToMobileOrNo({ isMobile, datepicker });
      });
    } else {
      mobileDatepickerMedia.addListener((event) => {
        isMobile = event.matches;
        updateDatepickerToMobileOrNo({ isMobile, datepicker });
      });
    }

    dateInput.dataset.myDatepickerId = index;
    window[`my-datepicker-${index}`] = datepicker;
  });

  // Контейнер для календаря появляется после его инициализации
  // Поэтому - выполняем через setTimeout
  setTimeout(() => {
    try {
      const airDatepickerContainer = document.querySelector('.air-datepicker-global-container');
      airDatepickerContainer.addEventListener('click', (event) => {
        event.stopPropagation();
      });
    } catch(err) {

    }
  }, 100);
}

// Модальное окно оформления заявки
function setCorrectOrderModal() {
  // const modalTriggers = document.querySelectorAll('[data-modal-order]');

  // modalTriggers.forEach((modalTrigger) => {
  //   modalTrigger.addEventListener('click', () => {
  //     const modalSelector = modalTrigger.dataset.modalSelector;
  //     if (!modalSelector) return;
  //     const modal = document.querySelector(modalSelector);
  //     const modalClose = modal.querySelector('.modal-close');

  //     modal.classList.add('active');

  //     modalClose.addEventListener('click', () => {
  //       modal.classList.remove('active');
  //     });
  //   });
  // });  
}

// Кнопка "показать ещё" в секции услуг
function setCorrectShowMoreBtn() {
  const showMoreButtons = document.querySelectorAll('.js-show-more');

  showMoreButtons.forEach((showMore) => {
    const showMoreParent = showMore.parentElement;
    const services = Array.from(document.querySelector(showMore.dataset.loadSelector).children);
    const allServicesLength = services.length;
    let visibleNow = 4;

    // Скроет кнопку "Показать ещё" когда всё уже показано
    const hideOnAll = () => {
      if (visibleNow >= allServicesLength) {
        showMoreParent.style.display = 'none';
      }
    };
    hideOnAll();

    showMore.addEventListener('click', () => {
      visibleNow += 2;
      services.slice(0, visibleNow).forEach((elem) => {
        elem.classList.add('is-visible');
      });

      hideOnAll();
    });
  });
}

// Логика формы оформления записи
function setCorrectOrderForm() {
  const teamMemberBtns = Array.from(document.querySelectorAll('.team-member__action')); // Кнопки выбора специалиста в секции команды
  const specialistsBtns = Array.from(document.querySelectorAll('.variation')); // Кнопки выбора специалиста в модалке
  const servicesBtns = Array.from(document.querySelectorAll('.service__action')); // Кнопки выбора услуги в секции услуг

  // Вспомогательные компоненты
  const orderForm = document.querySelector('#modal-form');
  const userTel = orderForm['user-tel'];
  const servicesDropdown = orderForm.services; // Узел <select>
  const choicesDropdown = window[`my-choices-${servicesDropdown.dataset.myChoicesId}`]; // Компонент от choices.js
  const dateInput = orderForm.datepicker; // Узел <input type="text">
  const airDatepicker = window[`my-datepicker-${dateInput.dataset.myDatepickerId}`]; // Компонент от air-datepicker.js
  const resultPrice = orderForm.querySelector('.modal-form__result-price'); // Узел блока итоговой цены
  const orderFormSubmit = orderForm['modal-form-submit'];

  // Для валидации
  let formValid = false;
  const validObj = {
    fieldsValid: false,
    selectedSpecialist: null,
  };
  Object.defineProperty(validObj, 'valid', {
    get() {
      return formValid;
    },

    set(newVal) {
      formValid = newVal && Boolean(this.selectedSpecialist);

      if (formValid === true) {
        // Обработка валидной формы 
        // (показать итоговую цену и разблокировать кнопку оформления заказа)
        resultPrice.classList.add('is-visible');
        orderFormSubmit.disabled = false;
      } else {
        // Делаем обратные действия валидной ветки
        resultPrice.classList.remove('is-visible');
        orderFormSubmit.disabled = true;
      }
    }
  });
  const needFill = [userTel, servicesDropdown, dateInput];
  needFill.forEach((field) => {
    field.addEventListener('change', () => {
      validObj.valid = checkFullValid(needFill);
    });
  });
  // Будем имитировать событие change по клику на календарь и в onSelect у airDatepicker
  // Т. к. у пользователя нет возможности вводить самому в поле, т. к. оно readonly
  const emitChangeOnDateInput = () => {
    setTimeout(() => {
      const changeEvent = new Event('change');
      dateInput.dispatchEvent(changeEvent);
    }, 0);
  };
  airDatepicker.update({
    onSelect() {
      emitChangeOnDateInput();
    }
  });
  airDatepicker.$datepicker.addEventListener('click', () => {
    emitChangeOnDateInput();
  });

  dateInput.addEventListener('change', () => {
    // if (dateInput.value) {
    //   validObj.valid = true && checkFullValid(needFill);
    // } else {
    //   validObj.valid = false && checkFullValid(needFill);
    // }
  });
  dateInput.customValidate = () => Boolean(dateInput.value);

  // Вспомогательные функции
  choicesDropdown.clear = () => {
    choicesDropdown.clearStore(); // Очищаем уже имеющиеся опции
    choicesDropdown.setChoices([{ 
      label: choicesDropdown.customDefaultLabel, 
      value: '', 
      disabled: true, 
      selected: true }], 
      'value', 'label', true);
  };
  // Переключатель в состояния disabled и обратно
  const toggleOrderElems = ({ disable }) => {
    Array.from(orderForm.elements).forEach((el) => {
      if (el.nodeName === 'BUTTON' && el.getAttribute('type') === 'submit') {
        if (disable === true) {
          el.disabled = disable;
        } else if (validObj.valid) {
          el.disabled = false;
        }
      } else if (el.nodeName === 'SELECT') {
        choicesDropdown[disable ? 'disable' : 'enable']();
        el.disabled = disable;
      } else if (el.nodeName === 'INPUT') {
        el.disabled = disable;
      }
    });
  };

  // Выходные дни в массиве. Требуются для взятия корректного индекса
  // Т. к. 0 индекс - это воскресенье (другой формат)
  const days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
  // Установка выходных дней
  const setWeekends = (schedule=[]) => {
    const weekends = new Set();

    if (Object.keys(schedule).length > 0) {
      days.forEach((day, index) => {
        if (!schedule[day].start || !schedule[day].end) {
          weekends.add(index);
        }
      });
    }
    
    airDatepicker.update({
      weekends: [...weekends.values()]
    });
  };
  // Проверка на заполненность полей
  const checkFullValid = (fields) => {
    let resultValid = true; // resultValid копим только для обычных полей, не имеющих readonly

    for (let field of fields) {
      if (field.hasAttribute('readonly')) {
        resultValid = field.customValidate();
        console.log(`В проверке: ${resultValid}`);
        continue; // Для readonly - описаны свои проверки
      } else {
        resultValid = resultValid && field.value.length > 0;
      }
    }

    return resultValid;
  };
  validObj.valid = checkFullValid(needFill);

  // Обсервер следит за изменением класса у карточек специалистов
  const specialistsObserver = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      if (mutation.type === 'attributes') {
        const selectedSpecialist = specialistsBtns.find((btn) => btn.classList.contains('active'));
        const services = [];
        
        // Ветка с выбранным специалистом
        if (selectedSpecialist) {
          validObj.selectedSpecialist = selectedSpecialist;
          resultPrice.classList.remove('is-disabled'); // ЖЕЛАТЕЛЬНО ВЫНЕСТИ В ОТДЕЛЬНОЕ МЕСТО
          toggleOrderElems({ disable: false }); // Разблокируем форму для заполнения
          
          const employeerServicesStr = selectedSpecialist.dataset.employeerServices;
          
          const schedule = JSON.parse(selectedSpecialist.dataset.schedule); // Расписание сотрудника
          setWeekends(schedule); // Проставляем выходные в календаре по графику работы
          if (employeerServicesStr !== '') {
            let servicesArr = employeerServicesStr.split('; ');
            servicesArr.forEach((service) =>
            services.push({ value: service, label: service, disabled: false }));

            // Если услуга была выбрана при первом выделении специалиста - оставляем её
            const choicesValue = choicesDropdown.getValue(true);
            if (!servicesArr.includes(choicesValue)) {
              choicesDropdown.clear();
              choicesDropdown.setChoiceByValue(servicesArr[0]);
            }
            choicesDropdown.setChoices(services, 'value', 'label', true);
          } else {
            choicesDropdown.clear();
          }

          validObj.valid = checkFullValid(needFill);
        } else {
          validObj.selectedSpecialist = null;
          resultPrice.classList.add('is-disabled'); // ЖЕЛАТЕЛЬНО ВЫНЕСТИ В ОТДЕЛЬНОЕ МЕСТО
          Array.from(orderForm.elements).forEach(() => {
            toggleOrderElems({ disable: true });
          });
          setWeekends();
        }
      }
    })
  });

  // Обработчики для кнопок в секции команды
  teamMemberBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const employerId = Number(btn.dataset.employerId);
      const specialist = specialistsBtns.find((specialist) => {
        return Number(specialist.dataset.employerId) === employerId;
      });

      if (specialist) {
        specialist.click();
      }
    });
  });

  // Обработчики для кнопок специалистов в модалке
  specialistsBtns.forEach((btn) => {
    specialistsObserver.observe(btn, { attributes: true });

    btn.addEventListener('click', () => {
      specialistsBtns.forEach((otherBtn) => {
        if (otherBtn !== btn && otherBtn.classList.contains('active')) {
          otherBtn.classList.remove('active');
        }
      });

      btn.classList.toggle('active');
    });
  });

  // Обработчики для кнопок в секции услуг
  servicesBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const serviceNameDefault = btn.dataset.serviceName;
      const serviceNameLower = serviceNameDefault.toLowerCase();
      const specialistWithService = specialistsBtns.find((specialist) => {
        return specialist.dataset.employeerServices
                                 .toLowerCase()
                                 .includes(serviceNameLower);
      });
      if (specialistWithService) {
        if (!specialistWithService.classList.contains('active')) {
          specialistWithService.click();
        }
        setTimeout(() => {
          choicesDropdown.setChoiceByValue(serviceNameDefault);
        }, 100);
      }
    });
  });
}

