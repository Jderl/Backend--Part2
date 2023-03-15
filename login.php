<!-- LOGIN PAGE -->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In - PHILSILAT</title>
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
        <a class="navbar-brand ms-4 fw-bold" href="index.php">PHILSILAT</a>
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
            <h1 class="h1Dark">LOG IN</h1>
            <form action="login.php" class="form-login" method="post">
              <div class="form-group mt-5">
                <input class="form-control custInput" type="email" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group mt-3">
                <input class="form-control custInput" type="password" id="password" name="password" placeholder="Password" >
              </div>
              <div class="row flex-row mt-3">
                <div class="col">
                  <div class="text-start">
                    <a href="#" class="custText custText-clickable">
                      Forgot Password?
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="form-btn d-flex justify-content-end">
                    <input type="submit" value="LOG IN" name="login" class="custBtn custBtn-gray">
                  </div>
                </div>
              </div>
              <div class="text-center mt-5">
                <p class="custText">
                  Don't have an account yet?
                  <a href="signup.php" class="custText custText-clickable">
                    <strong>Sign Up</strong>
                  </a>
                </p>
              </div>
            </form>
          </div>
        </div>
        <!-- end of left panel -->
      </div>
      <!-- right panel -->
      <div class="rightpanel col-6 bg-dark d-none d-md-flex justify-content-center align-items-center">
        <div class="container-fluid col-6 my-5">
            <div>
                <!-- Peeking to the mysql if the user is existing  -->
                
            <!-- Peeking to the mysql if the user is existing  -->
                <?php
                if (isset($_POST["login"])) {
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                    require_once "database.php";
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user) {
                        if (password_verify($password, $user["password"])) {
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("Location: index.php");
                            die();
                        }else{
                            echo "<div class='alert alert-danger'>Password does not match</div>";
                        }
                    }else{
                        echo "<div class='alert alert-danger'>Email does not match</div>";
                    }
                }
                ?>

            </div>
          <h1 class="h1Dark">LOG IN</h1>
          <!-- change this -->
          <form action="login.php" class="form-login" method="post">
            <div class="form-group mt-5">
              <input class="form-control custInput" type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group mt-3">
              <input class="form-control custInput" type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="row flex-row mt-3">
              <div class="col">
                <div class="text-start">
                  <a href="#" class="custText custText-clickable">
                    Forgot Password?
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="form-btn d-flex justify-content-end">
                  <input type="submit" value="LOG IN" name="login" class="custBtn custBtn-gray">
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <p class="custText">
                Don't have an account yet?
                <a href="signup.php" class="custText custText-clickable">
                  <strong>Sign Up</strong>
                </a>
              </p>
            </div>
          </form>
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