<?php require_once 'cabecalho.php' ;?>
<section class="conteudo">
<?php
	$instituicao=$_POST['instituicao'];
	//if ($instituicao=="SENAC"||$instituicao=="senac") {
	if (strtolower($instituicao)=="senac") {
		echo "<p>Parabéns! Boa Escolha!!</p>";// code...
	}else{
		echo "<p>meh melhor partir para o SENAC!</p>";
	}
	echo "<div id='links'><a href='SENAC.php' class='link'>Voltar</a></div>";




?>


</section>
</body>
</hrtml>