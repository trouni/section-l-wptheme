document.addEventListener('DOMContentLoaded', _ => {
  document.querySelectorAll('.section-l-slider figure.swiper-slide-inner > img.swiper-slide-image:not(:only-child)').forEach(img => {
    new_html = "<div>" + img.outerHTML + "</div>";
    img.outerHTML = new_html;
  });
}