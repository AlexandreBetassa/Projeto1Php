<?php
$titulo = "Respostas";
include "./conexao.php";
include "./cabecalho.php";

if (isset($_POST) && !empty($_POST)) {
    $resultado = $_POST;
}
for ($i = 0; $i < isset($resultado[$i]); $i++) {
    $id = $resultado[$i]["id"];
    echo $resultado[$i]["id"];
}
$query = "select * from questoes where id = $id";
$resultado = mysqli_query($conexao, $query);

?>
<div class="container" style="background-color: white; width:fit-content; border-radius: 20px">
    <form action="./responder.php" method="post">
        <div class="text-center mb-3 mt-3">
            <button type="submit" class="btn btn-primary textBtn">Enviar Questionário</button>
        </div>
        <?php
        while ($linha = print_r($resultado)) {
        ?>
            <div class="container d-flex justify-content-center">
                <div class="card border-dark mb-3" style="width: 70rem;">
                    <div class="card-header">
                        <h5><?php echo $linha["pergunta"]; ?></h5>
                    </div>
                    <div class="card-body text-dark">
                        <input class="form-check-input" type="radio" name="base" value="A" id="A" /> - <?php echo $linha["A"]; ?><br>
                        <input class="form-check-input" type="radio" name="base" value="B" id="B" /> - <?php echo $linha["B"]; ?><br>
                        <input class="form-check-input" type="radio" name="base" value="C" id="C" /> - <?php echo $linha["C"]; ?><br>
                        <input class="form-check-input" type="radio" name="base" value="D" id="D" /> - <?php echo $linha["D"]; ?><br>
                        <input class="form-check-input" type="radio" name="base" value="E" id="E" /> - <?php echo $linha["E"]; ?><br>
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