<?php
$titulo = "Cadastro";
include "./cabecalho.php";
include "./conexao.php";
?>
<div class="container-fluid text-center d-flex mb-5 mt-1 col-12" style="width: 70rm;">
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
                <input type="radio" name="correta" value="D" />
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