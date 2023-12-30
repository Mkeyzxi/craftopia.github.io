const parent = document.body;
const headerNav = document.querySelector('header nav');
const headerContact = document.querySelector(' header .contact');
const span1 = parent.querySelector('header .toggleMenu span:nth-child(1)');
const span2 = parent.querySelector('header .toggleMenu span:nth-child(2)');
const span3 = parent.querySelector('header .toggleMenu span:nth-child(3)');
const linkMulaiEkspor = parent.querySelector('main section.sectionSatu a');
let isOpen = false;

function toggleFunction() {
    isOpen = !isOpen; // Mengubah nilai isOpen menjadi kebalikannya

    if (isOpen) {
        // Jika menu terbuka
        span2.style.backgroundColor = 'rgba(0,0,0,0)';
        span1.style.transform = 'rotate(45deg)';
        span3.style.transform = 'rotate(-45deg)';
        span1.style.marginTop = '11px';
        span3.style.marginTop = '-16px';
        span1.style.transition = 'all .1s ease-in 0s';
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
}

linkMulaiEkspor.onclick = function() {
    linkMulaiEkspor.textContent = 'Gasskan';
}