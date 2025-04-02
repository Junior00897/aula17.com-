<?php require_once 'cabecalho.php'; ?>
<form action="fatorial.php" method="GET">
    <h1>Fatorial</h1>
    <p>Digite o número:</p>
    <p><input type="number" name="numero" step="1" required></p>
    <p><input type="submit" name="botao" value="Calcular"></p>
</form>

<?php
if (isset($_GET['botao'])) {
    $numero =$_GET['numero'];
    $fatorial = 1;
    echo "<section class='conteudo'>";
    for ($contador=$numero;$contador>=1; $contador--) {
        $fatorial *=$contador;
    }
    echo "<p>O fatorial de $numero é $fatorial.</p>";

    echo "</section>";
}
?>
</body>
</html>
