<?php
$titulo = "Index";
include "./cabecalho.php";
include "./conexao.php";
?>

<?php
if (isset($_POST) && !empty($_POST["pergunta"]) && !empty($_POST["correta"])) {
    $pergunta = $_POST["pergunta"];
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];
    $d = $_POST["D"];
    $e = $_POST["E"];
    $correta = $_POST["correta"];

    $query = "insert into questoes (pergunta, a, b, c, d, e, correta) values('$pergunta','$a', '$b', '$c', '$d', '$e', '$correta')";
    $resultado = mysqli_query($conexao, $query);
?>
    <div class="alert alert-success" role="alert">
        Cadastrada com sucesso!!
    </div>
<?php
} else {
?>
    <div class="alert alert-danger" role="alert">
        Preencha todos os campos
    </div>
<?php
}
?>

<?php
include "./rodape.php";

?>