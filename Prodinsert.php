<?php

$conn = mysqli_connect("localhost", "root", "", "wtproj");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$Prod_name = $_REQUEST['Prod_name'];
$Prod_Desc = $_REQUEST['Prod_Desc'];
$Prod_image = $_REQUEST['Prod_image'];
$Prod_price = $_REQUEST['Prod_price'];


$sql = "INSERT INTO prodtable(Prod_name, Prod_Desc, Prod_image, Prod_price) VALUES ('$Prod_name',
			'$Prod_Desc','$Prod_image','$Prod_price')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}


// Close connection
mysqli_close($conn);
?>