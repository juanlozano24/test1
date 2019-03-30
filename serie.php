<html>
    <body>
       <style>
            form {
	width: 0em;
}

div {
	margin: .2em;
}

label {
	display: inline-block;
	width: 20em;
}

input {
	width: 20em;
}

button {
  display: block;
  margin: 0 auto;
}

/* Validation Styles */

input:valid {
  background-color: #BBFFF0;
}

.check-ok {
  color: lime;
}

input:invalid ~ .check-ok {
  display: none;
}

input:valid ~ .check-ok {
  display: inline;
}
</style>
<center><form name="frm1" action="#" method="POST">
    <div><label for="serie de numeros"> SERIE DE NUMEROS:<br><br></div>
    NUMERO<br><br>
    Digite un numero<br><br>
    
                </select><br><br>
    VISUALIZACION<br><br>
            <select>
                <option value="1">ASCENDENTE</option>
                <option value="2">DESCENDENTE</option>
                <name> "VISUALIZACION" </name>
                </select><br><br>

        <input type="submit" value="PROCESAR">
</center>
</body>
</html>
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