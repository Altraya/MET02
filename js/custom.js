$(document).ready(function(){
    initializeLayout();
    $("#alert_close").on('click', (function(){
        $( "#alert_box" ).fadeOut( "slow", function() {});
    }));
    
    $(".deleteCartArticle").on("click", (function(){
        console.log("clicked");
        var idArticle = $(this).data("articleid");
        var nameOfArticleMotherDiv = "#article-"+idArticle;

        var url = $(this).data("pathfordelete");

        //call to delete session variable
        $.ajax({
            url : url,
            type : 'GET',
            dataType : 'html',
            success : function(result){
                console.log("Dans ajax");
                console.log(nameOfArticleMotherDiv);
                $(nameOfArticleMotherDiv).fadeOut( "slow", function(){
                    
                console.log("fadeout");
                //update total price
                var priceToRemove = $(this).find(".priceHTArticle").text();
                priceToRemove = parseFloat(priceToRemove);
                
                var newPrice =  parseFloat($("#totalHTMiniCart").text());
                newPrice = newPrice - priceToRemove;
                $("#totalHTMiniCart").text(newPrice);
                
                //update nb item
                var previousNbArticle = $("#nbArticleMiniCart").text();
                var nbArticle = parseInt(previousNbArticle);
                nbArticle = nbArticle - 1;
                $("#nbArticleMiniCart").text(nbArticle);
                    
                //remove div
                $(this).remove();
            });
            },
            
            error : function(result, status, error){
                console.log("error");
                console.log(result);
                console.log(status);
                console.log(error);
            }
    
        });
        
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

