<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro de Alunos</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="jquery.maskedinput.js"></script>
	</head>
	<body>
			<h1>Cadastro de Alunos</h1>
			<p><a href="form-add.php">Adicionar Usuário</a></p>
			<h2>Lista de Alunos</h2>
			<p>Total de usuários: <?php echo $total ?></p>
	<?php if($total > 0): ?>
			<table width="100%" border="1">
				<thead>
				<tr>
					<th>Foto</th>	
					<th>Matrícola</th>
					<th>Nome</th>	
					<th>Data Nascimento</th>
					<th>Ações</th>
				</tr>
				</thead>
				<tbody>
				<?php while($aluno = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
				<tr>
				<?php $caminho = $aluno['foto'];?>
				<td><?php echo "img src='$caminho' width='100' height='100' alt='IMAGEM' />"?>;</td>
				<td><?php echo $aluno['idAluno'] ?></td>
				<td><?php echo $aluno['nome'] ?></td>
					

			
				</tr>
				</tbody>
			</table>
	</body>
</html>
