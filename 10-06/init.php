<?php
	//inclui o arquivo de funções
	require_once 'funcoes.php';
	//Constantes com credenciais de acesso ao BD
	define('DB_HOST'.'localhost');
	define('DB_USER'.'root');
	define('DB_PASS'.'root');
	define('DB_NAME'.'CEFETMG');

	//habilita todas as exibições de erros

	init_set('display_errors',true);
	error_reporting(E_ALL);
	
	date_default_timezone_set('America/Sao_Paulo');
?>
