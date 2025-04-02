<?php require_once 'cabecalho.php' ;?>
<form action="escola2.php" method="POST">
	<h1>Escola de Natação</h1>
	<p><input type="date" name="dianasci" min="1930-01-01" max="<?= date('Y-m-d')?>" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>
