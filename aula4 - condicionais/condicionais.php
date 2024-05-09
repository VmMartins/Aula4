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
        Idade:<input type="text" name="idade"> 
        <input type="submit" value="verificar">
       
    </form>
</body>
</html>

<?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
 
   if($idade >= 18 && $idade < 70){
        echo "{$nome} na sua idade é obrigatório votar!";
   }else if(($idade >= 16 && $idade < 18) || $idade >= 70){
        echo "{$nome} seu voto é facultativo!";
    }else{
        echo "{$nome} na sua idade é proibido votar!";
    }
        
    
?>