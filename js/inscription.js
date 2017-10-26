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



function checkPhone()
{
    console.log(phone);
    phone.class = "validate invalid";
    phone.classList.add('invalid');
    phone.classList.remove('valid');
    phone.setAttribute(class, 'validate invalid');
    console.log(phone);
    var phoneNumber = phone.value;
    phoneNumber.replace(" ",'')
    if(phoneNumber.includes("+"))
    {
        if(phoneNumber.lenght != 9)
            console.log("oui");
            //add invalid to input
    }
    else
    {
        
    }
    //add or remove data-error or data-success
}