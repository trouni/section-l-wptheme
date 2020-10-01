document.addEventListener('DOMContentLoaded', _ => {
  const loc = window.location.toString(),
    params = loc.split('?')[1],
    iframe = document.querySelector('#beds24 iframe');

  const isBeds24Page = loc.match(/section-l\.co\/book/)

  if (isBeds24Page) {
    iframe.src = iframe.src + '?' + params;
    iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    iframe.contentDocument.body.innerHTML = iframe.contentDocument.body.innerHTML + '<link rel="stylesheet" href="https://www.section-l.co/wp-content/themes/section-l-wptheme/css/beds24.css">';
  }
})