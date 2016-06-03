<!DOCTYPE html>
<html lang="pt-br">
	
<head>
	<meta charset="utf-8">
</head>

<body>
<?php
	echo "<h1>Os dados informados são:<h1>";
	$nome = $_POST["txtNome"];
	$arquivo = $_FILES["txtFoto"];
	$ender = $_POST["txtEndereco"];
	$cpf = $_POST["txtCPF"];
	$estado = $_POST["listEstados"];
	$dtNasc = $_POST["txtData"];
	$sexo = $_POST["sexo"];
	if(isset($_POST["checkCinema"]))
	$cinema = true;
	else
	$cinema = false;
	if(isset($_POST["checkMusica"]))
	$musica = true;
	else
	$musica = false;
	if(isset($_POST["checkInfo"]))
	$info = true;
	else
	$info = false;
	$login = $_POST["txtLogin"];
	$senha1 = $_POST["txtSenha1"];
	$senha2 = $_POST["txtSenha2"];

	$camposOK = true;

	if($nome == ""){
	echo "Nome incorreto <br>";
	$camposOK = false;
	}
	if($ender == ""){
	echo "Endereço incorreto <br>";
	$camposOK = false;
	}
	if($senha1 != $senha2){
	echo "Senha não correspondente";
	$camposOK = false;
	}
 	$dia = substr($dtNasc,0,2);
	$mes = substr($dtNasc,3,2);
	$ano = substr($dtNasc,6,4);
	

$var= true;
$cpf = ereg_replace('[^0-9]', '', $cpf);
$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
if (strlen($cpf) != 11) {
        $var=false;
    }
else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf== '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf== '99999999999') {
        $var = false;}
else{
for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                $camposOK=false;
				echo "Informe um cpf válido.<br>"  ;         
 }
        }
 
        $var= true;
    }

	if($arquivo['error']!= 0 || $arquivo['size'] == 0){
		echo "Erro no envio do arquivo <br>";
		$camposOK = false;
	}
	if($arquivo['size']>10000000){
		echo "Tamanho maior que o permitido <br>";
		$camposOK = false;
	}
	if(($arquivo['type'] != "image/gif") &&
	($arquivo['type'] != "image/jpeg") &&
	($arquivo['type'] != "image/png") &&
	($arquivo['type'] != "image/bmp") &&
	($arquivo['type'] != "image/jpg")){
		echo "Tipo de arquivo não permitido";
		$camposOK = false;
	}
	$file_src = '../tmp'.$_FILES['txtFoto']['name'];
	if(!move_uploaded_file($_FILES['txtFoto']['tmp_name'],$file_src)){
		echo "Erro ao mover o arquivo <br>";
		$camposOK = false;
	}
	


		//Aqui completar ?????
	if($camposOK){
	echo "<table border='0' cellpadding='5'>";
	echo "<tr><td><img height='120' width='120' src='$file_src'></td></tr> ";
	echo "<tr><td>NOME:</td><td><b>$nome</b></td></tr>";
	echo "<tr><td>Endereço:</td><td><b>$ender</b></td></tr>";
	echo "<tr><td>CPF:</td><td><b>$cpf</b></td></tr>";
	echo "<tr><td>ESTADO:</td><td><b>$estado</b></td></tr>";
	echo "<tr><td>DATA DE NASCIMENTO:</td><td><b>$dtNasc</b></td></tr>";
	echo "<tr><td>SEXO:</td><td><b>$sexo</b></td></tr>";
	echo "<tr><td>LOGIN:</td><td><b>$login</b></td></tr>";
	echo "<tr><td>SENHA:</td><td><b>$senha1</b></td></tr>";
	echo "<tr><td>Areas de interesse:</td><td><b>";
	if($cinema)
	echo"Cinema <br>";
	if($musica)
	echo"Musica <br>";
	if($info)
	echo"Info <br>";
	echo"</b></td></tr></table>";
	
}                                             





