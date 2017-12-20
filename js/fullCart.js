$(document).ready(function(){
    
    $(".deleteCartArticle").on("click", (function(){
        
        var idArticle = $(this).data("articleid");
        var nameOfArticleMotherDiv = "#articleBigCart-"+idArticle;

        var url = $(this).data("pathfordelete");

        //call to delete session variable
        $.ajax({
            url : url,
            type : 'GET',
            dataType : 'html',
            success : function(result){
                
                $(nameOfArticleMotherDiv).fadeOut( "slow", function(){
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
                    
                var totalHTBigCart =  $("#totalHTBigCart").text();
                var priceHTbig = parseFloat(totalHTBigCart);
                priceHTbig = priceHTbig - priceToRemove;
                $("#totalHTBigCart").text(priceHTbig);
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

