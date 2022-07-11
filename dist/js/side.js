let side = document.getElementById('side_menu');
let side2 = document.getElementById('side_menu2');
let burg = document.getElementById('burger');
let burg2 = document.getElementById('burger2');
let br_btn = document.getElementById('br_btn');
let br_btn2 = document.getElementById('br_btn2');
if (burg2) {
    burg2.addEventListener('click', () => {
        side2.classList.toggle('side_menu2');
        burg2.classList.toggle('menu_btn2');
        br_btn2.classList.toggle('br_btn');
        nav4.classList.toggle('nav4');
        side2.classList.toggle('d-none');
        law.classList.toggle('menu_item');
        law.classList.toggle('menu_item2');
    });
}
burg.addEventListener('click', () => {
    side.classList.toggle('side_menu2');
    burg.classList.toggle('menu_btn2');
    nav.classList.toggle('nav2');
    side.classList.toggle('d-none');
    br_btn.classList.toggle('br_btn');
});

let hero = document.getElementById('hero');
let nav = document.getElementById('nav');
let nav2 = document.getElementById('nav2');
let nav3 = document.getElementById('nav3');
window.addEventListener('scroll', () => {
    if (window.scrollY == 0) {
        nav3.classList.remove('nav-actif');
    } else {
        nav3.classList.add('nav-actif');
    }
});
const numbers = document.querySelectorAll('.number');
let numbers2 = document.querySelectorAll('.uik_numbers');


numbers.forEach((number) => {
    number.innerHTML = '0';
    const updateCounter = () => {
        const target = +number.getAttribute('data-target');
        const c = +number.innerHTML;
        if (c < target) {
            number.innerHTML = '+' + `${c + 1}`;
            setTimeout(updateCounter, 60);
        }

    };

});