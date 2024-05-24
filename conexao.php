<?php 
$host ="localhost";
$user="root";
$senha="";
$banco ="aula";

if( $conexao = mysqli_connect($host,$user,$senha,$banco)){
    //echo"conectado com sucesso";
} else{
    echo"erro ao se comunicar com a base de dados";
}

function mensagem($texto,$tipo){
    echo"<div class='alert alert-$tipo' role='alert'>
            $texto
    </div>";
}
function mostrar_data($data){
    $d = explode("-",$data);
    $escreve = $d[2]."/".$d[1]."/" .$d[0];
    return $escreve;

}


?>