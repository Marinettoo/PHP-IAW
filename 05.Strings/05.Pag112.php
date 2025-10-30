<?php
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
    ["apellidos" => "Ronaldo Dos Santos Aveiro", "nombre" => "Cristiano", "nota_clase" => 10, "nota_proyecto" => 8, "nota_examen" => 9],
    ["apellidos" => "Messi Cuchitini", "nombre" => "Lionel Andrés", "nota_clase" => 8, "nota_proyecto" => 7, "nota_examen" => 6],
    ["apellidos" => "Junior de Criança", "nombre" => "Neymar", "nota_clase" => 5, "nota_proyecto" => 4, "nota_examen" => 8],
    ["apellidos" => "Pascual Jiménez", "nombre" => "Jorge", "nota_clase" => 6, "nota_proyecto" => 9, "nota_examen" => 6],
    ["apellidos" => "Fayé Ablekaui", "nombre" => "Soulemayne", "nota_clase" => 10, "nota_proyecto" => 10, "nota_examen" => 9],
    ["apellidos" => "Cortés Heredia", "nombre" => "Antoñín", "nota_clase" => 0, "nota_proyecto" => 0, "nota_examen" => 2],
    ["apellidos" => "Falcao Pérez", "nombre" => "Radamel", "nota_clase" => 10, "nota_proyecto" => 10, "nota_examen" => 4],
    ["apellidos" => "Owombo Akiwa", "nombre" => "Boyomo", "nota_clase" => 10, "nota_proyecto" => 5, "nota_examen" => 3],
    ["apellidos" => "Karim Nacer", "nombre" => "Muhammad", "nota_clase" => 7, "nota_proyecto" => 4, "nota_examen" => 4],
    ["apellidos" => "Rodríguez Martínez", "nombre" => "Laura", "nota_clase" => 9, "nota_proyecto" => 8, "nota_examen" => 10],
    ["apellidos" => "González López", "nombre" => "Andrés", "nota_clase" => 5, "nota_proyecto" => 6, "nota_examen" => 7],
    ["apellidos" => "Santos Velasco", "nombre" => "Pedro", "nota_clase" => 3, "nota_proyecto" => 4, "nota_examen" => 6],
    ["apellidos" => "Domínguez Flores", "nombre" => "Sara", "nota_clase" => 8, "nota_proyecto" => 9, "nota_examen" => 9],
    ["apellidos" => "Morales Díaz", "nombre" => "Daniel", "nota_clase" => 4, "nota_proyecto" => 5, "nota_examen" => 5],
    ["apellidos" => "Pérez Marinetto", "nombre" => "Jesús", "nota_clase" => 10, "nota_proyecto" => 10, "nota_examen" => 10],
    ["apellidos" => "Herrera Casanova", "nombre" => "Lucía", "nota_clase" => 9, "nota_proyecto" => 10, "nota_examen" => 8],
    ["apellidos" => "Torres Navarro", "nombre" => "Iván", "nota_clase" => 6, "nota_proyecto" => 7, "nota_examen" => 5],
    ["apellidos" => "García Romero", "nombre" => "Noelia", "nota_clase" => 8, "nota_proyecto" => 9, "nota_examen" => 9],
    ["apellidos" => "Ruiz Ortega", "nombre" => "Adrián", "nota_clase" => 7, "nota_proyecto" => 6, "nota_examen" => 8],
    ["apellidos" => "Delgado Serrano", "nombre" => "Clara", "nota_clase" => 10, "nota_proyecto" => 9, "nota_examen" => 9]
];

echo '<table>';
echo '<tr><th>Nombre</th><th>Nota clase</th><th>Nota Proyecto</th><th>Nota Examen</th><th>Media</th></tr>';


foreach ($alumnos as $alumno) {
    $nombre = nombre($alumno['apellidos'], $alumno['nombre']);
    $media = media($alumno['nota_clase'], $alumno['nota_proyecto'], $alumno['nota_examen']);

    echo '<tr>';
    echo "<td>$nombre</td>";
    echo "<td>{$alumno['nota_clase']}</td>";
    echo "<td>{$alumno['nota_proyecto']}</td>";
    echo "<td>{$alumno['nota_examen']}</td>";
    echo "<td>" . round($media, 2) . "</td>";
    echo '</tr>';
}



    







?>