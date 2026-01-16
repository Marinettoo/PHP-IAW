<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum</title>
</head>
<body>
    <?php
        $collection = [
            ["name" => "Tijuana", 
            "material" => "Clay", 
            "height" => 80, 
            "width" => 70, 
            "technique" => "oiled", 
            "date" => 40, 
            "description" => "vessel made with wheat and oil from the year 40 in the middle age"],

            ["name" => "Chiquinauwa", 
            "material" => "Clay", 
            "height" => 30, 
            "width" => 50, 
            "technique" => "burned in furnace", 
            "date" => 570, 
            "description" => "vessel made in the old Spain with clay inbuded with stone"],
        ];


        echo "<table>";
        echo "<tr> <th>name</th> <th>material</th> <th>height</th> <th>width/diameter</th> <th>technique</th> <th>date</th> <th>description</th> <th>volume</th></tr>";
        foreach ($collection as $collect){
            echo "<tr>";
               $volume = $collect["height"]*3.14*($collect["width"]/2)**2;
            foreach ($collect as $col => $value){
                echo "<td>", $value, "</td>";
             
            };

            echo "<td>", $volume, " cm3</td>";
            
          /*  foreach ($collection[material] as $mats){
                echo "<td>", $mats, "</td>";
            };
            foreach ($collection[height] as $h){
                echo "<td>", $h, "cm</td>";
                    foreach ($collection[width] as $w){
                echo "<td>", $w, "cm</td>";
                $volume = $h*3.14*($w/2)**2;
                echo "<td>", $volume, "cm3</td>";
                };
            };
            foreach ($collection[technique] as $tech){
                echo "<td>", $tech, "</td>";
            };
            foreach ($collection[date] as $year){
                echo "<td>", $year, "</td>"; 
            };
            foreach ($collection[description] as $desc){
                echo "<td>", $desc, "</td>";
            };*/
            echo "</tr>";
        };
        echo "</table>";
    ?>
</body>
</html>