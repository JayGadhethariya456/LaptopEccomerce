function validate() {
    var username = document.getElementById("user").value;
    var email = document.getElementById("emails").value;
    var pasword = document.getElementById("Pass").value;
    var cpasword = document.getElementById("cpass").value;
    var number = document.getElementById("Num").value;
    // input field is empty or not
    if (username == "") {
        document.getElementById("usr").innerHTML = "Please Enter Your Name";
        return false;
    }
    if (!isNaN(username)) {
        document.getElementById("usr").innerHTML = "Please Enter Characters only";
        return false;
    }
    if (email == "") {
        document.getElementById("eml").innerHTML = "Please Enter Your Email";
        return false;
    }
    var emailformat = /^[a-z A-Z 0-9 \_\.\-]+\@[a-z A-Z]{2,6}[.]{1}[a-z]{2,4}[.]{0,1}[a-z]{0,2}$/;
    if (emailformat.test(email)) {
        document.getElementById("eml").innerHTML = "";
    } else {
        document.getElementById("eml").innerHTML = "Please  Enter correct email format";
        return false;
    }
    if (pasword == "") {
        document.getElementById("pas").innerHTML = "Please  Enter Your Password";
        return false;
    }
    var pass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (pass.test(pasword)) {
        document.getElementById('pas').innerHTML = "";
    } else {
        document.getElementById('pas').innerHTML = "Please enter Minimum 8 characters at least 1 Alphabet and 1 Number";
        return false;
    }
    if ((pasword.length < 1) || (pasword.length > 12)) {
        document.getElementById("pas").innerHTML = "Please Enter Your Password between 6 to 12 characters";
        return false;
    }
    if (cpasword == "") {
        document.getElementById("cpas").innerHTML = "Please Enter Your Confirm Password";
        return false;
    }
    if ((cpasword.length < 1) || (cpasword.length > 12)) {
        document.getElementById("cpas").innerHTML = "Please Enter Your Password between 1 to 12 characters";
        return false;
    }
    if (pasword !== cpasword) {
        document.getElementById("cpas").innerHTML = "password is not matched with confirm password.";
        return false;
    }


    if (number == "") {
        document.getElementById("nm").innerHTML = "Please Enter Your Contact number";
        return false;
    }
    if (isNaN(number)) {
        document.getElementById("nm").innerHTML = "Please Enter Your number only";
        return false;
    }
    if (number.length !== 10) {
        document.getElementById("nm").innerHTML = "Please Enter 10 digit number";
        return false;
    }
}    