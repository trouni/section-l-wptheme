const collapsibleLogo = document.querySelector('.site-logo')
if (collapsibleLogo) {
  document.addEventListener('scroll', _ => {
    window.scrollY >= 100 ? collapsibleLogo.classList.add('collapsed') : collapsibleLogo.classList.remove('collapsed')
  })
}