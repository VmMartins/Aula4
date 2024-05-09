<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Insira seus dados</h1>
    <form action=""> 
        Nome:<input type="text" name="nome"> 
        Peso:<input type="number" name="peso"> 
        Altura:<input type="number" name="altura">
        <input type="submit" value="Verificar">
       
    </form>
</body>
</html>

<?php
    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    
    $IMC = $peso / ($altura * $altura);

        echo "Nome: {$nome}<br>";
        echo "Peso: {$peso}<br>";
        echo "Altura: {$altura}<br>";
        echo "IMC: {$IMC}<br>";
 
   if($IMC < 16.9){
        
        echo "Diagnóstico: Muito abaixo do peso!";

   }else if($IMC >= 17 && $IMC < 18.4){
        
        echo "Diagnóstico: Abaixo do peso!";
    }else if($IMC >= 18.5 && $IMC < 24.9){
        
        echo "Diagnóstico:Peso norma!";
    }else if($IMC >= 25 && $IMC < 29.9){
        
        echo "Diagnóstico: Acima peso!";
    }else if($IMC >= 30 && $IMC < 34.9){
       
        echo "Diagnóstico: Obesidade de grau I!";
    }else if($IMC >= 35 && $IMC < 40){

        echo "Diagnóstico: Obesidade grau II!";
    }else{
            echo "Diagnóstico: Obesidade grau III!";
    }
        
    
?>