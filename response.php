<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
</head>
<body>
    <?php
        $t= $_POST['taille'] ;
        $p = $_POST['poid'] ;

        $imc=  +$p/(+$t*+$t);
        echo "votre IMC est : $imc <br>";
        echo 'votre IMC est : '.$imc.'<br>';

        switch($imc)
        {
        case $imc < "18.5" :
            echo "sous poid";
        break;
        case $imc < "24.9":
            echo "Poid idéal";
        break;
        default :
            echo "obésité";
        break;
        }


    ?>
</body>
</html>


