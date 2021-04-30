

const toggle = document.querySelector('.toggle')
const nav = document.querySelector('.nav')
const token = document.querySelector('#token-address')


toggle.addEventListener('click', () => {
toggle.classList.toggle('active')
nav.classList.toggle('active')

})

token.addEventListener('click', () => {
    window.alert('Token Address: 0xE6b0eA3a95C0fb4253946385bb962126F582E03E')
})
