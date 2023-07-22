<!DOCTYPE html>
<?php
session_start();
$message = "";
if (count($_POST) > 0) {
    $con = mysqli_connect('localhost', 'root', '', 'wtproj') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM registtable WHERE Reg_email='" . $_POST["Reg_email"] . "' and Reg_pass = '" . $_POST["Reg_pass"] . "'");
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["Reg_id"] = $row['Reg_id'];
        $_SESSION["Reg_email"] = $row['Reg_email'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["Reg_id"])) {
    header("Location:Home.php");
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="wrapper">

        <form method="post">
            <h2>Login</h2>
            <div class="message">
                <?php if ($message != "") {
                    echo $message;
                } ?>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" placeholder="Email" name="Reg_email">
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" placeholder="Password" name="Reg_pass">
            </div>
            <div class="forgot-pass">
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" value="submit">Login</button>

            <div class="register-link">
                <p>Don't have an Account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>