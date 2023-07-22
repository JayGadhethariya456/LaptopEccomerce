<?php
include_once 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>

<body>
    <?php
    if (isset($_POST['Prod_id'])) {
        $Prod_id = $_POST['Prod_id'];
        $query = "SELECT * FROM prodtable WHERE Prod_id='$Prod_id'";
        $query_run = mysqli_query($conn, $query);

        // rest of the code here
    } else {
        echo "Prod_id is not set.";
    }
    if ($query_run) {

        while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h2>Update Data</h2>
                    <hr>
                    <form action="" method="post">
                        <input type="hidden" name="Prod_id" value="<?php echo $row['Prod_id'] ?>">
                        <div class="form-group">
                            <label style="color: black;">Product Name</label>
                            <input type="text" class="form-control" name="Prod_name" value="<?php echo $row['Prod_name'] ?>">
                        </div>
                        <div class="form-group">

                            <label style="color: black;">Product Desc</label>
                            <input type="text" class="form-control" name="Prod_Desc" value="<?php echo $row['Prod_Desc'] ?>">
                        </div>
                        <div class="form-group">

                            <label style="color: black;">Product Image</label>
                            <input type="file" class="form-control" name="Prod_image" value="<?php echo $row['Prod_image'] ?>">
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Product Price</label>
                            <input type="number" class="form-control" name="Prod_price"
                                value="<?php echo $row['Prod_price'] ?>">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary"> Update Data</button>
                        <a href="AdminProduct.php" class="btn btn-danger">Cancel</a>
                    </form>
                    <?php
                    if (isset($_POST['update'])) {
                        $Prod_name = $_POST['Prod_name'];
                        $Prod_Desc = $_POST['Prod_Desc'];
                        $Prod_image = $_POST['Prod_image'];
                        $Prod_price = $_POST['Prod_price'];

                        $query = "Update prodtable Set Prod_name='$Prod_name', Prod_Desc='$Prod_Desc', Prod_image='$Prod_image', Prod_price='$Prod_price' WHERE Prod_id='$Prod_id'";
                        $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            echo '<script>alert("Data Updated");</script>';
                            header("location:AdminProduct.php");
                        } else {
                            echo '<script>alert("No Record Updated");</script>';
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
        }

    } else {
        echo '<script> alert("No Record Found")</script>';
    }

    ?>
</body>

</html>