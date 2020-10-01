document.addEventListener('DOMContentLoaded', _ => {
  const activeBtnClasses = ['active', 'animate__animated', 'animate__faster', 'animate__pulse']
  const wordPhotos = document.querySelectorAll('[data-word]')
  const wordButtons = document.querySelectorAll('.round-word-btn')
  let activeBtnIndex = 0

  const activateButton = (button) => {
    const word = button.innerText.trim().toLowerCase()
    console.log(button, word)
    wordPhotos.forEach(photo => photo.classList.remove('active'))
    document.querySelector(`[data-word=${word}]`).classList.add('active')
    wordButtons.forEach(photo => photo.classList.remove(...activeBtnClasses))
    button.classList.add(...activeBtnClasses)
  }

  const cyclePhotos = () => {
    activeBtnIndex = (activeBtnIndex + 1) % wordButtons.length
    activateButton(wordButtons[activeBtnIndex])
  }

  if (wordButtons.length > 0) {
    const cycleInterval = setInterval(cyclePhotos, 3000)
    
    wordButtons.forEach(button => {
      button.addEventListener('click', e => {
        e.preventDefault()
        clearInterval(cycleInterval)
        activateButton(button)
      })
    })
  }
})