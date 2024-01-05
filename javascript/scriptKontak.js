// animasi pada file kontak
// atribut untuk file kontak
const parentKontak = document.getElementById('kontakKu');
const pengantar = parentKontak.querySelector('.pengantar h2');
const pembuka = parentKontak.querySelector('.pengantar p');
const formNama = parentKontak.querySelector('main#kontakKu form')[0];
const formEmail = parentKontak.querySelector('main#kontakKu form')[1];
const formDeskripsi = parentKontak.querySelector('main#kontakKu form')[2];
const buttonKontak = parentKontak.querySelector('main#kontakKu form button');
// animasi untuk file kontak
window.addEventListener('DOMContentLoaded', () => {
    pengantar.classList.add('loadingAnimasiKiri');
    pembuka.classList.add('loadingAnimasiKanan');
    formNama.classList.add('loadingAnimasiKiri');
    formEmail.classList.add('loadingAnimasiKanan');
    formDeskripsi.classList.add('loadingAnimasiKiri');
    buttonKontak.classList.add('loadingAnimasiKanan');
})

// for (let i = 0; i < 3; i++) {
//     document.querySelectorAll('main#kontakKu form input')[i].addEventListener('focus', () => {
//         this.Style.borderTop = '3px solid red';
//         this.Style.borderBottom = '3px solid red';
//         this.Style.backgroundColor = 'red';

//     })
// }
// for (let i = 0; i < 3; i++) {
//     document.querySelectorAll('main#kontakKu form input')[i].addEventListener('blur', () => {
//         this.Style.borderTop = '';
//         this.Style.borderBottom = '';
//         this.Style.backgroundColor = '';
//     })
// }

for (let i = 0; i < 3; i++) {
    document.querySelectorAll('main#kontakKu form input')[i].addEventListener('focus', (event) => {

        event.target.style.outline = 'none';
        event.target.style.borderTop = '3px solid var(--hover2)';
        event.target.style.borderBottom = '3px solid var(--hover2)';
        event.target.style.backgroundColor = '#f6edf7';
        event.target.style.transition = 'all .1s ease-out';

    });
}

for (let i = 0; i < 3; i++) {
    document.querySelectorAll('main#kontakKu form input')[i].addEventListener('blur', (event) => {
        event.target.style.borderTop = '';
        event.target.style.borderBottom = '';
        event.target.style.backgroundColor = '';
    });
}