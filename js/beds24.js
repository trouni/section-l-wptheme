const urlParams = new URLSearchParams(window.location.search);

document.addEventListener('DOMContentLoaded', _ => {
  const beds24Page = document.getElementById('beds24');

  if (beds24Page) {
    iframe = document.querySelector('#beds24 iframe');
    iframeParams = new URLSearchParams(iframe.src.split('?')[1])
    urlParams.keys().forEach(key=>iframeParams.append(key, urlParams.get(key)))
    iframe.src = iframe.src.split('?')[0] + '?' + iframeParams;
    beds24Page.classList.remove('invisible')
  }
})