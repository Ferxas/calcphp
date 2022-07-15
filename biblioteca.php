<?php
    $num1=$_POST['numero1'];
    $num2=$_POST['numero2'];
    $operaciones=$_POST['operacion'];
 
 
    if( $operaciones=="sumar"){
        $suma=$num1+$num2;
        echo "El resultado efectuado de la suma es: ".$suma;
    }
        elseif ($operaciones=="restar"){
        $resta=$num1-$num2;
        echo "El resultado efectuado de la resta es : ".$resta;
    }
    elseif ($operaciones=="multiplicar"){
        $mul=$num1*$num2;
        echo "El resultado efectuado de la multiplicacion es : ".$mul;
    }
    elseif ($operaciones=="dividir"){
        $div=$num1/$num2;
        echo "El resultado efectuado de la division es : ".$div;
    }
?>