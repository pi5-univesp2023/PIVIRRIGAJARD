<?php
//
$servidor = "piunivesp-nr13.ddns.net:43306";
$usuario = "univesp";
$senha = "Univesp@2021";

$banco = "cadastro";

//

try {

    $conector = mysqli_connect($servidor, $usuario, $senha, $banco);
    echo " conexão com o banco de dados com sucesso !!!!";
} 

catch (\Throwable $th)

{
    echo " Falha na conexão com o banco de dados!" . $th;
}

//

?>