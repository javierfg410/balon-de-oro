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
        //registramos las variables
        $messi=$_POST["messi"];
        $ronaldo=$_POST["ronaldo"];
        $mann=$_POST["mann"];
        $error=0;
        //Esta condicion se ejecutaria en el caso de que los valores de los
        //jugadores sea igual a 100
        if (($messi+$ronaldo+$mann)==100){
            //Esta condicion se ejecutaria si los valores de los jugadores seria mayor o igual a 1
            if ($messi>=1 && $ronaldo>=1 && $mann>=1){
                echo ("<tr id='messi1'><td>Messi</td>");
                echo ("<td>");
                //Este bucle esta para ir contando el numero de jugador e ir poniendo corazones
                //segun dicho numero
                for($a=1;$a<=$messi;$a++){
                    echo "*";
                };
                echo("</td></tr>");
                echo ("<tr id='ronaldo1'><td>Cristiano Ronaldo</td>");
                echo ("<td>");
                //Este bucle esta para ir contando el numero de jugador e ir poniendo corazones
                //segun dicho numero
                for($b=1;$b<=$ronaldo;$b++){
                    echo "*";
                };
                echo("</td></tr>");
                echo ("<tr id='mann1'><td>Griezmann</td>");
                echo ("<td>");
                //Este bucle esta para ir contando el numero de jugador e ir poniendo corazones
                //segun dicho numero
                for($c=1;$c<=$mann;$c++){
                    echo "*";
                };
                echo("</td></tr>");
            }
        //Esta condicion se ejecutaria en el caso de que el valor de los jugadores sea mayor a 100
        }elseif (($messi+$ronaldo+$mann)>100){
        //Estas condiciones estan para que segun las condiciones de los "if" ir sumando errores
            //usando "multiplos" de bits
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
            // una vez contado los errores mandar a la pagina anterior los valores de error y los jugadores por GET
            header("Location: practica4form.php?error=$error&messi=$messi&ronaldo=$ronaldo&mann=$mann");
        }
        //Esta condicion se ejecutaria en el caso de que el valor de los jugadores sea menor a 100
        elseif (($messi+$ronaldo+$mann)<100) {
            //Estas condiciones estan para que segun las condiciones de los "if" ir sumando errores
            //usando "multiplos" de bits
            if ($messi<0 || $messi>100){
                $error=$error+1;
            }
            if ($mann<0 || $mann>100){
                $error=$error+2;
            }
            if ($ronaldo<0 || $ronaldo>100){
                $error=$error+4;
            }
            $error=$error+16;
            // una vez contado los errores mandar a la pagina anterior los valores de error y los jugadores por GET
            header("Location: practica4form.php?error=$error&messi=$messi&ronaldo=$ronaldo&mann=$mann");
        }

        ?>
    </table>

    <a href="practica4form.php?messi=<?php echo $messi; ?>&ronaldo=<?php echo $ronaldo; ?>&mann=<?php echo $mann;?>">volver</a>




</div>
</body>
</html>