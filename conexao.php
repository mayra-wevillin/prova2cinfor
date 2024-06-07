<?php 
$servidor="localhost";
$usuario="root";
$senha="";
$banco="prova";
 
if($conexao=mysqli_connect($servidor,$usuario,$senha,$banco)){
    //echo "conexao realizada com sucesso";

} 
else{
    echo"erro";
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