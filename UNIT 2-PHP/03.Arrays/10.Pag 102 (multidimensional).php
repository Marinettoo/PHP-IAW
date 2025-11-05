<?php
/*Write a script that delivers the total audience of the former cinema
in the last weekend.*/
$cine = [

/*sabado [0]*/

    [        /*   sesion  0   1   2         */
        /*pelicula [0]*/[56, 59, 60],
        /*pelicula [1]*/[20, 30, 54],
        /*pelicula [2]*/[17, 87, 60],
        /*pelicula [3]*/[20, 58, 78]
    ],

/*domingo [1]*/

    [        /*   sesion  0   1   2         */
        /*pelicula [0]*/[20, 58, 60],
        /*pelicula [1]*/[20, 30, 54],
        /*pelicula [2]*/[34, 50, 38],
        /*pelicula [3]*/[16, 26, 36]
    ]

    ];


    for ($dia=0; $dia<2; $dia++){
        $total = 0;
            for ($pelicula=0; $pelicula<4; $pelicula++ ){
                for ($sesion=0; $sesion<3; $sesion++){
                    $total = $cine[0][$pelicula][$sesion] + $cine[1][$pelicula][$sesion] + $total;
                }
            }
    }

    echo 'Estuvieron ', $total, ' personas en el cine este fin de semana';
?>
