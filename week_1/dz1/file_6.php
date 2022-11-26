<html>
    <head>
        <title>Задача #6</title>
    </head>
    <body>
    <?php
        echo "<table  border='1' align='center'>\n";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>\n";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td width = '30' align = 'center'> ";
                if (($i % 2 == 0) && ($j % 2 == 0)) {
                    echo "(" . $i * $j . ") \n";
                } elseif (($i % 2 !== 0) && ($j % 2 !== 0)) {
                    echo "[" . $i * $j . "] \n";
                } else {
                    echo $i * $j . "\n";
                }
                echo "</td>";
            }
            echo "</tr>\n";
        }   
        echo "</table>";
    ?>
    </body>
</html>
