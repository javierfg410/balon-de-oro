<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body>
<div id="parte1">
    <table>

        <?php

        $messi=$_POST["messi"];
        $ronaldo=$_POST["ronaldo"];
        $mann=$_POST["mann"];
        $error=0;
        if (($messi+$ronaldo+$mann)==100){
            if ($messi>1 && $ronaldo>1 && $mann>1){
                echo ("<tr id='messi1'><td>Messi</td>");
                echo ("<td>");
                for($a=1;$a<=$messi;$a++){
                    echo "*";
                };
                echo("</td></tr>");
                echo ("<tr id='ronaldo1'><td>Cristiano Ronaldo</td>");
                echo ("<td>");
                for($b=1;$b<=$ronaldo;$b++){
                    echo "*";
                };
                echo("</td></tr>");
                echo ("<tr id='mann1'><td>Griezmann</td>");
                echo ("<td>");
                for($c=1;$c<=$mann;$c++){
                    echo "*";
                };
                echo("</td></tr>");
            }
        }elseif (($messi+$ronaldo+$mann)>100){
            if ($messi<0 || $messi>100){
                $error=$error+1;
            }
            if ($mann<0 || $mann>100){
                $error=$error+2;
            }
            if ($ronaldo<0 || $ronaldo>100){
                $error=$error+4;
            }
            $error=$error+8;
            header("Location: practica4form.php?error=$error&messi=$messi&ronaldo=$ronaldo&mann=$mann");
        }elseif (($messi+$ronaldo+$mann)<100) {
            if ($messi < 0 || $messi > 100) {
                $error=$error+1;
            }
            if ($mann < 0 || $mann > 100) {
                $error=$error+2;
            }
            if ($ronaldo < 0 || $ronaldo > 100) {
                $error=$error+4;
            }
            $error=$error+16;
            header("Location: practica4form.php?error=$error&messi=$messi&ronaldo=$ronaldo&mann=$mann");
        }

        ?>
    </table>
    <a href="practica4form.php?messi=<?php echo $messi; ?>&ronaldo=<?php echo $ronaldo; ?>&mann=<?php echo $mann;?>">volver</a>




</div>
</body>
</html>