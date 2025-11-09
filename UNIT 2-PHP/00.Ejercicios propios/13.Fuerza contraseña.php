<?php /* Crea una función llamada analizar_password($password) que reciba una contraseña (string) y devuelva un nivel de seguridad (string) basado en las siguientes reglas (debe cumplir todas las de un nivel para alcanzarlo): Nivel de Seguridad,Requisitos (Mínimos) Bajo,Mínimo 8 caracteres de longitud. Medio,Mínimo 10 caracteres de longitud Y la contraseña NO debe contener la palabra "1234" ni "pass" (sin importar mayúsculas/minúsculas). Alto,Mínimo 12 caracteres de longitud Y debe comenzar con la letra "A" (mayúscula) Y la contraseña NO debe contener la palabra "password" (sin importar mayúsculas/minúsculas). */

function analizar_password($password) :string{
    $password_minusc = strtolower($password);
    if ( strlen($password) >= 12 && substr($password, 0,1 )=="A" && strpos($password_minusc, "password")==false){
        return "Contraseña de alto nivel";
    }
    elseif (strlen($password) >= 10 && strpos($password_minusc, "1234") == false && strpos($password_minusc, "pass")==false){
        return "Contraseña de nivel medio";
    }
    elseif (strlen($password) >= 8){
        return "Contraseña de nivel bajo";
    }
    else{
        return "La contraseña no reune los requisitos minimos";
    }

}

$password = "09wew0";
echo analizar_password($password);





?>