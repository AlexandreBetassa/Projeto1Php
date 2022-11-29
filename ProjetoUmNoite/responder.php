<?php
$titulo = "Responder";
include "./conexao.php";
include "./cabecalho.php";

$query = "select * from questoes order by rand() limit 3";
$resultado = mysqli_query($conexao, $query);
if (!empty($_POST["resposta"])) {
?>
    <div class="alert alert-danger" role="alert">
        Responda todas as questões
    </div>
<?php
}

?>
<div class="container" style="background-color: white; width:fit-content; border-radius: 20px">
    <form action="./respostas.php" method="post">

        <?php
        while ($linha = mysqli_fetch_array($resultado)) {
            if (!empty($linha["pergunta"]) && !empty($linha["correta"])) {
        ?>
                <div class="container d-flex justify-content-center mt-4">
                    <div class="card border-dark" style="width: 70rem;">
                        <div class="card-header">
                            <h5><?php echo $linha["pergunta"]; ?></h5>
                        </div>
                        <div class="card-body text-dark">
                            <input class="form-check-input" type="radio" name=<?php echo $linha["id"] ?> value="a" id="resposta" /> - <?php echo $linha["a"]; ?><br>
                            <input class="form-check-input" type="radio" name=<?php echo $linha["id"] ?> value="b" id="resposta" /> - <?php echo $linha["b"]; ?><br>
                            <input class="form-check-input" type="radio" name=<?php echo $linha["id"] ?> value="c" id="resposta" /> - <?php echo $linha["c"]; ?><br>
                            <input class="form-check-input" type="radio" name=<?php echo $linha["id"] ?> value="d" id="resposta" /> - <?php echo $linha["d"]; ?><br>
                            <input class="form-check-input" type="radio" name=<?php echo $linha["id"] ?> value="e" id="resposta" /> - <?php echo $linha["e"]; ?><br>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <div class="text-center mb-3 mt-3">
            <button type="submit" class="btn btn-primary textBtn">Enviar Questionário</button>
        </div>
    </form>
</div>
<?php
include "./rodape.php";
?>