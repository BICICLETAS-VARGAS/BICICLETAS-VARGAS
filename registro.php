<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/img/logo bicicletas vargas 1.png">
  <link rel="stylesheet" href="/Inicio.css">
  <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/bicicleta.jpg">
    <link rel="stylesheet" href="/css/tablas.css">
	<link rel="stylesheet" href="/css/footer.css">
	<link rel="stylesheet" href="/css/logo.css">
	<link rel="stylesheet" href="/css/slader.css">
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="REGISTRO.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <title>Bicicletas Vargas Registro</title>
</head>
<body>
   <!--MENU-->
	
  


  <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_4e70">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-image u-layout-cell u-size-37 u-image-1" data-image-width="1920" data-image-height="1080">
              <div class="u-container-layout u-container-layout-1">
                <h3 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-default u-text-1">Bienvenido a<br>Bicicletas Vargas
                </h3>
                <p class="u-text u-text-body-alt-color u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-size-23 u-white u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-login-control u-form-1">
                    <form name="registro" action="/php/registro.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-38 u-form-vertical u-inner-form" source="custom" role="form" style="padding: 30px;">
                        <div class="u-form-group u-form-name">
                          <label for="username" class="u-label">Nombre de usuario *</label>
                          <input type="text" placeholder="Ingrese nombre completo" id="username" name="user" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                        </div>
                        <div class="u-form-group u-form-name">
                          <label for="fullname" class="u-label">Nombre completo *</label>
                          <input type="text" placeholder="Ingrese nombre completo" id="fullname" name="nombre" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                        </div>
                        <div class="u-form-group u-form-name">
                        <label for="email" class="u-label">Email *</label>
                        <input type="email" placeholder="Ingrese Email" id="email" name="correo" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                        </div>
                        
                        <div class="u-form-group u-form-password">
                          <label for="password" class="u-label">Ingresar  Contraseña *</label>
                          <input type="password" placeholder="Ingrese contraseña" id="password" name="pass" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                        </div>
                    
                        <div class="u-form-group u-form-password">
                          <label for="confirm_password" class="u-label">Confirmar  Contraseña *</label>
                          <input type="password" placeholder="Ingrese contraseña" id="confirm_password" name="passr" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                        </div>

                        <div class="u-align-left u-form-group u-form-submit">
                            <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-1" >Registrarse<br>
                            </a>
                            <input name="registrar" type="submit" class="u-form-control-hidden">
                        </div>
                        <input type="hidden" value="Ingresar" name="registrar">
                    </form>
                </div>
                <a href="login.php" class="u-border-active-palette-2-base u-border-hover-palette-1-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-grey-40 u-text-hover-palette-4-base u-btn-3">Si ya tienes cuenta  Iniciar Seción.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="/libreria/sweetalert.min.js" ></script > 

  
</body>
</html>