<?php

$conn = mysqli_connect("localhost", "root", "", "wtproj");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$Cat_Brand = $_REQUEST['Cat_Brand'];
$Cat_Desc = $_REQUEST['Cat_Desc'];
$Cat_quantity = $_REQUEST['Cat_quantity'];
$Cat_image = $_REQUEST['Cat_image'];


$sql = "INSERT INTO table(Cat_Brand, Cat_Desc, Cat_quantity, Cat_image) VALUES ('$Cat_Brand',
			'$Cat_Desc','$Cat_quantity','$Cat_image')";

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