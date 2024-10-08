<!-- 4. Dissenyeu un script que treballi amb dues cadenes i comprovi si la primera (cadena1) conté la
segona (cadena2). Si la segona no es troba continguda a la primera, aquesta serà afegida al final
de l'altre, mentre que si estava continguda, mostrarà un missatge explicant que no ha calgut fer
cap operació. -->

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Generacio Taules </title>
</head>
<body>
    <?php
        $array1 = array(["Daniel","Rueda","Gómez","15/04/2005","20553137S"],
        ["Nick","Bermudez","Esch","21/08/2004","40253137S"],
        ["Iker","Serna","Dsafa","15/02/2005","11222137S"],
        ["Miguel","Euceda","Dkefrke","15/07/2005","98553137S"]);

        echo "<table>";
        echo "<tr>";
        echo "<th>Nom</th>";
        echo "<th>Primer Cognom</th>";
        echo "<th>Segon Cognom</th>";
        echo "<th>Data de Naixement</th>";
        echo "<th>DNI</th>";
        echo "</tr>";

        foreach ($array1 as $persona) {
            echo "<tr>";
            echo "<td>" . $persona[0] . "</td>";
            echo "<td>" . $persona[1] . "</td>";
            echo "<td>" . $persona[2] . "</td>";
            echo "<td>" . $persona[3] . "</td>";
            echo "<td>" . $persona[4] . "</td>";
            echo "</tr>";
        }
        
        echo "</Table>";
    ?>
</body>
</html>