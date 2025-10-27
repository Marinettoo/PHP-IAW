<?php
/*Crea una función llamada generate_user_card que acepte un array asociativo como único argumento.

La función debe tomar el array (que representa a un usuario) y retornar un string formateado.

El string retornado debe contener un resumen de la información del usuario.

Llama a la función con el array de ejemplo e imprime el resultado.

Array de Ejemplo: $user_data = ["name" => "Elena", "role" => "Desarrolladora Frontend", "city" => "Barcelona"];

Salida Esperada: "Ficha de Usuario: Elena es una Desarrolladora Frontend, con base en Barcelona."*/

function generate_user_card($user_data = ["name" => "Elena", "role" => "Desarrolladora Frontend", "city" => "Barcelona"]): string {
    $ficha_de_usuario = "ficha de usuario: ". $user_data["name"]. " trabaja como ". $user_data["role"]. " En la ciudad de ". $user_data["city"];

    return $ficha_de_usuario;
}

echo generate_user_card();
?>
