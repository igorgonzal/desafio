<script type="text/javascript">
	function sair(){
		window.location.assign("login.php");
	}
</script>

<?php
	include_once "conecta_db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de atendimentos</title>
</head>
<body>

<h1>Lista de atendimentos</h1><br>

<a href="cadastro.php"> Cadastro </a><br>

<table border="1">	
	<tr>
		<th>ID</th>
		<th>Data de atendimento</th>
		<th>Tipo de atendimento</th>
		<th>Nome do cliente</th>
		<th>Tecnico</th>
		<th colspan="4">Acão</th>
	</tr>

	<?php 
		/*$sql = "SELECT a.id, a.data, a.atendimento, a.cliente, a.usuario_id, u.login FROM atendimento a join usuario u on a.usuario_id = u.id";
		$retorno = $con->query($sql);
		while ($registo = $retorno->fetch_assoc()){	

			echo "<tr>
				<td> $registo[id] </td>
				<td> $registo[data] </td>
				<td> $registo[atendimento] </td>
				<td> $registo[cliente] </td>
				<td> $registo[login] </td>
				<td> <a href='excluir.php?id=$registo[id]'> excluir </a> <td>
				<td> <a href='edita.php?id=$registo[id]'> editar </a> <td>
			</tr>" ;
			
		}
		*/
	?>

</table>

<button onclick="sair()" name="Sair" value="Sair">Sair</button>

</body>
</html>