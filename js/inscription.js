function checkMail()
{
    console.log("test");
    console.log(email.value);
    var regex = new RegExp("/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/");
    if(regex.test(email.value))
        console.log("regexValid");
    else
        console.log("regexInvalid");
        
}


function isPhoneNumberValid(phoneNumber)
{
    phoneNumber.replace(" ",'')
    //Gestion des +33
    if(phoneNumber.charAt(0) == '+')
    {
        phoneNumber = phoneNumber.substring(2);
    }
    return (phoneNumber.length == 10 && !(isNaN(phoneNumber)))
}

function checkPhone()
{
    if(isPhoneNumberValid(phone.value))
        phone.setCustomValidity("");
    else
        phone.setCustomValidity("Invalid field.");
}