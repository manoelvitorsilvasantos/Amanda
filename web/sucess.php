<?php
// Verifica se a sessão está vazia (usuário não autenticado)
include('permission.php');

$title = null;
$message = null;

if (!empty($_GET['title']) && (!empty($_GET['msg']))) {
	$title = $_GET['title'];
	$message = $_GET['msg'];
} else {
	header("location: dashboard.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href="./assets/img/logo.jpg" rel="shortcut icon" type="image/jpeg">
</head>
<body>
    <div class="link">
        <a href="dashboard.php">Voltar ao Menu.</a>
    </div>
    <div class="form-alert">
        <h3><?php echo $title; ?></h3>
        <p><?php echo $message; ?></p>
    </div>
</body>
</html>
