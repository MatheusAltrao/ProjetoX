const email = document.querySelector('.registerInputEmail')
const password = document.querySelector('.registerPassword')
const confirmPassword = document.querySelector('.registerConfirmInputPassword')

const iconEye = document.getElementById('eye1')
const iconEyeConfirm = document.getElementById('eye2')

const form = document.querySelector('form')

form.addEventListener('submit', (ev) => {
  ev.preventDefault()

  console.log(email.value)
})


iconEye.addEventListener('click', () => {
  password.type = password.type === "password" ? "text" : "password"

})

iconEyeConfirm.addEventListener('click', () => {
  confirmPassword.type = confirmPassword.type === "password" ? "text" : "password"
})

