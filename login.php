<?php
require "assets/php/check.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/stockroom.svg">

    <script src="https://kit.fontawesome.com/00ea7c907d.js" crossorigin="anonymous"></script>

    <title>Login</title>
  </head>
  <body class="home">
    
    <div class="container bg-login col-10 center justify-content-center rounded box login">
      <div class="row">
        <div class="left col-xl no-pad-left">
          <div class="left-container">
            <img class="center rounded mx-auto d-block" src="assets/img/logo-bg.png">
          </div>
        </div>
        <div class="right col-xl no-pad-right">
          <div class="right-container">
            <div class="content-right">
              <div class="txt">
                <h1 class="txt-1">Login </h1>
                <h3 class="txt-2">Please login to <span>continue</span></h3>
              </div>
              <form class="form-group" method="POST" target="_self">
                <div class="input-group mb-4">
                  <span class="input-group-text justify-content-center" id="basic-addon1">
                    <i class="fa-solid fa-user fa-lg"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="user" required>
                </div>
                <div class="input-group mb-4">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fa-solid fa-lock fa-lg"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required>
                </div>
                <div class="row mb-7">
                  <div class="col-sm-10 offset-sm-2 no-margin-left">
                    <?php if (isset($failed)) { ?>
                    <div id="bad-login">Invalid username or password</div>
                    <?php } ?>
                  </div>
                </div>
                <div class="align-self-center mx-auto d-grid gap-2 col-3">
                  <button type="submit" class="btn btn-primary center" name="submit" value="Login">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>