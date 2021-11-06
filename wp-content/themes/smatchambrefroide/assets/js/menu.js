console.log('ready');

function switchToBurger() {
    console.log('ready');
    var element = document.getElementById("mobile-header");
    element.classList.toggle("active");
    var elementIcon = document.getElementById("burgerIcon");
    elementIcon.classList.toggle("activeburger");
}