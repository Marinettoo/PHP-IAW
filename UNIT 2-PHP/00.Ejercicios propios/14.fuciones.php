<?php
/*Define una función llamada mensaje_cumpleanos que acepte dos argumentos: \$nombre y \$edad.*/

$nombre = "amigo";
$edad = 15;

function mensaje_cumpleanos($nombre, $edad): string{
    return ("Felisidade meu ". $nombre. " has cumpliu ". $edad. "  añillos /     ");
}

echo mensaje_cumpleanos("juan", 15);

/*sa la función date("N") para obtener el día de la semana (donde 1=Lunes, 7=Domingo). Almacena el resultado en una variable \$dia_semana.*/

function dia_semana($N): string{
    if ($N == 1){
        return "Lunes";
    }
    elseif ($N == 2){
        return "Martes";
    }
    elseif ($N == 3){
        return "Miercoles";
    }
    elseif ($N == 4){
        return "Jueves";
    }
    elseif ($N == 5){
        return "Viernes";
    }
    elseif ($N == 6){
        return "Sabado";
    }
    elseif ($N == 7){
        return "Domingo";
    }
    else {
        return "ERROR: Pon un numero del 1 - 7";
    }
};

echo dia_semana(4);


?>