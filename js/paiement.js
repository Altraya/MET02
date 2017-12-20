function paiement()
{
   
    console.log("Proceding to paiement");

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "https://met02-karakayn.c9users.io/MyLittleUnicornShop/index.php/webservice/paiement", true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.onreadystatechange = callbackFunction;
    xhttp.send();
    console.log("rest call");
    
}


function callbackFunction()
{
    if(this.readyState != 4)
        return;
    if(this.status == 204)
    {
        console.log("empty cart");
        alert("The cart is empty");
        return;
    }
    console.log(this);
    
    var responseJSON = JSON.parse(this.response);
    var responseJSON = JSON.parse(responseJSON);
    
    console.log(responseJSON);
    alert("Le paiement de " + responseJSON.total + "€ pour la commande " + responseJSON.commandNumber + " du " + responseJSON.date + " à été validé" );
}