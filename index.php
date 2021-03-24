<?php
header('Content-Type: text/html; charset=utf-8');

function __autoload($class){
	include_once "class/".$class.".class.php";
}

$conn = new Conexao();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>ANDRE LPDZ - Sistema de Votação</title>
    <!-- Scripts -->
    <script src="js/jquery.js"></script>
	<script src="js/default.js?v=1.0"></script>
    <!-- Estilos -->
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/default.css?v=1.0" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	$conn->consultar("SELECT * FROM candidatos");
	
	while($lista = $conn->escrever()){
		echo "<a href='#'>VOTAR</a> - ";
		echo $lista['nome'].' - ';
		echo $lista['descricao'].' - ';
		echo $lista['votos'].'<hr>';
	}
	
	?>
</body>
</html>
