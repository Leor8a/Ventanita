<?php
	/*
	Coódigo editado por Luis Ernesto Ochoa Ríos
	
	Código para la conexión a la base de datos.
	Éste se ocupa cada que requiramos hacer una conexión a la base es por ello, 
	que lo vamos a poner en este archivo aparte.
	

	Se definen algunas constantes, los datos de la conexión a la base:
	*/
	
	DEFINE ('USUARIO_BD','u75428_indigo');
	DEFINE ('CONTRASENA_BD','1Ndigo');
	DEFINE ('HOST_BD','localhost');

	mysql_connect(HOST_BD,USUARIO_BD,CONTRASENA_BD) or die(mysql_error());
	//mysql_connect("localhost","root","luis8a") or die(mysql_error());
	mysql_select_db("u75428_indigolabs") or die(mysql_error());

?>