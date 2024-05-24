<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exclusão de Cadastro</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="coluna">
      
        <?php 

        include "conexao.php";
        $id = $_POST['id'];
        $nome = $_POST['nome']; 

      
        $sql = "DELETE  FROM usuario  WHERE id = $id";
        
        
        if($sql = mysqli_query($conexao,$sql)){

            mensagem("$nome Excluido com sucesso!",'success');
        }
        else{
            mensagem("erro ao Ecluir usuario",'danger');
        }
        
        ?>
        <hr>
        <a href="index.php" class="btn btn-primary">voltar</a>

      </div>

    </div> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>