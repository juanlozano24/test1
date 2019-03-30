<?php
    echo "<table border = '1'><tr>";
    for($i=1;$i<=10;$i++)
    {
        if($i%2==0){
            echo "<td bgcolor='YELLOW'>".$i."</td>";
        }else{
            echo "<td bgcolor='GREEN'>".$i."</td>";
        }
    }
    echo "</table></tr>";
?>