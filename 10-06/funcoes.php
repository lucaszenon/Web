<?php
	//conecta com o mysql usando PDO
	function db_connect(){
		$PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		return $PDO;		
	}

	//converte datas entre padroes ISO e brasileiro
	function dateConvert($date){
		if(!strstr($date, '/')){
			//Está no formato iso e será para brasileiro
			sscanf($date, '%d-%d-%d', $y, $m, $d);
		return  sprintf('%02d/%02d/%04d', $d, $m, $y);
		}
		else{
		//$date está no formato brasileiro e será convertida
		sscanf($date, '%d/%d/%d', $d, $m, $y);
		return sprintf('%04d-%02d-%02d', $y, $m, $d);
		}
	return false;
	}




?>





