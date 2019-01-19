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



        foreach ($numbers as $key => $value){
            $numbers[$key] = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            if(!$numbers[$key]){

                unset($numbers[$key]);

            }
        }


    sort($numbers);


    if (count($numbers)){

        $average = array_sum($numbers)/ count($numbers);


    }






    $max_value = floor(sqrt(max($numbers)));
    $max_value = $max_value + 1;
    $bold = false;


?>
<table align="center">

            <?php for ($i = 0; $i<$max_value; $i++){ ?>

            <tr>

                <?php for ($j = 0; $j<$max_value; $j++){ ?>

                <td align="center">
                    <?php
                    $place = ($i* $max_value) + $j + 1;
                    if (in_array($place, $numbers) && $place % 2 == 0){

                        if ($place > $average && $bold === false) {
                            echo "<b>" . $place . "<b />";
                            $bold = true;

                        }else {
                            echo $place;
                        }
                    }

                    ?>

                </td>

                <?php } ?>


            </tr>

            <?php } ?>
</table>





</body>


</html>