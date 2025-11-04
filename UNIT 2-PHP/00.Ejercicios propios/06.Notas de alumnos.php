<?php
/*Tienes un array `$students_data` con los nombres y las notas (del 1 al 10) de tres alumnos. La nota final se calcula con el siguiente peso:

- **Proyecto:** 50%
- **Actividad:** 15%
- **Examen:** 35%
1. Recorre el array `$students_data` con un `foreach`.
2. Dentro del bucle, **calcula la nota final** ponderada para cada alumno.
3. Añade una nueva clave-valor (`"final_score"`) al array interno del alumno con la nota final calculada.
4. Imprime el nombre del alumno, su nota final y si ha **aprobado** (nota final $\ge 5$) o **suspendido** (nota final $< 5$).*/

$students_data = [
    ["name" => "Paco", "proyect" => 6, "activity" => 7, "Examen" => 4],
    ["name" => "Mario", "proyect" => 5, "activity" => 7, "Examen" => 8],
    ["name" => "Luz", "proyect" => 8, "activity" => 5, "Examen" => 6],
];

foreach ($students_data as $alumno){
    $nota_final = $alumno["proyect"]*0.5 + $alumno["activity"]*0.15 + $alumno["Examen"]*0.35. " ";
    $alumno["final_score"] = $nota_final;
    
    echo $alumno["name"]. " tiene una nota de ". $nota_final;

    if ($nota_final >= 5){
        echo ' . Ha aprobado ';
    } else{
        echo ' . Ha suspendido ';
    }
};

?>
