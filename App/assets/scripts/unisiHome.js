window.addEventListener('DOMContentLoaded', () => {
    const btnRegister = document.querySelector('.view_more_btn');
    const btnLogin = document.querySelector('.documentation_btn');

    if (sessionStorage.getItem('session_login') !== null) {
        btnLogin.classList.add('hidden');
        btnRegister.classList.add('hidden');
    }
})

window.addEventListener('load', () => {

})
