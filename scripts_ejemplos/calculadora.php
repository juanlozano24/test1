<?php
    $num1= $_POST['n1'];
    $num2= $_POST['n2'];
    $oper= $_POST['tipo_op'];

    echo "numero 1: ".$num1."<br>";
    echo "numero 2: ".$num2."<br>";
    echo "tipo operacion: ".$oper."<br>";

    if($oper=="1")
        $result=$num1+$num2;
    else
        if($oper=="2")
            $result=$num1-$num2;
        else
            if($oper=="3")
                $result=$num1*$num2;
            else
                $result=$num1/$num2;
    echo "EL RESULTADO DE SU OPERACION ES: ".$result;
?>