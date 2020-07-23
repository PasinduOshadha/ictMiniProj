<!doctype html>
<html lang="en">
  <head>
    <title>ADMIN LOGIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">

    <!-- login page -->
    <link rel="stylesheet" href="css/loginform.css">
  </head>
  <body>
      <div class="container-fluid align-items-center loginformcontainer">
          <div class="row justify-content-center">
              <div class="col-md-4">
                  <div class="login-form p-5"> 
                      <form action="inc/adminlogin.inc.php" method="POST">
                          <div class="text-center mt-3 mb-3 ">
                                <a href="index.php"><img src="img/logo.png" class="img-fluid img-reponsive w-25 text-center"></a>
                          </div>
                          
                        <div class="form-group">
                            <input type="text" class="form-control" name="adminUser" id="adminUser" placeholder="Admin">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="adminPwd" id="adminPwd" placeholder="Admin Password">
                        </div>
                        <div class="w-100 text-center mt-5">
                            <button type="submit" id ="login" name="login_btn" class="btn btn-primary theme-btn login-btn">Login Now &nbsp;&nbsp;<img src="./img/dashicons-arrow-right-alt.png" width="15px"></button>
                            <div class="link mt-4"><a href="./index.html"><u>Back to Home Page</u></a></div>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>