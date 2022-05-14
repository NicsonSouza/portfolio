<?php
const TITLE = "Calculo IMC";

include "includes/head.php";
include "includes/navbar.php";
include "includes/form.php";

if(isset($_POST['altura'], $_POST['peso'])){
    
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $result = $peso/($altura^2);

    if($result >= 0 && $result <= 18.5){
        echo'<pre>resultado = '.$result.'</pre>'.
        '<pre>Você está muito abaixo do peso!</pre>';
    }elseif($result > 18.5 && $result < 24.9){
        echo'<pre>resultado = '.$result.'</pre>'.
        '<pre>Você está com peso normal</pre>';
    }elseif($result > 25.0 && $result < 29.9){
        echo'<pre>resultado = '.$result.'</pre>'.
        '<pre>Você está com sobrepeso</pre>';
    }elseif($result > 29.9 && $result < 34.9){
        echo'<pre>resultado = '.$result.'</pre>'.
        '<pre>Você está com obesidade tipo 1</pre>';
    }elseif($result > 34.9 && $result < 39.9){
        echo'<pre>resultado = '.$result.'</pre>'.
        '<pre>Você está com obesidade tipo 2</pre>';
    }elseif($result > 39.9){
        echo'<pre>resultado = '.$result.'</pre>'.
        '<pre>Você está com obesidade tipo 3</pre>';
    }elseif($result == 0 || $result < 0) {
        echo'<pre>resultado = '.$result.'</pre>'.
            '<pre>dados invalidos</pre>';
    }

}

include "includes/footer.php";