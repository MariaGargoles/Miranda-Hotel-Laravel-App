const list = document.querySelector('.header__nav');
const icon = document.querySelectorAll('.header__menu-icon');
const className = '--visible';

displayMenu = (list, icon, icon__toggle, className) => {
    list.classList.toggle(`${className}`);
    icon.classList.toggle(`${className}`);
    icon__toggle.classList.toggle(`${className}`);

}

document.querySelector('.header__menu').addEventListener('click', (event) => {
    displayMenu(list, icon[0], icon[1], className);
});

window.addEventListener('mousemove', (event) => {
    if(event.y < 100) {
        document.querySelector('.header');
    }
})