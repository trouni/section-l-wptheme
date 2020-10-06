document.addEventListener('DOMContentLoaded', _ => {
  const activeBtnClasses = ['active', 'animate__animated', 'animate__faster', 'animate__pulse']
  const wordPhotos = document.querySelectorAll('.word-photo')
  const wordButtons = document.querySelectorAll('.round-word-btn')
  let activeBtnIndex = 0

  const activateButton = (index) => {
    wordPhotos.forEach(photo => photo.classList.remove('active'))
    wordPhotos[index].classList.add('active')
    wordButtons.forEach(wordButton => wordButton.classList.remove(...activeBtnClasses))
    wordButtons[index].classList.add(...activeBtnClasses)
  }

  const cyclePhotos = () => {
    activeBtnIndex = (activeBtnIndex + 1) % wordButtons.length
    activateButton(activeBtnIndex)
  }

  if (wordButtons.length > 0) {
    const cycleInterval = setInterval(cyclePhotos, 3000)
    
    wordButtons.forEach((button, index) => {
      button.addEventListener('click', e => {
        e.preventDefault()
        clearInterval(cycleInterval)
        activateButton(index)
      })
    })
  }
})