<?php
include ('../includes/config.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Admin Login | Engage Hub</title>
  <link rel="shortcut icon" type="image/png" href="<?= urlOf('admin/assets/images/logos/favicon.png') ?>" />
  <link rel="stylesheet" href="<?= urlOf('admin/assets/css/styles.min.css') ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="<?= urlOf('admin/index.php') ?>" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= urlOf('assets/img/logo5.png')?>" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" id="password" name=" password" class="form-control">
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-outline-dark m-1" onclick="adminLogin()">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= urlOf('admin/assets/libs/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= urlOf('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>

  <script>
    function adminLogin() {
        let data = {
        name: $('#username').val(),
        password: $('#password').val(), 
      }
  
      $.ajax({
        url: "../../api/adminLoginProc.php",
        data: data,
        method: "POST",
        success: function(response){
          console.log(response);
          if(response.status) {
            console.log("cgc"); 
            window.location = '../index.php'
          } else {
            alert("Invalid Creds!")
          }
        }
  
      })
    }
  </script>
</body>

</html>