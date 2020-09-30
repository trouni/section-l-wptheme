;(function(doc, win, add, remove, loaded, load) {
  doc.ready = new Promise(function(resolve) {
    if (doc.readyState === 'complete') {
      resolve();
    } else {
      function onReady() {
        resolve();
        doc[remove](loaded, onReady, true);
        win[remove](load, onReady, true);
      }
      doc[add](loaded, onReady, true);
      win[add](load, onReady, true);
    }
  });
})(document, window, 'addEventListener', 'removeEventListener', 'DOMContentLoaded', 'load');

document.fonts.ready.then(_ => {
  document.querySelector('body').classList.add('fonts-loaded')
})

const animationDelay = new Promise((resolve, reject) => {
  document.fonts.ready.then(_ => setTimeout(resolve, 2000))
});

const waitToLoad = [
  document.ready,
  animationDelay
]

Promise.all(waitToLoad).then(_ => {
  const startAnimation = document.querySelector('.start-animation')
  if (startAnimation) startAnimation.classList.add('animate')
});
