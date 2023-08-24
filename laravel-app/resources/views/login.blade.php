<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KI Industri Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="custom_login-page">
    <div class="container custom_container-login">
      <div class="row">
        <div class="col-6 offset-md-1">
          <img src="assets/images/login.png" alt="" />
        </div>
        <div class="col-5 pt-5 pb-5">
          <h2 class="fw-bold fs-2">LOGIN</h2>
          <form action="">
            <div class="row g-3 align-items-center pb-4 ms-1">
              <div class="col-auto fs-2">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="col-auto">
                <input
                  type="email"
                  class="form-control no-focus"
                  id="exampleInputEmail1"
                  placeholder="E-mail"
                />
              </div>
            </div>
            <div class="row g-3 align-items-center pb-4 ms-1">
              <div class="col-auto fs-2">
                <i class="bi bi-person-fill-lock"></i>
              </div>
              <div class="col-auto">
                <input
                  type="password"
                  id="inputPassword6"
                  class="form-control no-focus"
                  placeholder="Password"
                />
              </div>
            </div>
            <div class="mb-3 form-check ms-4">
              <input
                type="checkbox"
                class="form-check-input border-black"
                id="exampleCheck1"
              />
              <label class="form-check-label ps-3" for="exampleCheck1"
                >Remember Me</label
              >
            </div>
            <button type="submit" class="btn fw-medium custom_submit-login">
              Log in
            </button>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
