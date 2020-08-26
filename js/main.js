$(document).ready((function() {
    const o = $("#nav").offset().top;
    $(window).scroll((function() {
        const e = $(this).scrollTop();
        e > o ? $("#header__row").addClass("nav_fixed") : e < o && $("#header__row").removeClass("nav_fixed")
    }))
}));