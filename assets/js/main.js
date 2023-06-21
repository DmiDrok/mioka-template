setCorrectHeaderByScroll();
setCorrectTelInputs();
setCorrectBurger();
setCorrectServiceCards();
setCorrectSmoothScrollToAnchors();

// setCorrectVisibilityForm();
setCorrectContactForm();
setCorrectPopupTriggers();
setCorrectImagesZoom();
setCorrectAccordeon();

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
  const burger = document.querySelector('.burger');

  anchorLinks.forEach((anchorLink) => {
    anchorLink.addEventListener('click', (event) => {
      event.preventDefault();

      // Чтобы на мобильных при клике закрывалось меню
      if (event.target.closest('.mobile-menu')) {
        event.target.closest('.mobile-menu').classList.remove('active');
        burger.classList.remove('active');
      }

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
  if (!contactForm) return;

  const contactFormFields = contactForm.querySelectorAll('.wpcf7-form-control')
  const contactFormSubmit = contactForm.querySelector('input[type="submit"]');
  contactFormFields.forEach((el) => {
    el.setAttribute('required', true)
  });
  contactFormSubmit.classList.add('trigger');
  contactFormSubmit.dataset.popupSelector = '.popup-footer-form';
  contactFormSubmit.dataset.formSelector = '[name="contact-form"]';

  const contactFormAction = contactForm.getAttribute('action');
  const errorsInputs = new Set();
  
  contactForm.addEventListener('submit', (event) => {
    event.preventDefault();

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

    // Для предотвращения спама - отправляем если не отправляли ранее
    if (!Cookies.get('formSended')) {
      const formData = new FormData(contactForm);
      fetch(contactFormAction, {
        method: 'POST',
        body: formData,
      });
      const halfDay = 0.5;
      Cookies.set('formSended', true, { expires: halfDay });
    } else {
      // alert('Форма уже была отправлена. Следующая отправка возможна только через 12 часов.');
    }

    contactForm.reset();
  });
}

// Триггер попапов
function setCorrectPopupTriggers() {
  const triggers = document.getElementsByClassName('trigger');
  const popups = document.querySelectorAll('.popup');
  
  // Логика открытия попапов.
  // Т. к. некоторые триггеры появляются в процессе выполнения JS
  // Для надёжности поместил в макротаску
  setTimeout(() => {
    for (const trigger of triggers) {
      trigger.addEventListener('click', (event) => {
        event.stopPropagation();
        const popupSelector = trigger.dataset.popupSelector;
        const formSelector = trigger.dataset.formSelector;
        const popup = document.querySelector(popupSelector);
        const form = document.querySelector(formSelector);
        
        // Попапы могут вызвать кнопки submit у форм
        if (form) {
          if (Cookies.get('formSended')) return;
          
          const isFormValid = form.reportValidity();

          console.log(isFormValid);
          if (isFormValid) {
            popup.classList.add('active');
          }
        }

        setTimeout(() => {
          popup.classList.remove('active');
        }, 5000);
      });
    }
  }, 100);

  // Логика работы попапов
  popups.forEach((popup) => {
    const closePopupGlobal = (event) => {
      if (event.target.closest('.popup') !== popup) {
        popup.classList.remove('active');
      }
    };
    const observer = new MutationObserver((mutations) => {
      for (let mutation of mutations) {
        if (mutation.type === 'attributes') {
          if (popup.classList.contains('active')) {
            document.addEventListener('click', closePopupGlobal);
          } else {          
            document.removeEventListener('click', closePopupGlobal);
          }
        }
      }
    });
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

  });
}

// Аккордеон в ответах на вопросы
function setCorrectAccordeon() {
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

