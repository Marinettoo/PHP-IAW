<?php
/*Write a script that stores the audience in each of the three
sessions of the four films that a cinema showed last Saturday and
report the number of spectators in each session and in each film.*/
$audiencia = [
    [50, 60, 40],
    [20, 30, 54],
    [17, 24, 30],
    [20, 58, 60]
];

/*Me he liado haciendolo con una tabla y lo he vuelto a hacer entero*/
for ($fila=0; $fila<=3; $fila++){
    $totalPelicula = $audiencia[$fila][0] + $audiencia[$fila][1] + $audiencia[$fila][2];
    echo "<br>"."En la pelicula ". ($fila + 1). " Han habido ". $totalPelicula. " Espectadores"."</br>" ;
};
for ($columna=0; $columna<=2; $columna++){
    $totalSesion=0;

    for ($fila = 0; $fila <= 3; $fila++){
        $totalSesion = $audiencia[0][$columna] + $audiencia[1][$columna] + $audiencia[2][$columna] + $audiencia[3][$columna];
    }
    echo "<br>"."En la sesion ". ($columna + 1). " Han habido ". $totalSesion. " Espectadores"."</br>" ;
};

?>