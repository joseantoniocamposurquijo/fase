<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta author="Jose Antonio Campos Urquijo, Ronald Mauricio Bermudez Gonzalez, Victor Julio Urrego Bejarano, Luis Alfonso Paez">
	<title>Trabajo Colaborativo Grupo 5</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>

	<!-- CONTIENE TODOS LOS ELEMENTOS DEL MENU -->
	<div id="menu">
		<div id="logo-principal"></div>
		<div id="contenedor-general-primero" class="contenedor-general">
			<div class="logo-interior">
				<p class="texto1"><a href="#img1">1</p></a>
			</div>
			<p class="texto2"><a href="#img1">EJERCICIO</p></a>
		</div>
		<div class="contenedor-general">
			<div class="logo-interior">
				<p class="texto1"><a href="#img2">2</p></a>
			</div>
			<p class="texto2"><a href="#img2">EJERCICIO</p></a>
		</div>
		<div class="contenedor-general">
			<div class="logo-interior">
				<p class="texto1"><a href="#img3">3</p></a>
			</div>
			<p class="texto2"><a href="#img3">EJERCICIO</p></a>
		</div>
		<div class="contenedor-general">
			<div class="logo-interior">
				<p class="texto1"><a href="#img4">4</p></a>
			</div>
			<p class="texto2"><a href="#img4">EJERCICIO</p></a>
		</div>
		<div class="contenedor-general">
			<div class="logo-interior">
				<p class="texto1"><a href="#img5">5</p></a>
			</div>
			<p class="texto2"><a href="#img5">EJERCICIO</p></a>
		</div>
	</div>

<!-- CONTIENE LA INFORMACION DE PAGINA PRINCIPAL -->
	<article id="info">
		<div id="texto-contenedor">
			<h2>Universidad Nacional Abierta y a Distancia<br>
			Escuela de Ciencias Básicas, Tecnología e Ingeniería<br>
			Programa de Ingeniería de Sistemas<br>
			Curso de Programación de Sitios Web<br>
			Manejo de programación básica</h2>
			<h2>Integrantes:<br> 
			RONALD MAURICIO BERMUDEZ GONZALEZ - Código: 80165388<br>
			VICTOR JULIO URREGO BEJARANO - Código: 80185143<br>
			JOSE ANTONIO CAMPOS URQUIJO - Código: 80134146<br>
			LUIS ALFONSO PAEZ - Código: 80143699</h2>
			<h2>Grupo: 301127_5</h2>
			<h2>Tutor:<br>
			FRANCISCO JAVIER HILARION NOVOA</h2>
			<p>fecha de entrega: 04 de Octubre de 2016</p>
			<p>Todos los derechos reservados || All rigths reserved</p>
			<p><b><font color="red">Para acceder a los ejercicios, haga click en el menú de la izquierda.</font></b></p>
		</div>
		<div id="imagen-contenedor">
			<img id="imagen" src="https://userscontent2.emaze.com/images/39c0a734-04b5-4b3c-a745-1749f8364913/1e4105c17ccfc6b50cbfa9796425c79f.png" alt="">
		</div>
		
	</article>
	

<!-- CONTIENE EL DESARROLLO DE LOS EJERCICIOS -->

<!-- EJERCICIO 1 -->
	<div class="modal" id="img1">
		<a class="cerrar" href="">X</a>
		<div class="campo">
			<section>
				<h3>EJERCICIO 1</h3>
				<p>Capturar dos números e indicar si el primer número es divisor del segundo número<br><br></p>
				<form action="" method="post" name="divisor_numero" id="divisor_numero">
				  <table align="center">
				    <tr>
			    	  <td>Ingrese primer número:</td>
			      	<td><label for="num1"></label>
			      		<input type="text" name="num1" id="num1"></td>
			    	</tr>
				    <tr>
				      <td>Ingrese segundo número:</td>
				      <td><label for="num2"></label>
				      <input type="text" name="num2" id="num2"></td>
				    </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Calcular"></td>
				    </tr>
			  		</table>
				</form>
			</section>
		</div>
		<div class="campo2">
			<?php 
		if(isset($_POST["enviando"])){
		 		$num1=$_POST["num1"];	
		 		$num2=$_POST["num2"];
		 		echo "<br>";
		 		echo "<b>---- DATOS -----</b><br>";
		 		echo "Primer número ingresado por el usuario:  <b>" .  $num1 . "</b><br>";
		 		echo "Segundo número ingresado por el usuario:  <b>" .  $num2 . "</b><br><br>";
		 		echo "<b>---- RESULTADO ----</b></br>";
		 		if ($num2 % $num1 == 0) {
		 			echo "<p class='verde'>" . "El número " . $num1 . " ES divisor del número " . $num2 . "</p>";
		 		}else{
		 			echo "<p class='rojo'>" . "El número " . $num1 . " NO ES divisor del número " . $num2 . "</p>";
		 		}
		 	}
		 	echo "<br>";
		 	echo "<br>";
		 ?>
		</div>
	</div>

<!-- EJERCICIO 2 -->
	<div class="modal" id="img2">
		<a class="cerrar" href="">X</a>
		<div class="campo">
			<section>
				<h3>EJERCICIO 2</h3>
				<p>Por medio de un formulario, pedir la base y el exponente, y realizar el cálculo mediante sumas</p>
				<form action="" method="post" name="potencia_numero" id="potencia_numero">
				  <table align="center">
				    <tr>
				      <td>Ingrese Base:</td>
				      <td><label for="base"></label>
				      <input type="text" name="base" id="base"></td>
				    </tr>
				    <tr>
				      <td>Ingrese Potencia:</td>
				      <td><label for="exponente"></label>
				      <input type="text" name="exponente" id="exponente"></td>
				    </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td colspan="2" align="center"><input type="submit" name="enviando2" id="enviando2" value="Calcular"></td>
				    </tr>
				  </table>
				</form>
				<p><b>ADVERTENCIA:</b> Este ejercicio realiza cálculos a la n potencia, 
					sin embargo los resultados no se visualizan completamente para potencias muy grandes, 
					ya que los estilos CSS contienen posisiones absolutas. </p>
			</section>
		</div>
		<div class="campo2">
			<?php 
		if(isset($_POST["enviando2"])){

		 		$base=$_POST["base"];	
		 		$exponente=$_POST["exponente"];
		 		$suma=0;
		 		$aux=$base;

		 		echo "<br>";
		 		echo "<b>---- DATOS -----</b><br>";
		 		echo "BASE ingresado por el usuario:  <b>" .  $base . "</b><br>";
		 		echo "EXPONENTE ingresado por el usuario:  <b>" .  $exponente . "</b><br><br>";
		 		echo "<b>---- RESULTADO ----</b></br>";
	 				 			
	 			for($i=1;$i<=$exponente-1;$i++){
	 				for($j=1;$j<=$base;$j++){
	 					echo $suma . "+" . $aux . "=" . ($suma+$aux) . "<br>";
	 					$suma = ($suma+$aux);
	 				}
	 				echo "<br>";
	 				$aux = $suma;
	 				$suma = 0;
	 			}
		 	}
		 	echo "<br>";
		 	echo "<br>";
		 ?>
		</div>
	</div>


<!-- EJERCICIO 3 -->
	<div class="modal" id="img3">
		<a class="cerrar" href="">X</a>
		<div class="campo">
			<section>
				<h3>EJERCICIO 3</h3>
				<p>Mediante un formulario pedir un	numero inicial y un número final, 
						e indicar de estos números los que  son primos y cuantos no son primos</p>
				<form action="" method="post" name="inicial_final" id="inicial_final">
				  <table align="center">
				    <tr>
				      <td>Ingrese número inicial:</td>
				      <td><label for="inicial"></label>
				      <input type="text" name="inicial" id="inicial"></td>
				    </tr>
				    <tr>
				      <td>Ingrese número final:</td>
				      <td><label for="final"></label>
				      <input type="text" name="final" id="final"></td>
				    </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td colspan="2" align="center"><input type="submit" name="enviando3" id="enviando3" value="Calcular"></td>
				    </tr>
				  </table>
				</form>
			</section>
		</div>	
		<div class="campo2">
			<?php 
		if(isset($_POST["enviando3"])){
		 		$inicial=$_POST["inicial"];	
		 		$final=$_POST["final"];
		 		$k=0;
		 		$l=0;
		 		echo "<br>";
		 		echo "<b>---- DATOS -----</b><br>";
		 		echo "Número INICIAL ingresado por el usuario:  <b>" .  $inicial . "</b><br>";
		 		echo "Número FINAL ingresado por el usuario:  <b>" .  $final . "</b><br><br>";
		 		echo "<b>---- RESULTADO ----</b></br>";
	 			echo "Los números Primos encontrados dentro del rango establecido, son: <br>";
	 			function checkifprime($prime){
       				for($i = 2; $i < $prime; $i++){
              			if ($prime % $i == 0){
                     		return false;
              			}
        			}
        			return true;
				}

				for($i = $inicial; $i <= $final; $i++){
				    if(checkifprime($i)){
				        echo $i."<br>";
				        $k++;
				    }
				    $l++;
				}
				echo "<br><br>";
				echo "Cantidad de números primos encontrados: " . $k . "<br>";
				echo "Cantidad de números NO primos: " . ($l-$k);
		 	}
		 	echo "<br>";
		 	echo "<br>";
		 ?>
		</div>
	</div>


<!-- EJERCICIO 4 -->
	<div class="modal" id="img4">
		<a class="cerrar" href="">X</a>
		<div class="campo">
			<section>
				<h3>EJERCICIO 4</h3>
				<p>Un script debe pedirle al usuario que digite la cantidad de números
					a generar, luego se debe crear la siguiente secuencia (1, 5, 6, 10, 11, 15, 16, …)</p>
				<form action="" method="post" name="generar_numeros" id="generar_numeros">
				  <table align="center">
				    <tr>
				      <td>Ingrese cantidad a generar:</td>
				      <td><label for="numgen"></label>
				      <input type="text" name="numgen" id="numgen"></td>
				    </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td colspan="2" align="center"><input type="submit" name="enviando4" id="enviando4" value="Calcular"></td>
				    </tr>
				  </table>
				</form>
			</section>
		</div>
		<div class="campo2">
			<?php 
		if(isset($_POST["enviando4"])){
				
		 		$generar=$_POST["numgen"];	
		 		$suma=0;
		 		$val=1;
		 		echo "<br>";
		 		echo "<b>---- DATOS -----</b><br>";
		 		echo "Cantidad de números a generar:  <b>" .  $generar . "</b><br><br>";
		 		echo "<b>---- RESULTADO ----</b></br>";
		 		echo "Números generados: <br>";
		 		for($i=0; $i<=$generar-1; $i++){
		 			$suma = $suma + $val;
		 			if($val==1){
		 				$val=4;
		 			}else{
		 				$val=1;
		 			}
		 			echo $suma . ", ";
		 		}
		 	}
		 	echo "<br>";
		 	echo "<br>";
		 ?>
		</div>
	</div>


<!-- EJERCICIO 5 -->
	<div class="modal" id="img5">
		<a class="cerrar" href="">X</a>
		<div class="campo">
			<section id="contenedor5">
				<h3>EJERCICIO 5</h3>
				<p>Diseñe un programa que permita ingresar la edad del usuario y otro número cualquiera (a).
					El programa sumará el número “a” a la edad ingresada y generará la tabla de multiplicar de este número </p>
				<form action="" method="post" name="multiplicar" id="multiplicar">
				  <table align="center">
				    <tr>
				      <td>Ingrese la edad del usuario:</td>
				      <td><label for="edad_user"></label>
				      <input type="text" name="edad_user" id="edad_user"></td>
				    </tr>
				    <tr>
				      <td>Ingrese un número cualquiera:</td>
				      <td><label for="numcual"></label>
				      <input type="text" name="numcual" id="numcual"></td>
				    </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td colspan="2" align="center"><input type="submit" name="enviando5" id="enviando5" value="Calcular"></td>
				    </tr>
				  </table>
				</form>
			</section>
		</div>
		<div class="campo2">
			<?php 
		if(isset($_POST["enviando5"])){
		 		$edad_user=$_POST["edad_user"];	
		 		$numcual=$_POST["numcual"];
		 		$suma=0;
		 		$cont=1;
		 		echo "<br>";
		 		echo "<b>---- DATOS -----</b><br>";
		 		echo "Edad ingresada por el usuario:  <b>" .  $edad_user . "</b><br>";
		 		echo "Número ingresado por el usuario:  <b>" .  $numcual . "</b><br><br>";
		 		echo "<b>---- RESULTADO ----</b></br>";
		 		$suma = ($edad_user+$numcual);
		 		echo "Resultado: " . $suma . "<br><br>";
		 		echo "<b>TABLA DE MULTIPLICAR DEL: " . $suma . "</b><br>";
		 		for($i=1; $i<=10; $i++){
		 			echo $suma . "*" . $cont . "=" . ($suma*$cont) . "<br>";
		 			$cont++;
		 		}
		 	}
		 	echo "<br>";
		 	echo "<br>";
		 ?>
		</div>
	</div>
</body>
</html>