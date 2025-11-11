<?php
/*
Crea una función llamada buscar_por_nota($alumnos, $nota_minima) que reciba un array de alumnos (similar al que ya usaste en 05.Pag112.php) y una nota mínima (float). La función debe recorrer el array y devolver un nuevo array que solo contenga los nombres (en el formato "Nombre Apellido Apellido") de los alumnos cuya media de notas sea igual o superior a la $nota_minima.

Requisitos:

Reutiliza la lógica para calcular la media: Clase (15%), Proyecto (35%), Examen (50%).

Reutiliza la lógica para formatear el nombre (pasar de "Apellido Apellido, Nombre" a "Nombre Apellido Apellido").

Devuelve el array resultante, no lo imprimas directamente
.*/
$alumnos = [
    ["nombre" => "Ronaldo Dos Santos, Cristiano", "nota_clase" => 10, "nota_proyecto" => 8, "nota_examen" => 9],
    ["nombre" => "Messi Cuchitini, Lionel ", "nota_clase" => 8, "nota_proyecto" => 7, "nota_examen" => 6],
    ["nombre" => "Junior Silva, Neymar", "nota_clase" => 5, "nota_proyecto" => 4, "nota_examen" => 8],
    ["nombre" => "Pascual Medina, Jorge", "nota_clase" => 6, "nota_proyecto" => 9, "nota_examen" => 6],
    ["nombre" => "Fayé Ablekaui, Soulemayne", "nota_clase" => 10, "nota_proyecto" => 10, "nota_examen" => 9],
    ["nombre" => "Cortés Heredia, Antoñín", "nota_clase" => 0, "nota_proyecto" => 0, "nota_examen" => 2],
    ["nombre" => "Falcao García, Radamel", "nota_clase" => 10, "nota_proyecto" => 10, "nota_examen" => 4],
    ["nombre" => "Owombo Akiwa, Boyomo", "nota_clase" => 10, "nota_proyecto" => 5, "nota_examen" => 3],
    ["nombre" => "Karim Nacer, Muhammad", "nota_clase" => 7, "nota_proyecto" => 4, "nota_examen" => 4],
    ["nombre" => "Rodríguez Martínez, Laura", "nota_clase" => 9, "nota_proyecto" => 8, "nota_examen" => 10],
    ["nombre" => "González López, Andrés", "nota_clase" => 5, "nota_proyecto" => 6, "nota_examen" => 7],
    ["nombre" => "Santos Velasco, Pedro", "nota_clase" => 3, "nota_proyecto" => 4, "nota_examen" => 6],
    ["nombre" => "Domínguez Flores, Sara", "nota_clase" => 8, "nota_proyecto" => 9, "nota_examen" => 9],
    ["nombre" => "Morales Díaz, Daniel", "nota_clase" => 4, "nota_proyecto" => 5, "nota_examen" => 5],
    ["nombre" => "Pérez Marinetto, Jesús", "nota_clase" => 10, "nota_proyecto" => 10, "nota_examen" => 10],
    ["nombre" => "Herrera Casanova, Lucía", "nota_clase" => 9, "nota_proyecto" => 10, "nota_examen" => 8],
    ["nombre" => "Torres Navarro, Iván", "nota_clase" => 6, "nota_proyecto" => 7, "nota_examen" => 5],
    ["nombre" => "García Romero, Noelia", "nota_clase" => 8, "nota_proyecto" => 9, "nota_examen" => 9],
    ["nombre" => "Ruiz Ortega, Adrián", "nota_clase" => 7, "nota_proyecto" => 6, "nota_examen" => 8],
    ["nombre" => "Delgado Serrano, Clara", "nota_clase" => 10, "nota_proyecto" => 9, "nota_examen" => 9]
];

function buscar_por_nota($alumnos, $nota_minima): array{
    $resultado=[];
    foreach ($alumnos as $alumno){
        $nota_media = ($alumno["nota_clase"]*0.15)+($alumno["nota_proyecto"]*0.35)+($alumno["nota_examen"]*0.50);

        if ($nota_media >= $nota_minima){
            $partes=explode(",", $alumno["nombre"]);
            $nombreFormateado = $partes[1]. " ". $partes[0];

            $resultado[]=$nombreFormateado;
        }
    };

    return $resultado;
};

print_r (buscar_por_nota($alumnos, 5));
?>
