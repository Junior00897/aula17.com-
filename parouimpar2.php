<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
<?php
$numero=$_GET['numero'];
if($numero%2==0){
	echo "<p>$numero é Par!</p>";
}else{
	echo "<p>$numero é Ímpar!</p>";
}
echo "<div id='links'><a href='parouimpar.php' class='link'>Novo Cálculo?</a></div>";
?>
</section>
</body>
</html>