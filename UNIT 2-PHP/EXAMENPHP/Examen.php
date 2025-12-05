<?php

$doctors = [
    ["name"=>"Antonio Segura", "Specialization"=>"Otorrino", "visitsperday"=>[6, 8, 7, 6, 9, 12, 5, 3, 7, 2, 1]],
    ["name"=>"Juan Jimenez", "Specialization"=>"Pediatra","visitsperday"=>[8, 4, 6, 8, 10, 12, 5, 4, 4, 5, 20]],
    ["name"=>"Miguel Perez", "Specialization"=>"Ginecologo","visitsperday"=>[15, 6, 7, 6, 8, 9, 8, 10, 9, 8, 20]],
    ["name"=>"Laura Ramirez", "Specialization"=>"Nutricionista","visitsperday"=>[40, 30, 9, 34, 15, 19, 28, 10, 9, 28, 10]]

];


/*Funcion para formatear el nombre. Mas tarde la llamaré*/
function formatonombre(string $name, string $specialization){
    $name_separado = explode(" ", $name,);
    $inicial1 = substr($name_separado[0],0,1);
    $inicial2 = substr($name_separado[1],0,1);

    return ($inicial1. ".". $inicial2." "."(".$specialization.")");
};

echo "<table>";
echo "<th> Doctor </th><th> min_day </th><th> max_day </th><th> min_date </th><th> max_date </th>";
foreach ($doctors as $doctor){
    $name = $doctor["name"];
    $specialization = $doctor["Specialization"];
    $nombre_correcto = formatonombre($name, $specialization);
    
    $minDay = min($doctor["visitsperday"]);
    $maxDay = max($doctor["visitsperday"]);

    

    /*Bucle para sacar la fecha con menos pacientes.*/
    for ($doctor["visitsperday"]=0;$doctor["visitsperday"]<=11; $doctor["visitsperday"]++){
        $minnodate = $doctor["visitsperday"];
        $mindate = 0;
        if ($mindate ==! $minDay){
            $minnodate++;
        }
        else{
            $mindate = $minnodate;
        };
    }

        /*Bucle para sacar la fecha con menos pacientes*/
    for ($doctor["visitsperday"]=0;$doctor["visitsperday"]<=11; $doctor["visitsperday"]++){
        $maxnodate = $doctor["visitsperday"];
        $maxdate = 0;
        if ($maxnodate ==! $maxDay){
            $maxnodate++;
        }
        else{
            $maxdate = $maxnodate;
        };
    }
/*0 será el dia de trabajo nº0, 1 el dia de trabajo nº 1 y asi sucesivamente*/


    echo "<tr>";
        echo "<td>".$nombre_correcto."</td>";
        echo "<td>". $minDay ."</td>";
        echo "<td>". $maxDay ."</td>";
        echo "<td>". $mindate ."</td>";
        echo "<td>". $maxdate ."</td>";
    echo "</tr>";
}
echo "</table>";



?>