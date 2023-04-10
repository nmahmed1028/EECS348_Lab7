<html>
<body>
<?php
$num_rows = $_GET["size"];
$num_cols = $_GET["size"];
echo "<table border=\"1\">";
        echo '<tr>';
        for ($i=0; $i <= $num_cols; $i++){
        if ($i == 0){
        echo '<td></td>';
        }else{
        echo '<td>' .$i.'</td>';
        }
        }
        for ($j =1; $j <= $num_rows; $j++){

            echo'<tr>';
            echo '<td>'.$j. '</td>';
            for ($k = 1; $k <= $num_cols; $k++)
                echo '<td>' .$k*$j.'</td>';
           echo '</tr>';

        }

  echo"</table>";

?>
</table>
</body>
</html>