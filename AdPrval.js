function Advalidate() {
    var Productid = document.getElementById("Proid").value;
    var Productname = document.getElementById("Pronm").value;
    var ProductDesc = document.getElementById("Prodesc").value;
    var ProductPrice = document.getElementById("Propr").value;
    // input field is empty or not

    var prid = /^(?=.*[0-9 A-Za-z])(?=.*\d)[0-9 A-Za-z\d]{8,}$/;
    if (prid.test(Productid)) {
        document.getElementById('pid').innerHTML = "";
    } else {
        document.getElementById('pid').innerHTML = "Please enter Minimum 8 Number";
        return false;
    }

    if (Productid == "") {
        document.getElementById("pid").innerHTML = "Please Enter Your Contact number";
        return false;
    }
    if (isNaN(Productid)) {
        document.getElementById("pid").innerHTML = "Please Enter Your number only";
        return false;
    }
    if (Productid.length !== 8) {
        document.getElementById("pid").innerHTML = "Please Enter 8 digit number";
        return false;
    }

    if (Productname == "") {
        document.getElementById("pnm").innerHTML = "Please Enter Your Name";
        return false;
    }
    else {
        document.getElementById("pnm").innerHTML = "";
    }
    if (!isNaN(Productname)) {
        document.getElementById("pnm").innerHTML = "Please Enter Characters only";
        return false;
    }
    else {
        document.getElementById("pnm").innerHTML = "";

    }

    if (ProductDesc == "") {
        document.getElementById('pdes').innerHTML = "Please Enter Product Description";
        return false;
    }
    else {
        document.getElementById("pdes").innerHTML = "";
    }

    if (ProductPrice == "") {
        document.getElementById("ppri").innerHTML = "Please Enter Product Price";
        return false;
    }
    else {
        document.getElementById("ppri").innerHTML = "";
    }


}