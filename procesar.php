<?php 

$carpeta = "logs";
$archivo = $carpeta . "/registro.txt";

if (!file_exists($carpeta)) {
    mkdir($carpeta,0777);   //aca le pongo un 0777 que otorga todos los permisos;
}

$camposObligatorios = ["usuario", "password", "fecha_nacimiento", "direccion", "email", "telefono"];

$datos = [];
foreach ($camposObligatorios as $campo) {
    $datos[$campo] = isset($_POST[$campo]) ? trim($_POST[$campo]) : "";
}

$faltantes = [];
foreach ($datos as $campo => $valor) {
    if ($valor === "") {
        $faltantes[] = $campo;
    }
}

$fecha = date("Y-m-d H:i:s");

if (!empty($faltantes)) {
    $mensaje = "[$fecha] Usuario: {$datos['usuario']} - Faltan los campos: " . implode(", ", $faltantes) . "\n";
} else {
    $mensaje = "[$fecha] Usuario: {$datos['usuario']} - Formulario completado correctamente\n";
};

file_put_contents($archivo, $mensaje, FILE_APPEND);

print_r($datos);

?>