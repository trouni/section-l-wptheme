const wordPhotos = document.querySelectorAll('[data-word]')
const wordButtons = document.querySelectorAll('.round-word-btn')
let activeButton = 0

const activateButton = (button) => {
  wordPhotos.forEach(photo => photo.classList.remove('active'))
  wordButtons.forEach(photo => photo.classList.remove('active'))
  const word = button.innerText.toLowerCase()
  button.classList.add('active')
  document.querySelector(`[data-word=${word}]`).classList.add('active')
}

const cyclePhotos = () => {
  activeButton = (activeButton + 1) % wordButtons.length
  activateButton(wordButtons[activeButton])
}

const cycleInterval = setInterval(cyclePhotos, 3000)

wordButtons.forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault()
    clearInterval(cycleInterval)
    activateButton(button)
  })
})