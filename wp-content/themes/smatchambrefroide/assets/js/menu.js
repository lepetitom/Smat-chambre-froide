console.log('ready');

function switchToBurger() {
    console.log('ready');
    var element = document.getElementById("mobile-header");
    element.classList.toggle("active");
    var elementIcon = document.getElementById("burgerIcon");
    elementIcon.classList.toggle("activeburger");
}

$(function() {
    /**
    * Smooth scrolling to page anchor on click
    **/
    $("a[href*='#']:not([href='#'])").click(function() {
        if (
            location.hostname == this.hostname
            && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if ( anchor.length ) {
                $("html, body").animate( { scrollTop: anchor.offset().top }, 1500);
            }
        }
    });
});