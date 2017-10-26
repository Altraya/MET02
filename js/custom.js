$(document).ready(function(){
    initializeLayout();
});


function initializeLayout()
{
    $(".button-collapse").sideNav();
    $('.slider').slider();
    $(".datepicker").pickadate({
        selectMonths:true,
        selectYears:100,
        today: "Today",
        clear: "Clear",
        close: "Ok",
        closeOnSelect: false
    });
}