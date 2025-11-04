<?php
/*Crea un script PHP que genere una tabla HTML con la conversión de Euros a Dólares Estadounidenses (USD) para los valores del 1 al 10.Define la tasa de conversión como una constante: TASA_CONVERSION = 1.08.Usa un bucle for para iterar desde 1 hasta 10.Dentro del bucle, calcula el valor en USD.Imprime la tabla en la consola/navegador con la siguiente estructura:EUR (€)USD ($)11.0822.16......*/

$tasa_conversion = 1.08;
$valor_conversion = 0;

echo '<h1> Tabla de conversion de EUR a USD </h1>';
echo '<table border=1>';
echo '<thead><tr><th>EUR €</th><th>USD $</th>';
echo '<tbody>';
for($i=0; $i<=10; $i++){
    $valor_conversion = $i * $tasa_conversion;
    echo '<tr><td>',$i,'</td>','<td>', $valor_conversion,'</td></tr>';
}
echo '</tbody>';
echo '</table>';
?>