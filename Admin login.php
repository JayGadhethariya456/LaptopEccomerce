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
  header("Location:Admin.php");
}
?>
<html>

<head>
  <title>Admin Login </title>
  <meta="charset-utf8">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
      * {
        margin: 0;
        padding: 0;
        outline: none;
      }

      :root {
        --main-color: #fff;
        --second-color: #347deb;
        --box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        --facebook-color: rgb(60, 90, 154);
        --google-color: rgb(220, 74, 61);
      }

      html {
        height: 100%;
      }

      body {
        background-image: linear-gradient(310deg, #df98fa, #9055ff);
        font-family: sans-serif;
      }

      #container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: var(--main-color);
        width: 1200px;
        height: 800px;
        border-radius: 10px;
        display: grid;
        grid-template-columns: repeat(2, 50%);
        box-shadow: var(--box-shadow);
        transition-duration: 1s;
      }

      #left,
      #right {
        margin: auto;
        width: 95%;
        height: 96%;
        border-radius: 10px;
      }

      #left {
        background-image: url("img/stairs.jpeg");
        background-size: cover;
        background-position: center;
        box-shadow: var(--box-shadow);
      }

      #welcome,
      #lorem {
        margin: 20px;
        text-shadow: var(--box-shadow);
      }

      #welcome {
        font-size: 75px;
        font-weight: 300;
        margin-top: 330px;
        text-shadow: var(--box-shadow);
      }

      #login {
        padding-top: 35%;
        text-align: center;
        text-transform: uppercase;
        font-weight: 100;
        text-shadow: var(--box-shadow);
      }

      .client-info {
        display: block;
        margin: 20px auto;
        width: 60%;
        height: 50px;
        border: solid #999 1px;
        border-radius: 5px;
        text-indent: 15px;
        transition: all 200ms;
        box-shadow: var(--box-shadow);
      }

      .client-info:focus {
        width: 80%;
      }

      label {
        position: absolute;
        margin: -76px 130px;
        font-size: 12px;
        white-space: nowrap;
        background: #fff;
        padding: 0 5px;
        color: #999;
        transition: all 200ms;
        text-shadow: var(--box-shadow);
      }

      #email:focus~label[for="email"] {
        margin: -76px 70px;
      }

      #password:focus~label[for="password"] {
        margin: -76px 70px;
      }

      #submit {
        border: none;
        background-color: #9055ff;
        color: white;
        width: 60%;
      }

      #submit:hover {
        background-color: #df98fa;
      }

      .social {
        background-color: #fff;
        display: block;
        margin: 10px auto;
        width: 70%;
        height: 50px;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        transition-duration: 200ms;
        box-shadow: var(--box-shadow);
        text-shadow: var(--box-shadow);
      }

      #facebook {
        border: solid var(--facebook-color) 1px;
        color: var(--facebook-color);
      }

      #facebook:hover {
        background-color: var(--facebook-color);
        color: white;
      }

      #google {
        border: solid var(--google-color) 1px;
        color: var(--google-color);
      }

      #google:hover {
        background-color: var(--google-color);
        color: white;
      }

      @media (max-width: 1250px) {

        #container {
          width: 600px;
          display: block;
        }

        #left {
          display: none;
        }

        #right {
          margin-top: 16px;
          background-image: url("https://images.unsplash.com/photo-1615400014497-55726234cccb?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYxNzg4Njg0Ng&ixlib=rb-1.2.1&q=85");
          background-size: cover;
          background-position: center;
          box-shadow: var(--box-shadow);
        }

      }

      @media (max-height: 850px) {

        #container {
          width: 1000px;
          height: 600px;
        }

        #login {
          padding-top: 20%;
        }

        #welcome {
          margin-top: 240px;
          font-size: 60px;
        }

        #lorem {
          font-size: 15px;
        }

      }
    </style>

</head>

<body>
  <form method="post">
    <div id="container">
      <div id="left">
        <h1 id="welcome">Welcome</h1>
        <div class="message">
          <?php if ($message != "") {
            echo $message;
          } ?>
        </div>
        <p id="lorem">
          Enter in the world of digital Laptop,
          Computer or any Smart digital Device.
        </p>
      </div>
      <div id="right">
        <h1 id="login">Admin LogIn</h1><br>
        <input type="email" id="email" class="client-info" name="Reg_email">
        <label for="email">Email</label>
        <input type="password" id="password" class="client-info" name="Reg_pass">
        <label for="password">Password</label>
        <input type="submit" id="submit" class="client-info" value="Submit">
        <button class="social" id="facebook">connect with facebook</button>
        <button class="social" id="google">connect with google</button>
      </div>
    </div>
  </form>
</body>
<script>
  document.getElementById('see-button').addEventListener('click', evt => {
    document.getElementById('blur-work').style.display = 'none';
  })
   /* Work in proggress */
</script>

</html>