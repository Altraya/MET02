function paiement()
{
   
    console.log("Proceding to paiement");

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "https://met02-karakayn.c9users.io/MyLittleUnicornShop/index.php/webservice/paiement", true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send();
    console.log("rest call");
    console.log(xhttp);
    console.log(xhttp.responseText);
    //var response = JSON.parse(xhttp.responseText);
}