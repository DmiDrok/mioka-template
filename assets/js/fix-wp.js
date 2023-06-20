document.addEventListener('DOMContentLoaded', () => {
  wpSetCorrectTopPanelOffset();
});

// Корректное отображение с панелью сверху (только для администратора)
function wpSetCorrectTopPanelOffset() {
  if (window.matchMedia('(max-width: 600px)').matches) return; // Шапка от WordPress'а на маленьких дисплеях - скрывается при скролле.

  const adminBar = document.querySelector('#wpadminbar');
  if (!adminBar ) return;

  const header = document.querySelector('.header');
  const main = document.querySelector('.main');
  const footer = document.querySelector('.footer');

  [header, main, footer].forEach((domNode) => {
    const marginNow = parseFloat(getComputedStyle(domNode).marginTop);

    if (marginNow) {
      domNode.style.marginTop = marginNow + adminBar.clientHeight + 'px';
    }
  })
  header.style.marginTop = adminBar.clientHeight + 'px';
}

const wpCfFields = document.querySelectorAll('.wpcf7-form-control');
const attrsNeedRemove = ['size', 'rows', 'cols'];

// wpCfFields.forEach((field) => {
//   attrsNeedRemove.forEach((attr) => {
//     field.removeAttribute(field.removeAttribute(attr));
//   });
// });