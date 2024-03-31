<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - PHP Dasar</title>
  <style>
    <?php include 'assets/css/bootstrap.min.css'; ?>
    <?php include 'assets/css/style.css'; ?>
  </style>
</head>

<body class="background-radial-gradient overflow-hidden">
  <section class="vh-100 my-3">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5 d-flex justify-content-center">
          <img src="assets/img/arkatama.png" class="img-fluid" width="600" />
        </div>
        <div class="card bg-glass col-md-8 col-lg-6 col-xl-4 offset-xl-1 px-5 py-3">
          <form method="post" action="proses_login.php">
            <div class="card-body d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fs-6 fw-normal text-center mb-0">Masuk dengan</p>
              <button type="button" class="btn btn-outline-primary btn-floating mx-1"><i class="fab fa-google"></i></button>
              <button type="button" class="btn btn-outline-primary btn-floating mx-1"><i class="fab fa-facebook-f"></i></button>
              <button type="button" class="btn btn-outline-primary btn-floating mx-1"><i class="fab fa-twitter"></i></button>
            </div>

            <div class="divider d-flex align-items-center my-3">
              <p class="text-center fw-bold mx-3 mb-0">Atau</p>
            </div>

            <!-- Email input -->
            <div class="form-outline form-floating mb-4">
              <input type="email" id="formexample" class="form-control form-control-lg" placeholder="Email" name="email" value="sulthanizza@gmail.com" />
              <label class="form-label" for="formexample">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline form-floating mb-3">
              <input type="password" id="formexample2" class="form-control form-control-lg" placeholder="Kata Sandi" name="password" value="123" />
              <label class="form-label" for="formexample2">Kata Sandi</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="formexample3" />
                <label class="form-check-label" for="formexample3">Ingat saya</label>
              </div>
              <a href="#!" class="link-primary text-decoration-none">Lupa kata sandi?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg w-100">Masuk</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Tidak punya akun? <a href="#!" class="link-danger text-decoration-none">Daftar</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
    <?php include 'assets/js/bootstrap.bundle.min.js'; ?>
  </script>
  <script src="https://kit.fontawesome.com/9273de0686.js" crossorigin="anonymous"></script>
</body>
</html>