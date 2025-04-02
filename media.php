<?php require_once 'cabecalho.php' ;?>
<form action="media.php" method="GET">
	<h1>Média</h1>
	<p>Digite o início:</p>
	<p><input type="number" name="início" step="1" required></p>
	<p>Digite o fim:</p>
	<p><input type="number" name="fim" step="1" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
<?php
if (isset($_GET['botao'])) { 
	echo "<section class='conteudo'>";
	$inicio=$_GET['início'];
	$fim=$_GET['fim'];
	$soma=0;
	if ($inicio<$fim) {
		for ($contador=$inicio; $contador<=$fim ; $contador++) { 
			$soma=$soma+$contador;
		}
	}else if ($inicio>$fim){
		for ($contador=$inicio; $contador>=$fim ; $contador--){
			$soma=$soma+$contador;
		}
	}

	$media=$soma/($contador-1);
	echo "<p>Media é $media</p>";
	echo "</section>";
}


?>
</body>
</html>