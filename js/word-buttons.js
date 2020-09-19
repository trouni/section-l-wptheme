const wordPhotos = document.querySelectorAll('[data-word]')
const wordButtons = document.querySelectorAll('.round-word-btn')

wordButtons.forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault()
    const word = button.innerText.toLowerCase()
    wordPhotos.forEach(photo => photo.classList.remove('active'))
    wordButtons.forEach(photo => photo.classList.remove('active'))
    button.classList.add('active')
    document.querySelector(`[data-word=${word}]`).classList.add('active')
  })
})