<?php
// login session check
session_start();
if (isset($_SESSION['user_id'])) {
  header("Location: routines.php");
  exit();
}
$error = isset($_GET['error']) ? htmlspecialchars(urldecode($_GET['error'])) : null; // sign-up error display
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up - GymPro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nbs">
    <div class="container">
      <a class="navbar-brand" href="index.php">GymPro</a>
      <div id="google_translate_element"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fas fa-home me-1"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="signup.php"><i class="fa-solid fa-user-plus"></i> Sign
              Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="routines.php"><i class="fa-solid fa-address-card"></i> Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- form -->
  <div class="container mt-5 contmod">
    <h2 class="text-center fw-bold mb-5">Sign Up for GymPro</h2>
    <?php if ($error): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert"> <!-- sign-up error placeholder -->
        <strong><i class="fa-solid fa-triangle-exclamation"></i>Error!</strong> <?php echo htmlspecialchars($error); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <form id="signupForm" class="needs-validation" action="../php/inscription.php" method="post" novalidate>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control inpcol" id="username" name="username" required />
        <div class="invalid-feedback">Please choose a username.</div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control inpcol" id="email" name="email" required />
        <div class="invalid-feedback">Please provide a valid email.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control inpcol" id="password" name="password" required minlength="8" />
        <div class="invalid-feedback">
          Password must be at least 8 characters long.
        </div>
      </div>
      <div class="mb-3 form-check actions">
        <input type="checkbox" class="form-check-input nocb" id="showPassword">
        <label class="form-check-label" for="showPassword">Show password</label>
        <button type="submit" class="btn butcol" name="submit"><i class="fa-solid fa-user-plus btni"></i>Sign
          Up</button>
      </div>
      <div class="social-login">
        <p>Or Sign-up using:</p>
        <button type="button" class="btn social-btn google">
          <i class="fa-brands fa-google"></i> Sign-up with Gmail
        </button>
        <button type="button" class="btn social-btn facebook">
          <i class="fa-brands fa-facebook"></i> Sign-up with Facebook
        </button>
        <p><a class="account-link" href="login.php">Already have an account ?</a></p>
      </div>
    </form>
  </div>
  <!-- footer -->
  <footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-1">&copy; 2024 GymPro. All rights reserved.</p>
          <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/element.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/signup.js"></script>
</body>

</html>