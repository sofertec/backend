<?php
// declaro variables enviadas por el formulario con el metodo post.
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

// verifico que el usuario y la clave sean correcto y si es asi se lo deja acceder.

if ($usuario == "admin" && $clave == 1234) {
    echo "<h1>Bienvenido ".$usuario."</h1>";
}else{
    echo "<h1>Usuario o clave incorrecta</h1>";
}

?>


