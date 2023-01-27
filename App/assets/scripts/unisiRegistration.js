window.addEventListener('DOMContentLoaded', () => {

});

window.addEventListener('load', () => {
    const regisForm = document.querySelector('form');
    const registBtn = document.querySelector('#regisBtn');

    registBtn.addEventListener('click', (e) => {
        const XHR = new XMLHttpRequest();

        const formData = new FormData(regisForm);
        const data = Object.fromEntries(formData);

        console.log(data);

        e.preventDefault()
    })
    
});