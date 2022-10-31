const password = document.querySelector('.inputPassword')
const email = document.querySelector('.inputEmail')

const iconEye = document.querySelector('.icon-eye')

const form = document.querySelector('form')

const message = document.getElementById('message')


iconEye.addEventListener('click', () => {
  password.type = password.type === 'text' ? 'password' : 'text'

})

form.addEventListener('submit', (ev) => {
  ev.preventDefault()

  if (password.value === '' || email.value === '') {

    message.innerHTML = 'Preencha os campos corretamente'
    message.style.color = 'red'

    return
  }


  console.log(email.value)
  console.log(password.value)
  return
})

