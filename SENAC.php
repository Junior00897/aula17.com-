<?php require_once 'cabecalho.php' ;?>
<form action="SENAC2.php" method="GET">
	<h1>Compartivo de Instuições de Ensino</h1>
	<p>Digite a instituição de Ensino</p>
	<p><input type="text" name="instituicao" size="70" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
 	<p><input type="submit" name="botao" value="Enviar"></p>



</form>
</body>
</html>