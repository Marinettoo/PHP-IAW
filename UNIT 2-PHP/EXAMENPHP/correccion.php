<?php

$doctors = [
    ["name"=>"Antonio Segura", "Specialization"=>"Otorrino", "visitsperday"=>[6, 8, 7, 6, 9, 12, 5, 3, 7, 2, 1]],
    ["name"=>"Juan Jimenez", "Specialization"=>"Pediatra","visitsperday"=>[8, 4, 6, 8, 10, 12, 5, 4, 4, 5, 20]],
    ["name"=>"Miguel Perez", "Specialization"=>"Ginecologo","visitsperday"=>[15, 6, 7, 6, 8, 9, 8, 10, 9, 8, 20]],
    ["name"=>"Laura Ramirez", "Specialization"=>"Nutricionista","visitsperday"=>[40, 30, 9, 34, 15, 19, 28, 10, 9, 28, 10]]
];

/* Función para formatear el nombre */
function formatonombre(string $name, string $specialization){
    $name_separado = explode(" ", $name);
    $inicial1 = substr($name_separado[0], 0, 1);
    $inicial2 = substr($name_separado[1], 0, 1);
    return ($inicial1 . "." . $inicial2 . " (" . $specialization . ")");
}

echo "<table>";
echo "<tr><th>Doctor</th><th>Min_day</th><th>Max_day</th><th>Min_date</th><th>Max_date</th></tr>";

foreach ($doctors as $doctor){
    $name = $doctor["name"];
    $specialization = $doctor["Specialization"];
    $nombre_correcto = formatonombre($name, $specialization);

    $visits = $doctor["visitsperday"];
    $minDay = min($visits);
    $maxDay = max($visits);

    $mindate = 0;
    $maxdate = 0;

    // Buscar el índice del día con el valor mínimo y máximo
    for ($i = 0; $i < count($visits); $i++) {
        if ($visits[$i] == $minDay) {
            $mindate = $i;
            break; // salir del bucle al encontrar el primero
        }
    }

    for ($i = 0; $i < count($visits); $i++) {
        if ($visits[$i] == $maxDay) {
            $maxdate = $i;
            break;
        }
    }

    echo "<tr>";
        echo "<td>$nombre_correcto</td>";
        echo "<td>$minDay</td>";
        echo "<td>$maxDay</td>";
        echo "<td>$mindate</td>";
        echo "<td>$maxdate</td>";
    echo "</tr>";
}

echo "</table>";

?>
