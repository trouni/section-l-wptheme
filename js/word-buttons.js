const activeClasses = 'active animate__animated animate__faster animate__pulse'

const wordPhotos = document.querySelectorAll('[data-word]')
const wordButtons = document.querySelectorAll('.round-word-btn')
let activeButton = 0

const activateButton = (button) => {
  wordPhotos.forEach(photo => photo.classList.remove(activeClasses))
  wordButtons.forEach(photo => photo.classList.remove(activeClasses))
  const word = button.innerText.toLowerCase()
  button.classList.add(activeClasses)
  document.querySelector(`[data-word=${word}]`).classList.add(activeClasses)
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