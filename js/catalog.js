$(document).ready(function(){
    
    $("body").on('click', '.articleAddButton', (function(e){

        e.preventDefault();
                
        var url = $(this).data("cartaddcall");

        $.ajax({
            url : url,
            type : 'GET',
            dataType : 'html',
            success : function(result){
                
                //contain generated html for the article
                var newArticleToAddToCart = result;

                //we will search if a row exist with id article-{{article.id}} (if it exist with same informations, we will add one more exemplary)
                //else we will create the row
                
                //so find #titleCart to add row with our article now :)
                $(newArticleToAddToCart).appendTo( $("#titleCart") ); //add article to list
                
                //update nb of article in title
                var previousNbArticle = $("#nbArticleMiniCart").text();
                var nbArticle = parseInt(previousNbArticle);
                nbArticle = nbArticle + 1;
                $("#nbArticleMiniCart").text(nbArticle);
                
                //update total price at bottom
                //we just retrive the price of the article we just have generated to add it to general price
                var rowOfNewAddArticle= $("#titleCart").next(".rowArticleMiniCart");
                var priceOfLastAddedArticle = $(rowOfNewAddArticle).find(".priceHTArticle").text();
                priceOfLastAddedArticle = parseFloat(priceOfLastAddedArticle);
              
                var totalPriceHT = $("#totalHTMiniCart").text();
                totalPriceHT = parseFloat(totalPriceHT);
                totalPriceHT = totalPriceHT + priceOfLastAddedArticle;
            
                $("#totalHTMiniCart").text(totalPriceHT);
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