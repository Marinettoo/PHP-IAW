<?php
error_reporting(E_ALL);          // Muestra todos los errores y advertencias
ini_set('display_errors', 1);    // Hace que se muestren los errores en el navegador
ini_set('display_startup_errors', 1); 
/*A teacher recorded the marks (integers between 1 and 10) got by 
her 20 students (named like this: Fernández Gil, María) in a 
project, a class activity and an exam. Write a script to deliver a 
table to show the students’ term marks bearing in mind that:
● The students’ names will appear like this: María Fernández Gil. 
(Use a function to get this change)
● The class activity was 15% of the final mark, the project was 35% 
and the exam was 50%.*/


function nombre($apellidos, $nombre): string{
    $nombre_correcto = $nombre." ". $apellidos;

    return $nombre_correcto;
}

function media($nota_clase, $nota_proyecto, $nota_examen): float{
    $media = $nota_clase*0.15 + $nota_proyecto*0.35 + $nota_examen*0.5;

    return $media;
} 



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


echo '<table>';
echo '<tr><th>Nombre</th><th>Nota clase</th><th>Nota Proyecto</th><th>Nota Examen</th><th>Media</th></tr>';


foreach ($alumnos as $alumno) {
    $partes = explode(", ", $alumno["nombre"]);
    $nombre = $partes[1];
    $apellidos = $partes[0];
    $nombre_correcto = $nombre." ". $apellidos." ";
    $media = media($alumno['nota_clase'], $alumno['nota_proyecto'], $alumno['nota_examen']);

    echo '<tr>';
    echo "<td>$nombre_correcto</td>";
    echo "<td>{$alumno['nota_clase']}</td>";
    echo "<td>{$alumno['nota_proyecto']}</td>";
    echo "<td>{$alumno['nota_examen']}</td>";
    echo "<td>". round($media, 2) . "</td>";
    echo '</tr>';
}
?>
