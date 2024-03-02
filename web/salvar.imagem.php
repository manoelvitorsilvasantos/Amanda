<?php
    include('permission.php');
    include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Eyes-V</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href="./assets/img/logo.jpg" rel="shortcut icon" type="image/jpeg">
</head>
<body>
    <div class="link">
        <a href="dashboard.php">Voltar ao Menu.</a>
    </div>
    <div class="form">
        <form action="upload.php" method="POST" enctype="multipart/form-data" class="formlogin">
            <div class="form-header">
                <h3>Registrar Foto</h3>
            </div>
            <br>
            <label for="email">E-mail do Aluno</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Digite o E-mail do Aluno"
                required
            >
            <label for="imagens">Imagem 1</label>
            <input
                type="file"
                id="imagens"
                name="imagens[]"
                multiple
                required
            >
            <br>
            <div class="btn">
                <button type="submit" name="login" id="login">Salvar</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="./assets/js/mascara.js">
        var nome = document.getElementById("nome");
        nome.addEventListener("input", function(){
            this.value = this.value.toUpperCase();
        });
    </script>
</body>
</html>
