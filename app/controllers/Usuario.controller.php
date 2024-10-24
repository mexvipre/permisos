<?php

require_once "../models/Usuario.php";

$usuario = new Usuario();
header('Content-Type: application/json');

// Verificar si se está realizando una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['operation']) && $_POST['operation'] == 'login') {
        // Obtener datos del origen (VISTA)
        $nomuser = isset($_POST['nomuser']) ? $usuario->limpiarCadena($_POST['nomuser']) : '';
        $passuser = isset($_POST['passuser']) ? $_POST['passuser'] : '';

        // Arreglo para comunicar el estado del inicio de sesión
        $statusLogin = [
            "esCorrecto" => false,
            "mensaje" => ""
        ];

        // Intentar obtener el registro del usuario
        $registro = $usuario->login(["nomuser" => $nomuser]);

        // Comprobar si existe el usuario
        if (count($registro) == 0) {
            // No existe el usuario
            $statusLogin["mensaje"] = "Usuario no existe";
        } else {
            // El usuario existe, verificar la contraseña
            $claveEncriptada = $registro[0]['passuser'];

            if (password_verify($passuser, $claveEncriptada)) {
                // La contraseña es correcta
                $statusLogin["esCorrecto"] = true;
                $statusLogin["mensaje"] = "Inicio de sesión exitoso.";
            } else {
                // La contraseña es incorrecta
                $statusLogin["mensaje"] = "Contraseña incorrecta.";
            }
        }

        // Devolver el estado de inicio de sesión como JSON
        echo json_encode($statusLogin);
    } else {
        // Manejar operación no válida
        echo json_encode(["error" => "Operación no válida."]);
    }
} else {
    // Manejar caso de método no permitido
    echo json_encode(["error" => "Método no permitido."]);
}
