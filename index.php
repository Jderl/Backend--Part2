<!-- LOGIN PAGE -->

<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHILSILAT</title>
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
  <header class="sticky-top">
    <!-- nav bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-black">
      <div class="container-fluid">
        <!-- sidenav toggler -->
        <div class="d-flex flex-row align-items-center">
          <a class="navbar-toggler ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-list"></i>
          </a>
          <!-- brand -->
          <a class="navbar-brand ms-2 fw-bold" href="home-admin.php">PHILSILAT</a>
        </div>
        <div class="d-flex flex-row">
          <p class="pDark m-auto me-4">ADMIN</p>
          <!-- Dropdown -->
          <ul class="navbar-nav ms-auto me-4">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-3"></i>Profile</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="login.php"><i class="bi bi-box-arrow-right me-3"></i>Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- sidenavbar -->
  <div class="offcanvas offcanvas-start show bg-dark sidebar-full" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header d-md-none">
      <h5 class="offcanvas-title text-light fw-bold" id="offcanvasDarkLabel">PHILSILAT</h5>
      <!-- <p class="fw-bold text-light my-auto"></p> -->
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- <a href="#" class="d-flex align-items-center ms-auto" data-bs-dismiss="offcanvas" style="height: 12px; color: white;">
        <i class="bi bi-arrow-left"></i>
      </a> -->
    </div>
    <div class="offcanvas-body text-light">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
    </div>
  </div>


  <!-- wrapper -->
  <div class="container-fluid">

  </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>