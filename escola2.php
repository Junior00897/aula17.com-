<?php require_once 'cabecalho.php' ;?>
<section class="conteudo">
	<?php

	$dianasci=$_POST['dianasci'];
	$dianasci=new DateTime($dianasci);
	$hoje=date('Y-m-d');
	$hoje=new DateTime($hoje);
	$idade=$hoje->diff($dianasci)->y;

	if ($idade<6) {
		echo "<p>Você não pode fazer aula</p>";
	}else if ($idade>=6&&$idade<=11) {
		echo "<p> Você pode fazer aula Peixinho!</p>";
	}else if ($idade>=12&&$idade<=14) {
		echo "<p>Você pode fazer a aula Peixe!</p>";
	}else if ($idade>=15&&$idade<=17) {
		echo "<p>Você pode fazer a aula Carpa!</p>";
	}else if ($idade>=18&&$idade<=24) {
		echo "<p>Você pode fazer a aula Tubarão!</p>";
	}else{
		echo "<p>Você pode fazer a aula específica!</p>";
	}
		echo "<div id='links'><a href='escola.php' class='link'>Tentar Outra</a></div>";
	?>
</section>
</body>
</html>