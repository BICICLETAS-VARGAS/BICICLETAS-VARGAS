<?php
include("conexion.php");
session_start();
 if (!isset($_SESSION['id_usuario'])) {
	header("Location:/php/login.php");
}

$iduser = $_SESSION['id_usuario'];

$sql = " SELECT idusuarios, Usuario FROM usuarios WHERE idusuarios = '$iduser' ";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilos.css">
	<link rel="stylesheet" href="/css/mini fond.css">
	<link rel="stylesheet" href="/css/contenido.css">
	<link rel="stylesheet" href="/css/footer.css">
	<script src="https://kit.fontawesome.com/7c2d1a3e12.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    
    <nav class="menu" id="menu" >
		
		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>

	

		<div class="contenedor contenedor-enlaces-nav">
			<div>
                <a href="/HTML/Principal.html"><img src="/img/logo bicicletas vargas 1.png" alt="" class="logo"  ></a>
            </div>
			<div class="btn-departamentos" id="btn-departamentos">
				<p>Todos los <span>Productos y mas</span></p>
				<i class="fas fa-caret-down"></i>
			</div>

			<div class="enlaces">
				
				
				<!--<a href="#" class="Nosotros">Nosotros</a>-->
				<a href="/HTML/contacto.html">Contacto</a>
				<!--<a href="#">Ayuda</a>-->
				<a href=""></a>
				

				<nav>
					<img src="/img/user.png" alt="" class="user-pic" onclick="toggleMenu()">
	
					
				</nav>
				
				
			</div>
            <div class="sub-menu-wrap" id="subMenu">
				<div class="sub-menu">
					<div class="user-info">
						<img src="/img/user.png">
						<h3><?php echo utf8_decode($row['Usuario']); ?></h3>

					</div>
					<hr>

					<a href="" class="sub-menu-link">
						<img src="/img/profile.png">
						<p>Editar perfil</p>
						<span>></span>
					</a>

					<a href="" class="sub-menu-link">
						<img src="/img/setting.png">
						<p>Editar perfil</p>
						<span>></span>
					</a>
						
					<a href="/php/logout.php" class="sub-menu-link">
						<img src="/img/logout.png">
						<p>Salir</p>
						<span>></span>
					</a>
						
				</div>
			</div>					

		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>
	
					<a data-categoria="Componentes">Componentes <i class="fas fa-angle-right"></i></a>
					<a data-categoria="Accesorios">Accesorios<i class="fas fa-angle-right"></i></a>
					<a data-categoria="Herramientas">Herramientas<i class="fas fa-angle-right"></i></a>
					<a data-categoria="Bisicletas Completas">Bicicletas De Completas <i class="fas fa-angle-right"></i></a>
					<a data-categoria="Cuadros">Cuadros De Bicicletas <i class="fas fa-angle-right"></i></a>
				</div>
	
	<!---SUB CATEGORIAS--->
				<div class="contenedor-subcategorias">
					<div class="subcategoria " data-categoria="Componentes">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Componentes</h3>
							<a href="/html-comp/cuadros.html">Rines</a>
							<a href="/html-comp/LLantas.html">Cuadros</a>
							<a href="/html-comp/Cassettes.html">Frenos</a>
							<a href="/html-comp/Transmiciones.html">LLantas</a>
							<a href="/html-comp/otros.html">Camaras</a>
							<a href="#">Transmiciones</a>
						</div>
	
						<div class="banner-subcategoria">
							<a href="#">
								<img src="/img componetes/40.jpeg" alt="">
							</a>
						</div>
	
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="/img componetes/272.jpeg" alt="">
							</a>
							<a href="#">
								<img src="/img componetes/128.jpeg" alt="">
							</a>
							<a href="#">
								<img src="/img componetes/2.jpeg" alt="">
							</a>
							<a href="#">
								<img src="/img componetes/121.jpeg" alt="">
							</a>
						</div>
					</div>
	
					<div class="subcategoria" data-categoria="Accesorios">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Accesorios</h3>
							<a href="html-acces/Vestimenta.html">Vestimenta</a>
							<a href="html-acces/anforas.html">Anforas</a>
							<a href="html-acces/cascos.html">Cascos</a>
						</div>
	
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../Bicicletas vargas/img accesorios/Casco Negro.jpeg" alt="">
							</a>
						</div>
	
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../Bicicletas vargas/img accesorios/Guantes blancos.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img accesorios/Puños Azul Rey.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img accesorios/Linterna Delantera.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img accesorios/Seguro Para Bicicleta.jpeg" alt="">
							</a>
						</div>
					</div>
	
					<div class="subcategoria" data-categoria="Herramientas">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Herramientas</h3>
							<a href="html-herram/Llaves.html">Llaves</a>
							<a href="html-herram/Bonbas.html">Bombas</a>
							<a href="html-herram/otros.html">Otros</a>
						</div>
	
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/LLave  doble.jpeg" alt="">
							</a>
						</div>
	
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Tijera.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Seguro de cadena.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Llave triple.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Lija.jpeg" alt="">
							</a>
						</div>
					</div>
	
					<div class="subcategoria" data-categoria="Bisicletas Completas">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Bicicletas</h3>
							<a href="#">Rodado 29</a>
							<a href="#">Rodado 27.5</a>
							<a href="#">Rodado 26</a>
							<a href="#">Rodado 24</a>
							<a href="#">Rodado 20</a>
							<a href="#">Rodado 18</a>
							<a href="#">Rodado 16</a>
							<a href="#">Rodado 14</a>
							<a href="#">Rodado 12</a>
						</div>
	
						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/hogar-banner-1.png" alt="">
							</a>
						</div>
	
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/hogar-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/hogar-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/hogar-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/hogar-galeria-4.png" alt="">
							</a>
						</div>
					</div>
	
					<div class="subcategoria" data-categoria="Cuadros">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Cuadros</h3>
							<a href="ht">Cuadros</a>
						</div>
	
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Cuadro Windsor.jpeg" alt="">
							</a>
						</div>
	
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Cuadro Vital.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Cuadro BMX.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Cuadro Hunter.jpeg" alt="">
							</a>
							<a href="#">
								<img src="../../Bicicletas vargas/img componetes/Cuadro antiguo.jpeg" alt="">
							</a>
						</div>
					</div>
	
				</div>
			</div>
		</div>
		<div class="minifond">
			<a href="#contenido"><i class="fas fa-angle-down"></i></a>
			
		</div>
	</nav>
    <!--MENU-->

	<section id="contenido">
		
		<div class="cont">
			<h1 class="h1"> El ciclismo de toda persona </h1>
			<h2>Bicicletas vargas donde encontraras lo que necesites​</h2>
			<hr size="4px" color="black"  class="h">
			<hr size="4px" color="black"  class="h2">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			   Itaque dolor voluptatem molestiae magnam. <br> Maiores magni voluptas 
			   rem hic nulla dolorum quisquam perferendis 
			   reprehenderit id eligendi, <br> cumque beatae placeat error cum.
			</p>

			<img src="/img/48srmf.png" alt="">   

			<h3 class="T1">Nuestras Herramientas</h3>
			<h3 class="T2">Nuestras Herramientas</h3>
			<h3 class="T3">Nuestras Herramientas</h3>

            <h4 class="SUB1">Eficaces</h4>
			<h4 class="SUB2">Eficaces</h4>
			<h4 class="SUB3">Eficaces</h4>
			<hr size="5px" color="black"  class="EF1">
			<br>
			<hr size="5px" color="black"  class="EF2">
			<br>
			<hr size="5px" color="black"  class="EF3">
			<br>
			<hr size="5px" color="black"  class="EF4">
			<br>
			<hr size="5px" color="black"  class="EF5">
			<br>
			<hr size="5px" color="black"  class="EF6">
			<br>
			<br>
			*
		</div>
		<!---->
	</section>

	<section class="imagem" id="img02">
        <article>
			<h1 class="prm">Pondremos tu bici a punto para tu próxima aventura</h1>
			<h2> — HAS UNA ESCAPADA EN BICI —</h2>
		</article>
    </section>

    <section class="encont">
		<article>
			<br>
               <h1 class="fh1">¿Que es lo que necesita tu bicicleta?</h1>
                <h2 class="fh2">​Lo podrás encontrar aquí</h2>
				<hr size="4px" color="#fff" class="AQ">
				<hr size="4px" color="#fff" class="AQ2">
				<div ><img class="icon1" src="/img/1895507-27971543.png" alt=""></div>
				<div class="icon2"><img src="/img/1786971-d68ffb0f.png" alt=""></div>
				<p class="text1">Aquí comienza tu texto. Puedes hacer clic en este punto <br> empezar a escribir. Quia consequuntur magni dolores eos <br>qui ratione voluptatem sequi nesciunt neque porro quisquam <br>est qui dolorem ipsum quia dolor sit amet consectetur adipisci <br>velit sed quia non numquam eius modi.</p>
				<h3 class="tex2">Servicio Profecional</h3>
				<h3 class="tex3">Clientes Satisfechos</h3>
				<h4 class="subt1">PERSONAL CUALIFICADO</h4>
				<h4 class="subt2">ORIENTADO AL CLIENTE</h4>
				<h5 class="subt3">Haz clic aquí y empieza a escribir. <br>
					Quia consequuntur magni <br>
					dolores eos qui ratione.</h5>
				<h5 class="subt4">Haz clic aquí y empieza a escribir. <br>
					Quia consequuntur magni <br>
					dolores eos qui ratione.</h5>
		</article>
	</section>

	 
	<footer>
    <div class="container-footer-all">
        <div class="container-body">
            <div class="colum1">
                <img src="/img/log.png" class="log_pie" alt="Logo">
            </div>
            <div class="colum2">
                <h1>Redes Sociales</h1>
            <div class="row">
                
                <img src="img/icon_pie/facebook.png">
                <label><a class="facebook" target="blank" href="https://www.facebook.com/bicicletasvargas">Bicicletas Vargas</a></label>
                
            </div>
            <div class="row">
                <img src="img/icon_pie/whatsapp.png">
                <label>Whatsapp</label>
            </div>
        </div>
            <div class="colum3">
                <h1>Información Contacto</h1>
            <div class="row2">
                <img src="img/icon_pie/house.png">
                <label>Madero Sur #154 59600 Zamora de Hidalgo Centro,Michoacán de Ocampo, Mexico</label>
            </div>
            <div class="row2">
                <img src="img/icon_pie/smartphone.png">
                <label>(351) 112-50-18</label>
            </div>
            <div class="row2">
                <img src="img/icon_pie/contact.png">
                <label>Bicicletasvargasmx@gmail.com</label>
            </div>
        </div>
    </div></div>
        <div class="container-footer">
            <div class="footer">
                <div class="copyright">
                    © 2023 <a href="index.html">Bicicletas Vargas</a> | Todos los Derechos Reservados
                </div>
                <div class="information">
                    <a href="Políticas.html">Política de Privacidad</a> | <a href="Terminos.html">Términos y Condiciones</a>
                </div>
            </div>
        </div>
    </footer></div>
	<!--js-->
	<script src="/js/main.js"></script>
	<script src="/js/perfil.js"></script>
	<!--js-->
</body>
</html>