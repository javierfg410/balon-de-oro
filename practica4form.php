<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 4</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php
if (isset($_GET["messi"]) && isset($_GET["ronaldo"]) && isset($_GET["mann"])) {
    $messi = $_GET["messi"];
    $ronaldo = $_GET["ronaldo"];
    $mann = $_GET["mann"];
if (isset($_GET["error"])) {
    $error = $_GET["error"];
    if ($error&8){
        echo("<p class='error'>La suma de porcentajes supera el 100%</p>");
        if ($error&1){
            echo("<p class='error'>El rango de Messi tiene que ir de 0 a 100</p>");
        }
        if ($error&2){
            echo("<p class='error'>El rango de Ronaldo tiene que ir de 0 a 100</p>");
        }
        if ($error&4){
            echo("<p class='error'>El rango de Griezmann tiene que ir de 0 a 100</p>");
        }
    }
    if ($error&16){
        echo("<p class='error'>La suma de porcentajes es menor a 100%</p>");
        if ($error&1){
            echo("<p class='error'>El rango de Messi tiene que ir de 0 a 100</p>");
        }
        if ($error&2){
            echo("<p class='error'>El rango de Ronaldo tiene que ir de 0 a 100</p>");
        }
        if ($error&4){
            echo("<p class='error'>El rango de Griezmann tiene que ir de 0 a 100</p>");
        }
    }
}
}
/*
---------------------CODIGO ANTES DE LA EXPLICACION DE JORGE----------------------------
if (isset($_GET["messi"]) && isset($_GET["ronaldo"]) && isset($_GET["mann"])) {
    $messi = $_GET["messi"];
    $ronaldo = $_GET["ronaldo"];
    $mann = $_GET["mann"];
if
    (isset($_GET["error"])){
        $error=$_GET["error"];
        if ($error<199){
        echo("<h1 class='error'>La suma de porcentajes supera el 100%</h1>");
        if (($error-100)==1){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-100)==4){
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-100)==6){
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-100)==5){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-100)==7){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-100)==10){
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-100)==11){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
    }
    if ($error>199){
        echo("<h1 class='error'>La suma de porcentajes es menor a 100%</h1>");
        if (($error-200)==1){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-200)==4){
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-200)==6){
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-200)==5){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-200)==7){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-200)==10){
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
        elseif (($error-200)==11){
            echo("<h1 class='error'>El rango de Messi tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Ronaldo tiene que ir de 0 a 100</h1>");
            echo("<h1 class='error'>El rango de Griezmann tiene que ir de 0 a 100</h1>");
        }
    }

    }
}
*/
    ?>
    <div id="parte1">
    <div id="titulo"><h1>Resultados encuesta de fútbol, balon de oro</h1></div>

    <form action="practica4p2.php" method="post">
        <table>
            <tr>
                <td><label for="messi">Messi</label></td>
                <td class="number"><input type="number" id="messi" name="messi" <?php
                    if (isset($_GET["messi"])){
                        echo ("value='");
                        echo $messi;
                        echo ("'");
                    }
                    if (isset($error)){
                        if ($error&1){
                            echo("style=\"background-color: red\"");
                        }
                    }

                            ?> ></td>
                <td class="formu">%</td>
            </tr>
            <tr>
                <td><label for="ronaldo">Cristiano ronaldo</label></td>
                <td class="numero"><input type="number" id="ronaldo" name="ronaldo" <?php
                    if (isset($_GET["ronaldo"])){
                        echo ("value='");
                        echo $ronaldo;
                        echo ("'");
                    }
                    if (isset($error)){
                        if ($error&2){
                            echo("style=\"background-color: red\"");
                        }
                    }

                    ?> ></td>
                <td class="formu">%</td>
            </tr>
            <tr>
                <td><label for="mann">Griezmann</label></td>
                <td class="numero"><input type="number" id="mann" name="mann" <?php
                    if (isset($_GET["mann"])){
                        echo ("value='");
                        echo $mann;
                        echo ("'");
                    }
                    if (isset($error)){
                        if ($error&4){
                            echo("style=\"background-color: red\"");
                        }
                    }

                    ?> ></td>
                <td class="formu">%</td>
            </tr>
            <tr>
                <td colspan="3"><button class="button" >enviar</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>