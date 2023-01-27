window.addEventListener('DOMContentLoaded', () => {

});

window.addEventListener('load', () => {
    const regisForm = document.querySelector('form');
    const registBtn = document.querySelector('#regisBtn');

    registBtn.addEventListener('click', (e) => {
        const XHR = new XMLHttpRequest();

        const formData = new FormData(regisForm);
        let data = Object.fromEntries(formData);

        data = {name: `${data.fname} ${data.lname}`, ...data};
        delete data.fname;
        delete data.lname;

        XHR.open(regisForm.method, 'http://localhost:3001/registration');
        XHR.setRequestHeader('Content-Type', 'application/json');

        XHR.send(JSON.stringify(data));

        e.preventDefault()
    })
    
});