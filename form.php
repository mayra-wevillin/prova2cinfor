<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cadastrado</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="coluna">
        <?php 

        include "conexao.php";
        $nome = $_POST['nome']; 
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        
        $sql = "INSERT INTO usuario(nome,endereco,telefone,data,email,senha)
        VALUES('$nome','$endereco','$telefone','$data','$email','$senha')";
        if($sql = mysqli_query($conexao,$sql)){

            mensagem("$nome cadastrado com sucesso!",'success');
        }
        else{
            mensagem("erro ao cadastrar usuario",'danger');
        }
        
        ?>
        <hr>
        <a href="index.php" class="btn btn-primary">voltar</a>

      </div>

    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>