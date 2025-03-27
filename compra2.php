<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
<?php
	$preco=$_GET['preco'];
	$quantidade=$_GET['quantidade']; 
	$total=$preco*$quantidade;
	$preco=number_format($preco,2,',','.');
	$total=number_format($total,2,',','.');
	echo "<p>$quantidade unidades, 
	a R$ $preco cada, ficam total 
	R$ $total</p>";
	echo "<p><a href='compra.php' class='link'>Novo Cálculo?</a></p>";


?>	
</section>
</body>
</html>