let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

menu.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

/*document.getElementById('login').addEventListener('submit', function(e) {
    let valid = true;
    const inputs = this.querySelectorAll('.box');

    inputs.forEach(function(input) {
        if (input.value.trim() === '') {
            input.classList.add('error'); // add red border
            valid = false;
        } else {
            input.classList.remove('error'); // remove red border
        }
    });

    if (!valid) {
        e.preventDefault(); // stop form submission if fields are empty
    }
});