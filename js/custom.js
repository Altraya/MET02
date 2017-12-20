$(document).ready(function(){
    initializeLayout();
    $("#alert_close").on('click', (function(){
        $( "#alert_box" ).fadeOut( "slow", function() {});
    }));
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

