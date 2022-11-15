<?php
$titulo = "Responder";
include "./cabecalho.php";
$query = "select * from questoes order by id desc";
$resultado = mysqli_query($conexao, $query);

while ($linha = mysqli_fetch_array($resultado)) {
?>
    <div style="width:100%; border:1px solid black">
        <h1><?php echo $linha["pergunta"]; ?></h1>
        <h3><?php echo $linha["a"]; ?></h3>
        <h3><?php echo $linha["b"]; ?></h3>
        <h3><?php echo $linha["c"]; ?></h3>
        <h3><?php echo $linha["d"]; ?></h3>
        <h3><?php echo $linha["e"]; ?></h3>
    </div>
<?php
}
?>
<?php
include "./rodape.php";
?>