"use strict";

var _this = void 0;
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
//=require inputmask.js
//=require tilt.min.js
//=require js-cookie.min.js
//=require fancybox.umd.js
//=require swiper.min.js
//=require fix-wp.js
//=require lazyload.min.js

var safeCallFunc = function safeCallFunc(func, ctx) {
  try {
    func.call(ctx);
  } catch (err) {
    console.error(err.message);
  }
};

// Вызываем на любых устройствах
var funcsToCall = [setCorrectHeaderByScroll, setCorrectTelInputs, setCorrectBurger, setCorrectVisibilityForm, setCorrectContactForm, setCorrectPopupTriggers, setCorrectImagesZoom, setCorrectAccordion, setCorrectSliders, setCorrectLazyLoad];

// Вызываем только на компьютерах, т. к. требовательные
var desktopFuncs = [setCorrectTiltCards, setCorrectSmoothScrollToAnchors];
funcsToCall.forEach(function (func) {
  safeCallFunc(func, _this);
});
if (window.matchMedia('(min-width: 760px)').matches) {
  desktopFuncs.forEach(function (func) {
    safeCallFunc(func, _this);
  });
}

// По скроллу - скрываем верхнюю часть шапки
function setCorrectHeaderByScroll() {
  var header = document.querySelector('#header');
  var headerTop = document.querySelector('.header-top');
  var headerBottom = document.querySelector('.header-bottom');
  var safetyPixels = 5; // Чтобы не было никаких зазоров

  var scrollState = function scrollState() {
    if (!header.classList.contains('hidden')) {
      headerTop.classList.add('hidden');
    }
    if (!header.classList.contains('active')) {
      headerBottom.classList.add('active');
    }
    if (!header.style.transform) {
      header.style.transform = "translateY(".concat(-(headerTop.clientHeight + safetyPixels) + 'px', ")");
    }
  };
  var topState = function topState() {
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
  var checkScrollPosition = function checkScrollPosition() {
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
  var scrollPositions = [];
  checkScrollPosition();
  window.addEventListener('scroll', function () {
    checkScrollPosition();
  }, {
    passive: true
  });
}

// Маски для полей ввода телефона
function setCorrectTelInputs() {
  var mask = new Inputmask('+7-999-999-99-99');
  var telInputs = document.querySelectorAll('input[type="tel"]');
  telInputs.forEach(function (telInput) {
    mask.mask(telInput);
  });
}

// Настройка логики бургера
function setCorrectBurger() {
  var burger = document.querySelector('.burger');
  var mobileMenu = document.querySelector('.mobile-menu');
  burger.addEventListener('click', function () {
    burger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });
}

// Эффект наклона на карточах услуг
function setCorrectTiltCards() {
  var cards = document.querySelectorAll('.tilt-card');
  var options = {
    reverse: true,
    max: 5,
    speed: 600,
    glare: true,
    'max-glare': .2,
    gyroscope: false
  };
  cards.forEach(function (card) {
    VanillaTilt.init(card, options);
  });
}

// Плавный скролл к якорям
function setCorrectSmoothScrollToAnchors() {
  var anchorLinks = document.querySelectorAll('a[href^="#"]');
  var burger = document.querySelector('.burger');
  var header = document.querySelector('.header');
  var scrollTo = function scrollTo(node, hash) {
    if (!node) {
      node = document.querySelector(hash);
    }
    history.pushState({}, '', hash); // Не location.hash, т.к. при нём будет дергаться страничка

    var customOffset = window.matchMedia('(max-width: 640px)').matches ? 50 : 20;
    var nodeTop = node.getBoundingClientRect().top;
    if (nodeTop < 0) {
      customOffset += header.clientHeight / 2.5;
    }
    var scrollCoordY = nodeTop + window.scrollY;
    window.scrollTo({
      top: scrollCoordY - customOffset,
      behavior: 'smooth'
    });
  };

  // Пользователь мог сразу ввести hash страницы - переводим его на нужную секцию
  if (location.hash) {
    var el = document.querySelector(location.hash);
    if (!el) return;
    el.scrollIntoView(true);
  }
  anchorLinks.forEach(function (anchorLink) {
    anchorLink.addEventListener('click', function (event) {
      event.preventDefault();

      // Чтобы на мобильных при клике закрывалось меню
      if (event.target.closest('.mobile-menu')) {
        event.target.closest('.mobile-menu').classList.remove('active');
        burger.classList.remove('active');
      }
      var hash = anchorLink.getAttribute('href');
      var anchorNode = document.querySelector(hash);
      scrollTo(anchorNode, hash);
    });
  });
}

// Отображать форму в подвале или нет
function setCorrectVisibilityForm() {
  var contactForm = document.querySelector('.footer-form form');
  if (Cookies.get('formSended')) {
    contactForm.classList.add('disabled');
    contactForm.title = 'Вы уже отправляли форму.';
    Array.from(contactForm.elements).forEach(function (child) {
      child.disabled = true;
    });
  }
}

// Отправка формы в подвале
function setCorrectContactForm() {
  var contactForm = document.querySelector('.footer-form form');
  if (!contactForm) return;
  contactForm.removeAttribute('novalidate');
  var contactFormFields = contactForm.querySelectorAll('.wpcf7-form-control');
  var contactFormSubmit = contactForm.querySelector('input[type="submit"]');
  var contactFormTel = contactForm.querySelector('input[type="tel"]');
  contactFormFields.forEach(function (el) {
    el.setAttribute('required', true);
  });
  contactFormTel.pattern = '\\+\\d-\\d{3}-\\d{3}-\\d{2}-\\d{2}';
  contactFormSubmit.classList.add('trigger');
  contactFormSubmit.dataset.popupSelector = '.popup-footer-form';
  contactFormSubmit.dataset.formSelector = "[action=\"".concat(contactForm.getAttribute('action'), "\"]");
  var errorsInputs = new Set();
  contactForm.addEventListener('submit', function (event) {
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
        errorsInputs.forEach(function (errInp) {
          return errInp.classList.remove('error');
        });
      }
    }
  });
  contactForm.addEventListener('wpcf7mailsent', function () {
    // Для предотвращения спама - отправляем если не отправляли ранее
    if (!Cookies.get('formSended')) {
      var halfDay = 0.5;
      Cookies.set('formSended', true, {
        expires: halfDay
      });
      setCorrectVisibilityForm();
    }
  });
}

// Триггер попапов
function setCorrectPopupTriggers() {
  var triggers = document.getElementsByClassName('trigger');
  var popups = document.querySelectorAll('.popup');
  var showPopup = function showPopup(popup) {
    popup.classList.add('active');
    setTimeout(function () {
      popup.classList.remove('active');
    }, 5000);
  };
  var closePopupGlobal = function closePopupGlobal(event, popup) {
    if (event.target.closest('.popup') !== popup) {
      popup.classList.remove('active');
    }
  };

  // Логика открытия попапов.
  // Т. к. некоторые триггеры появляются в процессе выполнения JS
  // Для надёжности поместил в макротаску
  setTimeout(function () {
    var _iterator = _createForOfIteratorHelper(triggers),
      _step;
    try {
      var _loop = function _loop() {
        var trigger = _step.value;
        var formSelector = trigger.dataset.formSelector;
        var popupSelector = trigger.dataset.popupSelector;
        var popup = document.querySelector(popupSelector);
        var form = document.querySelector(formSelector);
        if (formSelector) {
          form.addEventListener('wpcf7mailsent', function () {
            showPopup(popup);
          });
        } else {
          trigger.addEventListener('click', function () {
            showPopup(popup);
          });
        }
      };
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        _loop();
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }
  }, 100);
  var observer = new MutationObserver(function (mutations) {
    var _iterator2 = _createForOfIteratorHelper(mutations),
      _step2;
    try {
      var _loop2 = function _loop2() {
        var mutation = _step2.value;
        if (mutation.type === 'attributes') {
          var closePopupFunc = function closePopupFunc(event) {
            closePopupGlobal(event, mutation.target);
          };
          if (mutation.target.classList.contains('active')) {
            document.addEventListener('click', closePopupFunc);
          } else {
            document.removeEventListener('click', closePopupFunc);
          }
        }
      };
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        _loop2();
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }
  });

  // Логика работы попапов
  popups.forEach(function (popup) {
    observer.observe(popup, {
      attributes: true
    });
    var closePopup = popup.querySelector('.popup-close');
    var acceptPopup = popup.querySelector('.popup__accept');
    var closePopupFunc = function closePopupFunc(event) {
      event.stopPropagation();
      popup.classList.remove('active');
    };
    closePopup.addEventListener('click', closePopupFunc);
    acceptPopup.addEventListener('click', closePopupFunc);
  });
}

// Приближение фотографий
function setCorrectImagesZoom() {
  Fancybox.bind("[data-fancybox]", {
    Thumbs: {
      type: "classic"
    },
    Images: {
      Panzoom: {
        maxScale: 2
      }
    }
  });
}

// Аккордеон в ответах на вопросы
function setCorrectAccordion() {
  var questionsList = document.querySelector('.questions-list');
  var questions = questionsList.querySelectorAll('.question');
  var showQuestion = function showQuestion(question, answer) {
    question.setAttribute('aria-expanded', true);
    answer.setAttribute('aria-hidden', false);
    answer.style.maxHeight = answer.scrollHeight + 'px';
  };
  var hideQuestion = function hideQuestion(question, answer) {
    question.classList.remove('active');
    question.setAttribute('aria-expanded', false);
    answer.setAttribute('aria-hidden', true);
    answer.style.maxHeight = null;
  };
  questionsList.addEventListener('click', function (event) {
    var questionInner = event.target.closest('.question__inner');
    if (!questionInner) return; // Клик должен быть по кнопке, чтобы не закрывался при выделении текста

    var question = event.target.closest('.question');
    var answer = question.querySelector('.question__answer');
    questions.forEach(function (anotherQuestion) {
      if (anotherQuestion === question) return;
      var answer = anotherQuestion.querySelector('.question__answer');
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
  var makeDocumentsSlider = function makeDocumentsSlider() {
    var documentsSlider = document.querySelector('.documents-slider .swiper');
    var documentsSwiper = new Swiper(documentsSlider, {
      slidesPerView: 1,
      grabCursor: true,
      navigation: {
        nextEl: '.documents-slider__nav-btn_next',
        prevEl: '.documents-slider__nav-btn_prev'
      },
      breakpoints: {
        651: {
          slidesPerView: 3
        },
        381: {
          slidesPerView: 2
        }
      }
    });
  };
  var makeTeamSlider = function makeTeamSlider() {
    var teamSlider = document.querySelector('.team-slider__outer');
    var teamSwiper = new Swiper(teamSlider, {
      slidesPerView: 1,
      spaceBetween: 30,
      grabCursor: true,
      navigation: {
        nextEl: '.team-slider__nav-btn_next',
        prevEl: '.team-slider__nav-btn_prev'
      },
      breakpoints: {
        1031: {
          spaceBetween: 50,
          slidesPerView: 3
        },
        641: {
          slidesPerView: 2
        }
      }
    });
    var tiltCards = teamSlider.querySelectorAll('.tilt-card');
    teamSwiper.on('slideChangeTransitionStart', function () {
      tiltCards.forEach(function (el) {
        el.vanillaTilt.destroy();
      });
    });
    teamSwiper.on('slideChangeTransitionEnd', function () {
      tiltCards.forEach(function (el) {
        VanillaTilt.init(el, {
          reverse: true,
          max: 5,
          speed: 600,
          glare: true,
          'max-glare': .2,
          gyroscope: false
        });
      });
    });
  };
  makeDocumentsSlider();
  makeTeamSlider();
}

// Инициализация библиотеки ленивой загрузки
function setCorrectLazyLoad() {
  new LazyLoad({
    thresholds: '300px 100%',
    use_native: true
  });
}