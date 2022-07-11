
let sub = document.getElementById('menu_item_exp');
let info = document.getElementById('info');
let arch = document.getElementById('arch');
let design = document.getElementById('design');
let bis = document.getElementById('bis');
let law = document.getElementById('law');
let tout = document.getElementById('tout');
let tout2 = document.getElementById('tout2');
let info2 = document.getElementById('info2');
let info_btn = document.getElementById('info_btn');

//faq
let plus1 = document.getElementById('plus1');
let plus2 = document.getElementById('plus2');
let plus3 = document.getElementById('plus3');
let plus4 = document.getElementById('plus4');
let plus5 = document.getElementById('plus5');
let plus6 = document.getElementById('plus6');
let solu1 = document.getElementById('solu1');
let solu2 = document.getElementById('solu2');
let solu3 = document.getElementById('solu3');
let solu4 = document.getElementById('solu4');
let solu5 = document.getElementById('solu5');
let solu6 = document.getElementById('solu6');
//acceuil

if (info_btn) {
  info_btn.addEventListener('click', () => {
    tout2.classList.toggle('categ_act');
    info2.classList.remove('categ_act');
  });
}
if (tout) {
  tout.addEventListener('click', () => {
    tout2.classList.remove('categ_act');
    info2.classList.toggle('categ_act');
  });
}
if (info) {
  info.addEventListener("click", () => {
    info.classList.toggle('menu_item_sub');
    sub.classList.toggle('act');
    sub.innerHTML = "<ul><li><a href='#'>Licence En Informatique</a></li><li><a href='#'>Licence Business Intelligence</a></li><li><a href='#'>Cycle Ingenieur En Informatique</a></li></ul>";
    arch.classList.toggle('invisible');
    design.classList.toggle('invisible');
    bis.classList.toggle('invisible');
    law.classList.toggle('invisible');
  });

}
if (arch) {
  arch.addEventListener("click", () => {
    arch.classList.toggle('menu_item_sub');
    arch.classList.toggle('arch');
    sub.classList.toggle('act');
    sub.innerHTML = "<ul><li><a href='#'>Diplome National D'architécte</a></li><li><a href='#'>Mastére En BIM, Smart Architecture, Smart City</a></li><li><a href='#'>Activité scientifique</a></li></ul>";
    info.classList.toggle('invisible');
    design.classList.toggle('invisible');
    bis.classList.toggle('invisible');
    law.classList.toggle('invisible');
  });
}
if (design) {
  design.addEventListener("click", () => {
    design.classList.toggle('menu_item_sub');
    design.classList.toggle('design');
    sub.classList.toggle('act');
    sub.innerHTML = "<ul><li><a href='#'>Licence En Design : Publicité Graphique</a></li><li><a href='#'>Licence En Design : Architecture D'intérieur</a></li><li><a href='#'>Mastére En Architécture D'intérieur</a></li></ul>";
    info.classList.toggle('invisible');
    arch.classList.toggle('invisible');
    bis.classList.toggle('invisible');
    law.classList.toggle('invisible');
  });
}
if (bis) {
  bis.addEventListener("click", () => {
    bis.classList.toggle('menu_item_sub');
    bis.classList.toggle('bis');
    sub.classList.toggle('act');
    sub.innerHTML = "<ul><li><a href='#'>Licence En Business Management</a></li><li><a href='#'>Licence En Comptabilité</a></li><li><a href='#'>Licence En Finance</a></li><li><a href='#'>Licence En Gestion Des Ressources Humaines</a></li><li><a href='#'>Licence En Management</a></li><li><a href='#'>Licence En Marketing</a></li><li><a href='#'>Mastére En Marketing Digitale</a></li><li><a href='#'>Mastére En Comptabilité-Controle-Audit(CCA)</a></li><li><a href='#'>Mastére En Gestion Des Ressources Humaines</a></li><li><a href='#'>Mastére En Ingénieurie Financiére</a></li><li><a href='#'>Mastére E-Management Des Services</a></li><li><a href='#'>Mastére Co-Construit En Entrepreunariat Et Mutations Digitales</a></li></ul>";
    info.classList.toggle('invisible');
    arch.classList.toggle('invisible');
    design.classList.toggle('invisible');
    law.classList.toggle('invisible');
  });
}
//fin acceuil

//faq

//nav



//fin faq
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
let nav4 = document.getElementById('nav4');

const navig = () => {
  if (window.scrollY > 0) {
    nav2.classList.remove('nav-actif');
    setTimeout(navig, 60);
  } else {
    nav2.classList.add('nav-actif');
    setTimeout(navig, 1);
  }
};

window.addEventListener('scroll', navig);

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

