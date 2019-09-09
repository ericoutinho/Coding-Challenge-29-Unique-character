<?php

    $text = $_GET['text'];

    echo uniqueChars($text);
    
    function uniqueChars($text){
        $len = strlen($text);
        if (preg_match("/\d/", $text)){
            return "ERRO";
            exit();
        }
        $index = array();
        $counter = 1;
        for($x = 0; $x < $len; $x++){
            if (!array_key_exists($text[$x], $index)){
                $index[$text[$x]] = $counter;
                $counter++;
            }
        }
        return $text . " => " . str_replace(array_keys($index), array_values($index), $text);
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CC#29</title>
</head>
<body>
    <p>Digite uma string para separar os caracteres</p>
    <form action="" method="get">
        <input type="text" name="text"><br/>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>