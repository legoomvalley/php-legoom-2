<?php
include '../vip/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Login</title>
<?php include "style.php" ?> 
</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Login New Intern Report </h2>
                </div>
                <div class="card-body">
                    <form action= "config.php" method="post">
                        <div class="form-row">
                            <!-- tambah icon  -->
                            <div class="name">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                E-mail
                                    <input class="input--style-5" type="email" name="email" placeholder="e.g username123@email.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <!-- tambah icon  -->
                            <div class="name">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg>
                            </div>
                            <div class="value">
                                        <div class="input-group">
                                            Password
                                            <input class="input--style-5" type="password" name="password" placeholder="e.g Must contains 8 characters with numbers and words" required>
                                            <label class="label--desc"></label>
                                </div>
                            </div>
                        </div>
                            <button class="btn btn--radius-2 btn--red" type="submit" >Login</button>
                            <div>
                                <!-- tambah forgot password -->
                                <br>
                                <p>Forgot your <a href="#">password?</a></p>
                            </div>
                            <div class="container signin">
                                
                                <p>Create a account <a href="../register">Register</a>.</p>
                               </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->