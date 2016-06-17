<?php
	require_once 'init.php';
	// abre a conexão
	$PDO=db_connect();
	/* SQL para contar o total de registros */
	$sql_count = "SELECT COUNT(*) AS total FROM aluno ORDER BY nome ASC";
	// SQL para selecionar os registros
	$sql = " SELECT idaluno, nome, dataNasc, foto FROM aluno ORDER BY nome ASC";
	// conta o total de registros
	$stmt_count=$PDO->prepare($sql_count);
	$stmt_count->execute();
	$total=$stmt_count->fetchColumn();
	// seleciona os registros
	$stmt=$PDO->prepare($sql);
	$stmt->execute();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>Cadastro de Alunos</title>
	</head>
	<body>
		<div class="cabecalho">
			<div id="logo"><img src="images.jpg"></img></div>
			<div id="menus">
			<a href="index.php">HOME</a>
			<a href="cadastroClientes.php">CLIENTES</a>
			<a href="home.html">FORNECEDORES</a>
			<a href="home.html">SOBRE</a></div>
		</div>

	<div class="container">
		<h1>Mueno Enterprise</h1>
		<h3> <p>		Caros amigos, a hegemonia do ambiente político nos obriga à análise das direções preferenciais no sentido do progresso. O empenho em analisar o desafiador cenário globalizado faz parte de um processo de gerenciamento das formas de ação. Assim mesmo, o julgamento imparcial das eventualidades exige a precisão e a definição do sistema de formação de quadros que corresponde às necessidades. </p>

	        <p>		No entanto, não podemos esquecer que a necessidade de renovação processual causa impacto indireto na reavaliação do retorno esperado a longo prazo. A nível organizacional, a consolidação das estruturas prepara-nos para enfrentar situações atípicas decorrentes das posturas dos órgãos dirigentes com relação às suas atribuições. Pensando mais a longo prazo, o desenvolvimento contínuo de distintas formas de atuação assume importantes posições no estabelecimento dos métodos utilizados na avaliação de resultados. O que temos que ter sempre em mente é que a valorização de fatores subjetivos é uma das consequências do investimento em reciclagem técnica. </p>

         <p>		 Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o aumento do diálogo entre os diferentes setores produtivos pode nos levar a considerar a reestruturação das diretrizes de desenvolvimento para o futuro. O incentivo ao avanço tecnológico, assim como a crescente influência da mídia oferece uma interessante oportunidade para verificação dos índices pretendidos. Evidentemente, o entendimento das metas propostas não pode mais se dissociar do fluxo de informações.</p></h3>
	</div>
	 <div class="rodape">
        <h2>MUENO ENTERPRISE &copy; Copyright 2016 -all rights reserved </h2>
      </div>
	</body>
</html>
