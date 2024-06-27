<?php
// Base de datos con usuarios y contraseñas
$users = array(
    "Einer Sanchez" => "einer123",
    "Anyi Hortua" => "anyi123",
    "Oscar Ortega" => "oscar123",
    "Luisa Campos" => "luisa123",
    "Mayer Manjarrez" => "mayer23"
);
// se solicita al usuario que ingrese su usuario y contraseña
echo "Ingrese su usuario: ";
$usuario = readline();

echo "Ingrese su contraseña: ";
$password = readline();

// Verificamos si el usuario suministrado existe
if (array_key_exists($usuario, $users)) {
    $mensaje = match (true) {
        $password == $users[$usuario] => "¡Bienvenid@ a la huerta ecologica $usuario!",
        default => "Contraseña incorrecta",
    };
    echo "$mensaje \n";
}

//registro de personal 
echo "REGISTRO DE PERSONAL\n";

//damos opcion para cuantas personas va a registrar
$respuesta1 = readline("¿Desea registrar nuevos empleados? (S/N) :");
if (strtoupper($respuesta1) == "S") {
    $numeroEmpleados = intval(readline("¿Cuantos empleados desea registrar? :"));
    $empleados = array(); // Inicializamos el array de empleados
    for ($i = 0; $i < $numeroEmpleados; $i++) {
        $nombre = readline("Nombre: ");
        $dni = intval(readline("DNI: "));
        $genero = readline("Genero  (M / F):");
        $edad = intval(readline("Edad : "));
        $estatura = floatval(readline("Estatura (m): "));
        $peso = floatval(readline("Peso (kg): "));
        $fumador = readline("¿Fuma? (S/N) :");

        $empleados[] = ['nombre' => $nombre, 'dni' => $dni, 'genero' => $genero, 'edad' => $edad, 'estatura' => $estatura, 'peso' => $peso, 'fumador' => $fumador];
    }
} else {
    echo "Adios";
}

$buscar = readline("Ingrese nombre o DNI, de empleado a buscar: ");
foreach ($empleados as $empleado) {
    if ($empleado['nombre'] == $buscar || $empleado['dni'] == $buscar) {
        echo "EMPLEADO ENCONTRADO:\n";
        echo "Edad: " . $empleado['edad'] . "\n";
        echo "Genero: " . $empleado['genero'] . "\n";
        break;
    }
}
?>