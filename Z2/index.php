<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
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
        $value = preg_replace("/[^0-9]/", "", $value );


    }

    foreach ($numbers as $number => $value){

            if ($value > $average && $value % 2 == 0) {


                echo "<br />";
                break;

            }
    }
    $max_value = floor(sqrt(max($numbers)));
    $max_value = $max_value + 1;


?>
<table align="center">

            <?php for ($i = 1; $i<=$max_value; $i++){ ?>
            <tr>

                <?php for ($j = 1; $j<=$max_value; $j++){ ?>

                <td align="center"></td>

                <?php } ?>


            </tr>

        <?php } ?>
</table>





</body>


</html>