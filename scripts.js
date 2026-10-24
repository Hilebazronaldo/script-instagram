const body = document.querySelector('body');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    body.classList.add('dark');
  } else {
    body.classList.remove('dark');
  }
});
