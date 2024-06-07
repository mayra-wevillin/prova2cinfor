<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alteração de Cadastro</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php
include ("conexao.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$endereço = $_POST['endereço'];
$telefone= $_POST['telefone'];
$email = $_POST['email'];
$data = $_POST['data'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


$consulta = "UPDATE usuario set nome = '$nome', endereço = '$endereço', telefone = '$telefone' , data = '$data',  email = '$email', senha = '$senha'
WHERE id = $id";


if ($conexao = mysqli_query($conexao, $consulta)) {
    echo "Alterado com sucesso";
} else {
    echo "Erro ao fazer a alteração" . mysqli_connect_error($conexao);
}
?>
  <div class="container">
    <div class="coluna">
      
        <hr>
          <a href="index.php" class="btn btn-primary">voltar</a>

      </div>

    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>