// variabel pada file index atau landing page
const parent = document.body;
const header = document.getElementsByTagName('header');
const headerNav = document.querySelector('header nav');
const headerContact = document.querySelector(' header .contact');
const toggleMenu = document.getElementById('toggleMenu');
const span1 = parent.querySelector('header .toggleMenu span:nth-child(1)');
const span2 = parent.querySelector('header .toggleMenu span:nth-child(2)');
const span3 = parent.querySelector('header .toggleMenu span:nth-child(3)');
const sectionSatuHome = parent.querySelector('main section.sectionSatu .home');
const sectionSatuImg = parent.querySelector('main section.sectionSatu img');
const sectionDua = parent.querySelector('section.sectionDua')
const sectionDuaImg = parent.querySelector('main section.sectionDua img');
const sectionDuaH3 = parent.querySelector('main section.sectionDua h3');
const sectionDuaP = parent.querySelector('main section.sectionDua p');



let isOpen = false;
// responsive mobile
toggleMenu.addEventListener('click', () => {
    isOpen = !isOpen; // Mengubah nilai isOpen menjadi kebalikannya

    if (isOpen) {
        // Jika menu terbuka dalam mobile
        span1.style.transform = 'rotate(45deg)';
        span1.style.marginTop = '11px';
        span1.style.transition = 'all .2s ease-in 0s';
        span2.style.transition = 'all .2s ease-in 0s';
        span2.style.backgroundColor = 'rgba(0,0,0,0)';
        span3.style.transition = 'all .2s ease-in 0s';
        span3.style.transform = 'rotate(-45deg)';
        span3.style.marginTop = '-16px';
        headerNav.style.display = 'block';
        headerContact.style.display = 'flex';

    } else if (!isOpen) {
        // Jika menu tertutup
        span2.style.backgroundColor = 'rgba(1,1,1,1)';
        span1.style.transform = '';
        span3.style.transform = '';
        span1.style.marginTop = '';
        span3.style.marginTop = '';
        headerNav.style.display = 'none';
        headerContact.style.display = 'none';
    }
});

// animasi reload di file index landing page
document.addEventListener("DOMContentLoaded", function() {
    sectionSatuHome.classList.add('loadingAnimasiKiri');
    sectionSatuImg.classList.add('loadingAnimasiKanan');
    sectionDuaImg.classList.add('loadingAnimasiKiri');
    sectionDuaH3.classList.add('loadingAnimasiKanan');
    sectionDuaP.classList.add('loadingAnimasiKiri');
});

// scroll di bagian landing page
window.addEventListener('scroll', () => {
    let scrollTop = parseInt(window.scrollY)

    if (scrollTop > 120) {
        sectionDuaImg.classList.add('loadingAnimasiKiri');
    }
    if (scrollTop > 140) {
        sectionDuaH3.classList.add('loadingAnimasiKanan');
        sectionDuaP.classList.add('loadingAnimasiKiri');
    } else {
        sectionDuaImg.classList.remove('loadingAnimasiKiri');
        sectionDuaH3.classList.remove('loadingAnimasiKanan');
        sectionDuaP.classList.remove('loadingAnimasiKiri');
    }
});

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
document.addEventListener('DOMContentLoaded', () => {
    pengantar.classList.add('loadingAnimasiKiri');
    pembuka.classList.add('loadingAnimasiKanan');
    formNama.classList.add('loadingAnimasiKiri');
    formEmail.classList.add('loadingAnimasiKanan');
    formDeskripsi.classList.add('loadingAnimasiKiri');
    buttonKontak.classList.add('loadingAnimasiKanan');
})