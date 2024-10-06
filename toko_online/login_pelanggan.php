<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .text-body {
            color: white;
        }
        .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }
        .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
    </style>
</head>
<body>
<section class="vh-100"
  style=" background-color: #84fab0; ">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card  " style="border-radius: 15px; " >
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5 text-body">Login</h2>

              <form action="proses_login2.php" method="post">

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" name="username"  class="form-control " placeholder="Username"  />
                
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="password"  class="form-control " placeholder="Password" />
                </div>



                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4  " >Login</button>
                </div>

                <p class="text-center text-body mt-5 mb-0 ">Don't have already an account? <a href="register_pelanggan.php"
                class="fw-bold text-body"><u>Register here</u></a></p>



              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>