<?php require_once 'cabecalho.php'; ?>
<form action="compra2.php" method="GET">
	<h1>Compra de Produtos</h1>
	<p>Digite o preço unitário:</p>
	<p><input type="number" name="preco" step="0.01" min="0.01" 
		max="1000.00" required></p>
	<p>Digite a quantidade:</p>
	<p><input type="number" name="quantidade" step="1" min="1" max="99" required></p>
	<p><input type="submit" name="botao" value="Comprar"></p>
</form>
</body>
</html>