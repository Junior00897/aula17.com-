<?php require_once 'cabecalho.php' ;?>
<form action="livros2.php" method="GET">
	<h1>Comparação de livros</h1>
	<p>Autor1</p>
	<p><input type="text" name="autor1" size="70" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p>Título1</p>
	<p><input type="text" name="titulo1" size="70" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p>Número de páginas</p>
	<p><input type="number" name="pagina1" size="70" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>

	<p>Autor2</p>
	<p><input type="text" name="autor2" size="70" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p>Título2</p>
	<p><input type="text" name="titulo2" size="70" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p>Número de páginas</p>
	<p><input type="number" name="pagina2" size="70" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p><input type="submit" name="botao" value="Descobrir qual é o maior"></p>

</form>
</body>
</html>