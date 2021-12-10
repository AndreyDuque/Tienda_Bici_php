<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Bici.css">
</head>

<body>
    <div class="contenedor">
        <div class="cabecera">
            <h1>Venta Bici</h1>
        </div>
        <div class="ficha">
            <div class="imagen">
                <img src='./optimus-Koruna_web_800x.webp' alt="">
            </div>
            <div class="info">
            <?php
                    require './Bicicleta.php';
                    $bicicleta1 = new Bicileta("OPTIMUS", "Todo terreno", "Koruna", "Negra", "Medium", 29, "Disco", "Hidraulica",
                    12, 123456789);
                    echo "<b>Marca: </b>" .$bicicleta1->marca;
                    echo "<br><b>Tipo de Bicicleta: </b>" .$bicicleta1->tipoBici;
                    echo "<br><b>Modelo: </b>" .$bicicleta1->modelo;
                    echo "<br><b>Color: </b>" .$bicicleta1->color;
                    echo "<br><b>Talla de marco: </b>" .$bicicleta1->tallaMarco;
                    echo "<br><b>Rin: </b>" .$bicicleta1->numRin;
                    echo "<br><b>Frenos de: </b>" .$bicicleta1->frenos;
                    echo "<br><b>Suspención: </b>" .$bicicleta1->suspencion;
                    echo "<br><b>Número de velocidades: </b>" .$bicicleta1->cambios;
                    echo "<br><b>Numero de serie del marco: </b>" .$bicicleta1->getserimarco();
                    echo "<br>";
                    $bicicleta1->setPropietario("Melissa");
                    echo "<br><b>El propetario es: </b>" .$bicicleta1->getpropetario();
                ?>
            </div>
        </div>
        <form id="fprecio" action="index.php" method="POST">
            <div class="venta">
                <div class="contVenta">
                <h3>Calcular precio de venta</h3>
                <label for="fprecio">Precio de fabricación:</label>
                <br>
                <input type="number" name="precio" required="true">
                <br>
                <br>
                <label for="fprecio">Porcentaje de ganancia:</label>
                <br>
                <input type="number" name="porcentaje" required="true">
                <br>
                <br>
                <button type="submit" name="btnCalcular">Calcular</button>
                    <?php
                        if(isset($_POST["btnCalcular"])):
                            $bicicleta1->click();
                            $precio=$_POST["precio"];
                            $porcentaje=$_POST["porcentaje"];
                            echo "<br><b>El precio de venta es de: $</b>" .$bicicleta1->precioVenta($precio,$porcentaje);
                        endif;
                    ?>
                </div>    
            </div>
        </form>
    </div>

</body>
</html>