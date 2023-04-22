const progressBar = document.getElementById('progressBar')

if (progressBar) {
  const getScrollProgress = () => {
    const html = document.documentElement
    const scrollTop = html.scrollTop
    const scrollHeight = html.scrollHeight
    const innerHeight = window.innerHeight

    return (scrollTop / (scrollHeight - innerHeight)) * 100
  }

  const animateProgressBar = () => {
    progressBar.style.width = `${getScrollProgress()}%`
  }

  window.onload = animateProgressBar
  window.onscroll = animateProgressBar
  window.onresize = animateProgressBar
}
