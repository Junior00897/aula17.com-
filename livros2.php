<?php require_once 'cabecalho.php' ;?>
<section class="conteudo">
<?php
$autor1=$_GET['autor1'];
$titulo1=$_GET['titulo1'];
$pagina1=$_GET['pagina1'];

$autor2=$_GET['autor2'];
$titulo2=$_GET['titulo2'];
$pagina2=$_GET['pagina2'];


if($pagina1>$pagina2){
 echo "<p>$titulo1, do $autor1 é o maior!";
}else{
	echo "<p>$titulo2, do $autor2 é o maior";
}
echo "<div id='links'><a href='livros.php' class='link'>Novo Teste?</a></div>";

?>
</section>
</body>
</html>