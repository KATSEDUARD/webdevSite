$("#carousel").carousel({ interval: 10000 });

var timer;

function mouseover_button(event) {
    if (document.querySelector("#dropdownMenuButton").classList.contains("show")) {
        clearTimeout(timer);
    }
    else {
        timer = setTimeout(function () {
            $('.dropdown-menu').addClass("show");
        }, 300);
    }
};

function mouseover_menu(event) {
    clearTimeout(timer);
    $('.dropdown-menu').addClass("show");
};

function mouseout_button(event) {
    clearTimeout(timer);
    timer = setTimeout(function () {
        $('.dropdown-menu').removeClass("show");
    }, 300);
};

function mouseout_menu(event) {
    clearTimeout(timer);
    timer = setTimeout(function () {
        $('.dropdown-menu').removeClass("show");
    }, 300);
};