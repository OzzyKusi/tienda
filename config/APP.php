<?php

	/*----------  
	Ruta o dominio del servidor  - Server path or domain
	----------*/
	const SERVERURL="http://localhost/TIENDA/";


	/*----------  
	Nombre de la empresa o compañia -  Company or company name
	----------*/
	const COMPANY="STOREZZY";


	/*----------  Idioma - Language
	Español -> es 
	----------*/
	const LANG="es";

	
	/*----------  
		Palabra clave dashboard - Dashboard keyword
		No usar los siguientes valores - Do not use the following values

		index | product | bag | registration | details | signin
	----------*/
	const DASHBOARD="admin";


	/*----------  
	Nombre de la sesion -  Session name
	----------*/
	const SESSION_NAME="STO";

	

	/*----------  Configuración de moneda - Currency Settings  ----------*/
	const COIN_SYMBOL="$";
	const COIN_NAME="USD";
	const COIN_DECIMALS="2";
	const COIN_SEPARATOR_THOUSAND=",";
	const COIN_SEPARATOR_DECIMAL=".";


	/*----------  Tipos de documentos  ----------*/
	const DOCUMENTS_USERS=["DNI","Cedula","DUI","Licencia","Pasaporte","Otro"];
	const DOCUMENTS_COMPANY=["DNI","Cedula","RUT","NIT","RUC","Otro"];


	/*----------  Tipos de unidades de productos - Types of product units ----------*/
	const PRODUTS_UNITS=["Unidad","Libra","Kilogramo","Caja","Paquete","Lata","Galon","Botella","Tira","Sobre","Bolsa","Saco","Tarjeta","Otro"];


	/*----------  Marcador de campos obligatorios  ----------*/
	const FIELD_OBLIGATORY='&nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;';


	/*----------  Configuración de codigos de barras - Bar code settings

		BARCODE_FORMAT -> CODE128 | CODE39 | EAN | EAN-13 | EAN-8 | EAN-5 | EAN-2 | UPC | ITF | ITF-14 | MSI | MSI10 | MSI11 | MSI1010 | MSI1110 | Pharmacode

		BARCODE_TEXT_ALIGN -> center | left | right

		BARCODE_TEXT_POSITION -> top | bottom

	----------*/

	const BARCODE_FORMAT="CODE128";
	const BARCODE_TEXT_ALIGN="center";
	const BARCODE_TEXT_POSITION="bottom";


	/*
		Configuración de zona horaria de tu país, para más información visita - Time zone configuration of your country, for more information visit
		
		http://php.net/manual/es/function.date-default-timezone-set.php
		http://php.net/manual/es/timezones.php
	*/