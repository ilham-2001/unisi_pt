
const uri = 'http://localhost:3000/App/data/cft.json';
const cardContainer = document.querySelector('.card-container');

const fillContainer = (container, data) => {
    container.innerHTML = '';
    const currentDate = Date.now();

    data.forEach(it => {
        const regisStatus = Date.parse(it.due_regis_date) > currentDate ? "Open" : "Closed";

        container.innerHTML +=
            `<div class="card" data-uid=${it.uid}>
        <div class="card-header">
            <h3>CFT Title</h3>
        </div>
        <div class="card-body">
            <p>Universitas Islam Indonesia</p>
            <p>${it.jenis_kegiatan}</p>
            <strong class="regis-status">${regisStatus}</strong>
            <ul>
            ${(function iterate() {
                let data = '';
                for (const desc of it.job_description) {
                    data += `<li class="desc-li">${desc}</li>`;
                }
                return data;
            })()}
            </ul>
        </div>
        </div>`
    });
}

const getData = (uri) => {
    const http = new XMLHttpRequest();
    http.open('GET', uri, false);
    http.send();

    return http.response;
}

const cftData = JSON.parse(getData('http://localhost:3001/cft'));

fillContainer(cardContainer, cftData)