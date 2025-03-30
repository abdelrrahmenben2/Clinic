let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.oneclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

menu.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}