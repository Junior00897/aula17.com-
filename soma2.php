<?php require_once 'cabecalho.php';?>
<section class="conteudo">
<?php 
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];
	$soma=$numero1+$numero2;
	echo "<p>$numero1 + $numero2 = $soma</p>";
	echo "<div id='links'><a href='soma.php' class='link'>Novo Cálculo?</a></div>";
?>
</section>
</body>
</html>