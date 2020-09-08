<?php
/* ******PRIMERO: DEFINIMOS PARAMETROS DE CONEXIÓN ****************
	-----------------------------------------------------------
Debemos definir 4 parametros para la conexión a nuestra Base de Datos
	1)El servidor.							2)El usuario de BD.
	3)La contraseña del usuario de BD 		4)La Base de Datos.
*/
$servidor = "localhost";
$usuario = "opus";
$contrasena = "asd123";
$basedatos ="opusordi";


/* ******SEGUNDO: NOS CONECTAMOS CON EL SERVIDOR ****************
	------------------------------------------------------------
  la función mysqli_connect necesita 3 parametros: 
		1) el servidor (definido en el paso 1).
		2) el usuario de BD (definido en el paso 1).
		3) la contraseña del usuario de BD (definido en el paso 1).
  Con die mostraremos un mensaje en caso de no establecer la conexión con EL SERVIDOR.
*/
$conexion = mysqli_connect($servidor,$usuario,$contrasena) or die ("<strong>No se ha podido establecer la conexión con el SERVIDOR</strong>");
/* Para que los caracteres como el tilde y las eñes esten consideradas en nuestros resultados
	el metodo mysqli_set_charset necesita 2 parametros:
		1) la conexión.
		2) la codificación
*/
mysqli_set_charset($conexion,"utf8");


/* ******TERCERO: NOS CONECTAMOS A LA BASE DE DATOS ****************
	la función mysqli_select_db necesita de 2 parametros:
		1) la conexión (creada en el paso 2).
		2) la base de datos (definida en el paso 1).	
  Con die mostraremos un mensaje en caso de NO establecer la conexión con LA BASE DE DATOS.		
*/		
$bd = mysqli_select_db($conexion,$basedatos) or die ("<strong>No se ha podido establecer la BASE DE DATOS</strong>");
/* LISTO!!! */
?>












