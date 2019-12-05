<?php
	include 'db.php';

	$sql = "SELECT * FROM cliente ORDER BY  id";
	$con = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Lista de Clientes</title>
  </head>
  <body>
    
		<h1>Lista de Clientes</h1>
		<hr>
		<table border="3" width="100%">
			<tr>
				<td>id</td>
				<td>Nome</td>
				<td>Rua</td>
				<td>Número</td>
				<td>Bairro</td>
				<td>Cidade</td>
				<td>Estado</td>
				<td>Complemento</td>
				<td>Fone</td>
				<td>CPF</td>
				<td>E-mail</td>
				<td>Deletar</td>
				<td>Editar</td>
			</tr>
		<?php while($dados = mysqli_fetch_assoc($con)) { ?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['rua']; ?></td>
					<td><?php echo $dados['numero']; ?></td>
					<td><?php echo $dados['bairro']; ?></td>
					<td><?php echo $dados['cidade']; ?></td>
					<td><?php echo $dados['estado']; ?></td>
					<td><?php echo $dados['complemento']; ?></td>
					<td><?php echo $dados['fone']; ?></td>
					<td><?php echo $dados['cpf']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><center><a href="del.php?id=<?php echo $dados['id'] ?>"><input type="submit" value="x"></a></center></td>
					<td><center><a href="atualizar.php?id=<?php echo $dados['id'] ?>"><input type="submit" value="editar"></a></center></td>

				</tr>
				
		<?php } ?>
		</table>

	<a href="../index.php"><input type="submit" value="voltar"></a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>