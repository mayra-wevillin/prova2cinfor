<?php 


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