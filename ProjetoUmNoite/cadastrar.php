<?php
$titulo = "Cadastro";
include "./cabecalho.php";
include "./conexao.php";

if (isset($_POST) && !empty($_POST) && !empty($_POST["pergunta"]) && !empty($_POST["correta"])) {
    $pergunta = $_POST["pergunta"];
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];
    $d = $_POST["D"];
    $e = $_POST["E"];
    $correta = $_POST["correta"];

    $query = "insert into questoes (pergunta, a, b, c, d, e, correta) values('$pergunta','$a', '$b', '$c', '$d', '$e', '$correta')";
    $resultado = mysqli_query($conexao, $query);
}
?>
<div class="container-fluid text-center mb-5 mt-1 col-12">
    <div class="container text-center border p-3 col-6 formColor">
        <div class="container">
            <form action="./index.php" method="post" class="text">
                <label for="" class="form-label">INFORME A PERGUNTA</label> <br>
                <textarea name="pergunta" class="form-control"></textarea>

                <label for="" class="form-label mt-2">INFORME A RESPOSTA CORRETA</label> <br>

                <label for="" class="form-label mt-2">A)</label>
                <input type="radio" name="correta" value="A" />
                <input type="text" name="A" />

                <br><br>

                <label for="" class="form-label">B)</label>
                <input type="radio" name="correta" value="B" />
                <input type="text" name="B" />

                <br><br>

                <label for="" class="form-label">C)</label>
                <input type="radio" name="correta" value="C" />
                <input type="text" name="C" />

                <br><br>

                <label for="" class="form-label">D)</label>
                <input type="radio" name="correta" value="E" />
                <input type="text" name="D" />

                <br><br>

                <label for="" class="form-label">E)</label>
                <input type="radio" name="correta" value="E" />
                <input type="text" name="E" />

                <br><br>
                <div>
                    <button type="submit" class="btn btn-primary textBtn">Salvar Questão</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "./rodape.php" ?>