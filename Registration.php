<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration Page</title>
  <link rel="stylesheet" href="Regi.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <style>
    #usr,
    #eml,
    #pas,
    #cpas,
    #nm {
      color: red;
      font-weight: bold;
    }

    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>
  <?php
  // define variables and set to empty values
  $nameErr = $emailErr = $passwordErr = $cpasswordErr = $phoneErr = $adrErr = "";
  $username = $email = $pass = $cpass = $num = $adr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $nameErr = "Name is required";
    } else {
      $username = test_input($_POST["username"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z' ]*$/", $username)) {
        $nameErr = "Invalid Username Format";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (!empty($_POST["pass"]) && isset($_POST['pass'])) {
      $pass = $_POST["pass"];
      $cpass = $_POST["cpass"];
      if (mb_strlen($_POST["pass"]) <= 8) {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
      } elseif (!preg_match("#[0-9]+#", $pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
      } elseif (!preg_match("#[A-Z]+#", $pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
      } elseif (!preg_match("#[a-z]+#", $pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
      } elseif (!preg_match("#[\W]+#", $pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Special Character!";
      } elseif (strcmp($pass, $cpass) !== 0) {
        $passwordErr = "Passwords must match!";
      }
    } else {
      $passwordErr = "Please enter password   ";
    }

    if (empty($_POST["num"])) {
      $phoneErr = "phone number is required";
    } else {
      $num = test_input($_POST["num"]);
      // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]{10}+$/", $num)) {
        $phoneErr = "There should be minimum 10 digits no";
      }
    }

    if (empty($_POST["adr"])) {
      $adrErr = "Address is required";
    } else {
      $adr = test_input($_POST["adr"]);
      // check if e-mail address is well-formed
      if (!preg_match("/^[a-zA-Z0-9' ]*$/", $adr)) {
        $adrErr = "There should be only char and digits";
      }
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <form id="myform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <section class="h-100 bg-dark-subtle">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                  <img src="img4.webp" alt="Sample photo" class="img-fluid"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">Registration Here</h3>

                    <div class="form-outline mb-4">
                      <input type="text" name="username" id="user" value="<?php echo $username; ?>"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">User name</label>
                      <span class="error">*
                        <?php echo $nameErr; ?>
                      </span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name="email" id="emails" value="<?php echo $email; ?>"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example97">Email ID</label>
                      <span class="error">*
                        <?php echo $emailErr; ?>
                      </span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="pass" id="Pass" value="<?php echo $pass; ?>"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example9">Password</label>
                      <span class="error">*
                        <?php echo $passwordErr; ?>
                      </span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="cpass" id="cpass" value="<?php echo $cpass; ?>"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example9">Confirm Password</label>
                      <span class="error">*
                        <?php echo $cpasswordErr; ?>
                      </span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name="num" id="Num" value="<?php echo $num; ?>" class="form-control
                        form-control-lg" />
                      <label class="form-label" for="form3Example90">Phone Number</label>
                      <span class="error">*
                        <?php echo $phoneErr; ?>
                      </span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name=adr id="Adr" value="<?php echo $adr; ?>"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Address</label>
                      <span class="error">*
                        <?php echo $adrErr; ?>
                      </span>
                    </div>



                    <div class="d-flex justify-content-end pt-3">
                      <button type="button" class="btn btn-light btn-lg">Reset all</button>
                      <button type="submit" value="submit" class="btn btn-warning btn-lg ms-2" id="btn"
                        name="submit">Submit
                        form</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="reg.js"></script>
</body>

</html>