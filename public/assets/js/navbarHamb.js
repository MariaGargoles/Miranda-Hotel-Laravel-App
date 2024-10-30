const DisplayMenu = () => {
    const HamburguerButton = document.getElementById("OpenButtonMenu");
    const HamburguerMenu = document.getElementById("HamburguerMenu");

    HamburguerButton.addEventListener("click", (event) => {
        HamburguerMenu.classList.toggle("header__nav__menuDesplegable--active");
        HamburguerButton.classList.toggle("header__nav--container--active");
    });
};

DisplayMenu();


