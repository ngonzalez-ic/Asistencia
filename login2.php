<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

   <div class="limiter">
      <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
         <div class="wrap-login100">
            <form class="login100-form validate-form" action="verificarLogin.php" method="post">
               <span class="login100-form-logo">
                  <i class="zmdi zmdi-landscape"></i>
               </span>

               <span class="login100-form-title p-b-34 p-t-27">
                  Log in
               </span>

               <div class="wrap-input100 validate-input" data-validate="Enter username">
                  <input class="input100" type="text" name="correo" placeholder="Usuario">
                  <span class="focus-input100" data-placeholder="&#xf207;"></span>
               </div>

               <div class="wrap-input100 validate-input" data-validate="Enter password">
                  <input class="input100" type="password" name="clave" placeholder="Contraseña">
                  <span class="focus-input100" data-placeholder="&#xf191;"></span>
               </div>

               

               <div class="container-login100-form-btn">
                  <button class="login100-form-btn">
                     Login
                  </button>
               </div>

               <div class="text-center p-t-90">
                  <a class="txt1" href="\php\alta2.html">
                     Registrese!!
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>


   <div id="dropDownSelect1"></div>

</body>

</html>