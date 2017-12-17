$(document).ready(function(){
    
    $("body").on('click', '.articleAddButton', (function(e){

        e.preventDefault();
        console.log("clicked");
                
        var url = $(this).data("cartaddcall");
        console.log(url);
        
        $.ajax({
            url : url,
            type : 'GET',
            dataType : 'json',
            success : function(result){
                //contain new article added information to update our miniCartView dynamically via JS
                //here this article is already set in session
                var newArticleToAddToCart = JSON.parse(result);
                
                console.log(newArticleToAddToCart);
                //we will search if a row exist with id article-{{article.id}} (if it exist with same informations, we will add one more exemplary)
                //else we will create the row
                
                //so find #titleCart to add row with our article now :)
                var toAppend = "<?php {% include 'include/miniCartItem.twig' with {'article': newArticleToAddToCart} %} ?>";
                $(toAppend).appendTo( $("#titleCart") );

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