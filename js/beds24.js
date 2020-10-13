
const loc = window.location.toString(),
  params = loc.split('?')[1];

const beds24Page = document.getElementById('beds24');

document.addEventListener('DOMContentLoaded', _ => {
  if (beds24Page) {  
    iframe = document.querySelector('#beds24 iframe');
    iframe.src = iframe.src + '?' + params;
    // // Can't access iframe on other domain, so code below doesn't work :(
    //   iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    //   iframe.contentDocument.body.innerHTML = iframe.contentDocument.body.innerHTML + '<link rel="stylesheet" href="https://www.section-l.co/wp-content/themes/section-l-wptheme/css/beds24.css">';
    document.getElementById('beds24').classList.remove('invisible')
  }
})