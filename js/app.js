document.addEventListener('DOMContentLoaded', (evt) => {
    setInterval(() => {
        document.getElementById('relogio').innerHTML = relogio();
    }, 1000);
});

const relogio = () => {

    const d = new Date();

    let dia = d.getDate();
    let mes = d.getMonth();
    let ano = d.getFullYear();
    let hora = d.getHours();
    let minuto = d.getMinutes();
    let segundo = d.getSeconds();

    const array_mes = [
        "janeiro", "fevereiro",
        "março", "abril",
        "maio", "junho",
        "julho", "agosto",
        "setembro", "outubro",
        "novembro", "dezembro"
    ];

    let relogio = `${dia} de ${array_mes[mes]} de ${ano} - ${hora.toString().padStart(2, '0')}: ${minuto.toString().padStart(2, '0')} :${segundo.toString().padStart(2, '0')}`;

    return relogio;

};

const playVideo = (title, v) => {
    const video = document.getElementById('video');
    video.setAttribute('src',v);
    video.setAttribute('title',title);
    scrollTo(0, 0);
};