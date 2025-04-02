<?php require_once 'cabecalho.php' ;
require_once 'model/Usuario.php';
$usuario=new Usuario();
$usuario->setCorletra($_POST['corletra']);
$usuario->setCorfundo($_POST['corfundo']);
if ($usuario->getCorletra()==$usuario->getCorfundo()){
	echo "<section class='conteudo'>";
	echo "<p>Você escolheu a mesma cor para a letra e fundo!</p>";
	echo "<p>Por favor retorne abaixo e escolha novamente!</p>";
	echo "<div id='links'><a href='perfil.php' class='link'>Retornar</a></div>";
	echo "</section>";

}else{
	echo "<section class='conteudo' style='background-color:".$usuario->getCorfundo().";color:".$usuario->getCorletra()."'>" ;
	$usuario->setNome($_POST['nome']);
	$usuario->setAniversario($_POST['aniversario']);
	echo "<h1>Bem-vindo, " .$usuario->getNome()."!</h1>";
	echo "<p>Seu nascimento foi em ".$usuario->getAniversario()."</p>";
	echo "<div id='links'><a href='perfil.php' class='link';style='color: ".$usuario->getCorletra()."'>Voltar</a></p></div>"; 
	echo "</section>";

}
?>
</body>
</html>