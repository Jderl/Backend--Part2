<!-- SIGNUP PAGE -->
<?php




?>





<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up - PHILSILAT</title>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- header -->
  <header class="fixed-top">
    <nav class="navbar navbar-expand-md navbar-dark bg-black">
      <div class="container-fluid">
        <a class="navbar-brand ms-4 fw-bold" href="../index.php">PHILSILAT</a>
      </div>
    </nav>
  </header>

  <!-- left and right panel -->
  <div class="container-fluid">
    <div class="row flex-row height-full">
      <!-- left panel -->
      <div class="leftpanel col col-md-6 bg-body-secondary d-flex justify-content-center align-items-center">
        <div class="container-fluid d-none d-md-block">
          <h1 class="h1Light">PHILSILAT</h1>
          <p class="pLight pLight-lg">EVENT MANAGEMENT SYSTEM</p>
        </div>
        <div class="card card-body bg-dark mx-4 d-sm-flex d-md-none">
          <div class="container-fluid m-4 w-auto">
            <h1 class="h1Dark">SIGN UP</h1>
            <form action="signup.php" class="form-signup" method="post">
              <div class="row flex-row mt-5">
                <div class="form-group col-6 pe-1">
                  <input class="form-control custInput" type="text" id="lastname" name="lastname" placeholder="Last Name" >
                </div>
                <div class="form-group col-6 ps-1">
                  <input class="form-control custInput" type="text" id="firstname" name="firstname" placeholder="First Name">
                </div>
              </div>
              <div class="form-group mt-3">
                <input class="form-control custInput" type="email" id="email" name="email" placeholder="Email" >
              </div>
              <div class="form-group mt-3">
                <input class="form-control custInput" type="password" id="password" name="password" placeholder="Password" >
              </div>
              <div class="form-group mt-3">
                <input class="form-control custInput" type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" >
              </div>
              <!-- <div class="form-group mt-3">
                <input class="form-control custInput" type="text" id="code" name="code" placeholder="Code" required>
              </div> -->
              <div class="form-btn d-flex justify-content-end mt-3">
                <input type="submit" value="SIGN UP" name="submit" class="custBtn custBtn-gray">
              </div>
            </form>
            <div class="text-center mt-5">
                <p class="custText">
                  Already have an account?
                  <a href="login.php" class="custText custText-clickable">
                    <strong>Log In</strong>
                  </a>
                </p>
              </div>
          </div>
        </div>
        <!-- end of left panel -->
      </div>
      <!-- right panel -->
      <div class="rightpanel col-6 bg-dark d-none d-md-flex justify-content-center align-items-center">
        <div class="container-fluid col-6 my-5">
             <!--   Databased connection          -->     
             <!-- Need to encryped the Hashmap -->
             <div class= "container">

                <?php
                if(isset($_POST["submit"] )){
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $passwordConfirm = $_POST["confirmpassword"];


                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $errors =array();

                    // Checker if the information is not completed
                    if(empty($firstname) OR empty($lastname) OR empty($email ) OR empty($password) OR empty($passwordConfirm) ){
                        array_push($errors,"All fields are reqired");

                    }
                    // Checker if the email is existing
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        array_push($errors,"Email is existing");

                }
                    //Checker if the password is lessthan user type? 
                    if(strlen($password)<8){
                        array_push($errors,"Password must be atleast 8 characters long");

                    }
                     //Check if password same to the confirmpassword? 
                    if($password!==$passwordConfirm){
                        array_push($errors,"Password does not match");
                    }

                    if(count($errors)>0){
                        foreach($errors as $error){
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    }else{
                    require_once "database.php";
                    $sql = "INSERT INTO users(firstname,lastname,email,password) VALUES(? ,?, ? ,?)";
                    $stmt = mysqli_stmt_init($conn);
                    $preparestmt = mysqli_stmt_prepare($stmt,$sql);

                    if($preparestmt){
                        mysqli_stmt_bind_param($stmt,"ssss",$firstname,$lastname, $email, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>Register Succesfully</div>";
                    }else{
                        die("Something went wrong");
                    }




                    }

                }
                ?>
                </div>
                <!--   Databased connection          -->     

           
          <h1 class="h1Dark">SIGN UP</h1>
          <form action="signup.php" class="form-signup" method="post">
            <div class="row flex-row mt-5">
              <div class="form-group col-6 pe-1">
                <input class="form-control custInput" type="text" id="lastname" name="lastname" placeholder="Last Name">
              </div>
              <div class="form-group col-6 ps-1">
                <input class="form-control custInput" type="text" id="firstname" name="firstname" placeholder="First Name" >
              </div>
            </div>
            <div class="form-group mt-3">
              <input class="form-control custInput" type="email" id="email" name="email" placeholder="Email" >
            </div>
            <div class="form-group mt-3">
              <input class="form-control custInput" type="password" id="password" name="password" placeholder="Password" >
            </div>
            <div class="form-group mt-3">
              <input class="form-control custInput" type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" >
            </div>
            <!-- <div class="form-group mt-3">
              <input class="form-control custInput" type="text" id="code" name="code" placeholder="Code" minlength="8" required>
            </div> -->
            <div class="form-btn d-flex justify-content-end mt-3">
              <input type="submit" value="SIGN UP" name="submit" class="custBtn custBtn-gray">
            </div>
          </form>
          <div class="text-center mt-5">
              <p class="custText">
                Already have an account?
                <a href="login.php" class="custText custText-clickable">
                  <strong>Log In</strong>
                </a>
              </p>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- template -->
  <!-- <div class="wrapper">
      <div class="container">
        <div class="row flex-row">
          <div class="col-6 bg-light d-flex justify-content-center align-items-center vh-100">
            <div class="bg-dark">
              asd
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>