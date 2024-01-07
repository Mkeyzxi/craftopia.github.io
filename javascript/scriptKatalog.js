const semua = document.getElementById('semua')
const sulit = document.getElementById('sulit')
const sedang = document.getElementById('sedang')
const mudah = document.getElementById('mudah')
const parentSection = document.getElementById('pembagian');
const mainKatalog = document.getElementById('katalogKu');



// semua.addEventListener('click', (event) => {
//     event.preventDefault(); // Mencegah perilaku default dari tautan
//     for (let i = 0; i < 12; i++) {
//         const section = parentSection.getElementsByTagName('section')[i];
//     }
// });
for (let i = 0; i <= 11; i++) {
    const section = parentSection.getElementsByTagName('section')[i];
}
sulit.addEventListener('click', (event) => {
    event.preventDefault();
    for (let i = 0; i <= 11; i++) {
        if (i == 0 || i == 1 || i == 2) {
            const section = parentSection.getElementsByTagName('section')[i].style.display = 'block';
            mainKatalog.style.marginBottom = '80px';
        } else {
            const section = parentSection.getElementsByTagName('section')[i].style.display = 'none';
        }
    }

});

sedang.addEventListener('click', (event) => {
    event.preventDefault();
    for (let i = 0; i <= 11; i++) {
        if (i == 3 || i == 4 || i == 5 || i == 6 || i == 7) {
            const section = parentSection.getElementsByTagName('section')[i].style.display = 'block';

        } else {
            const section = parentSection.getElementsByTagName('section')[i].style.display = 'none';

        }
    }
});

mudah.addEventListener('click', (event) => {
    event.preventDefault();
    for (let i = 0; i <= 11; i++) {
        if (i == 8 || i == 9 || i == 10 || i == 11) {
            const section = parentSection.getElementsByTagName('section')[i].style.display = 'block';

        } else {
            const section = parentSection.getElementsByTagName('section')[i].style.display = 'none';

        }
    }
});