<?php
$titulo = "Responder";
include "./conexao.php";
include "./cabecalho.php";

$query = "select * from questoes order by rand() limit 10";
$resultado = mysqli_query($conexao, $query);
?>
<div class="container" style="background-color: white; width:fit-content; border-radius: 20px">
    <form action="./responder.php" method="post">
        <div class="text-center mb-3 mt-3">
            <button type="submit" class="btn btn-primary textBtn">Enviar Questionário</button>
        </div>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) {
        ?>
            <div class="container d-flex justify-content-center">
                <div class="card border-dark mb-3" style="width: 70rem;">
                    <div class="card-header">
                        <h5><?php echo $linha["pergunta"]; ?></h5>
                    </div>
                    <div class="card-body text-dark">
                        <input class="form-check-input" type="radio" name="a" id="a" /> - <?php echo $linha["a"]; ?><br>
                        <input class="form-check-input" type="radio" name="b" id="b" /> - <?php echo $linha["b"]; ?><br>
                        <input class="form-check-input" type="radio" name="c" id="c" /> - <?php echo $linha["c"]; ?><br>
                        <input class="form-check-input" type="radio" name="d" id="d" /> - <?php echo $linha["d"]; ?><br>
                        <input class="form-check-input" type="radio" name="e" id="e" /> - <?php echo $linha["e"]; ?><br>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </form>
</div>
<?php
include "./rodape.php";
?>