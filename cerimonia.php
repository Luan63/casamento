<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$conexao = mysqli_connect ("mysql.hostinger.com.br","u963238390_luan","WAVIIj4r","u963238390_day");
if(mysqli_connect_errno()){
    echo "falha ao conectar: ". mysqli_connect_error();
    die();
}
?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$sql ="insert into confirmacao (nome,email,tel) 
values ('$nome','$email','$tel')";
$resultado = mysqli_query($conexao, $sql);
if($resultado)
header("Location: cerimonia.html");
else 
    echo "erro ao inserir";
mysqli_close($conexao);
?>
</body>
</html>