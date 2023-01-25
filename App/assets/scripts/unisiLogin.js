window.addEventListener('DOMContentLoaded', () => {
    if (sessionStorage.getItem('session_login') !== null) {
        window.location.href = 'index.html';
    }
});

window.addEventListener('load', () => {
    const btnLogin = document.querySelector('#loginBtn');
    const loginForm = document.querySelector('form');

    btnLogin.addEventListener('click', (e) => {
        const XHR = new XMLHttpRequest();

        const formData = new FormData(loginForm);
        const data = Object.fromEntries(formData);

        XHR.open(loginForm.method, 'http://localhost:3001/login');
        XHR.setRequestHeader('Content-type', 'application/json')

        XHR.send(JSON.stringify(data));

        XHR.onload = () => {
            const res = JSON.parse(XHR.response);

            if (res['verified'] === 1) {
                sessionStorage.setItem('session_login', true);
                window.location.href = 'index.html';
            }
        }
    });
})
