<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadaca 2</title>
</head>
<body>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
    Unesite brojeve odvojene zarezom: <input type="text" name="number"><br>
    <input type="submit" value="Pošalji" >
</form>

<?php


    $numbers = explode(',', $_POST['number']);

    sort($numbers);


    if (count($numbers)){

        $average = array_sum($numbers)/ count($numbers);
        echo "<hr />";

    }

    foreach ($numbers as $number=> $value){

        if($value > $average && $value % 2 == 0){
            echo $bvalue = "<b>" . $value . "<b />";
            break;

        }
    }

?>




<?php
echo "<pre>";
var_dump($numbers);
echo "<pre />"
?>



</body>
</html>