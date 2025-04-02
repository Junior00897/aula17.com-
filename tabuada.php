<?php require_once 'cabecalho.php'; ?>
<form action="tabuada.php" method="GET">
    <h1>Tabuada</h1>
    <p>Digite o número:</p>
    <p><input type="number" name="numero" step="1" required></p>
    <p><input type="submit" name="botao" value="Calcular"></p>
</form>

<?php
if (isset($_GET['botao'])) {
    $numero=$_GET['numero'];
    echo "<section class='conteudo'>";
    echo "<p>Tabuada do $numero </p>";
    for ($contador=1;$contador<=10;$contador++) {
        $resultado=$numero*$contador;
    } 
    echo "<p>$numero x $contador = $resultado</p>";
    
    echo "</section>";
}
?>
</body>
</html>
