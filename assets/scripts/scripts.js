$(document).ready(function () {
    $("h1").click(function () {
        $(this).toggleClass("upcoming");
    });

    $(".moreInfo button").click(function () {
        $(this).toggleClass("open");

        if ($(this).hasClass("open")) {
            $(this).html("Less Info");
        } else {
            $(this).html("More Info");
        }

        $(this).next().slideToggle();
    });
});