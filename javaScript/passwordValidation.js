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
        document.getElementById("passError").innerHTML="*This can't be your password.";
        return false;
    }
        else
        {
            document.getElementById("passError").innerHTML="";
            return true;
        }
    }
}

function validateCpassword()
{
    var password = document.getElementById("password").value;
    var Cpassword = document.getElementById("Cpassword").value;
    if (Cpassword == "") {
        document.getElementById("CpassError").innerHTML="*Please enter your password ";
        return false;
    }
    else
    {
        if(password != Cpassword)
        {
            document.getElementById("CpassError").innerHTML="*Password & confirm password does not match. ";
            return false;
        }
        else
        {
            document.getElementById("CpassError").innerHTML="";
            return true;
        }
    }
}