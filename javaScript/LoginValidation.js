function validateForm() {
   
    var userName = document.getElementById("userName").value;
    var password = document.getElementById("password").value;
    
    if ( userName == "" || password == "") {
        document.getElementById("allError").innerHTML="*Please enter all the information";
        return false;
      }
  
    }

    function validateEmail()
{
    var userName = document.getElementById("userName").value;
    if (userName == "") {
        document.getElementById("emailError").innerHTML="*Please enter your email";
        return false;
    }
    else
    {
        if (! /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(userName)) {
            document.getElementById("emailError").innerHTML="*Invalid email format.";
            return false;
        }
        else
        {
            document.getElementById("emailError").innerHTML="";
            return true;
        }
    }
}

function validatePassword()
{
    var password = document.getElementById("password").value;
    if (password == "") {
        document.getElementById("passError").innerHTML="*Please enter your password ";
        return false;
    }
    else
    {
      if (password.length<5) {
        document.getElementById("passError").innerHTML="*This can't be your Pass ";
        return false;
    }
        else
        {
            document.getElementById("passError").innerHTML="";
            return true;
        }
    }
}
