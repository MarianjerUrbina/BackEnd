<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TP_1 backend</title>
</head>
<body>
        <li>1. Imprima por pantalla: “Hola mundo”.</li><br>
            <?php
                print "Hola Mundo";
            ?>
        <br><hr>
        <li>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</li><br>
            <?php
               $punto1 = "Hola Mundo";
               echo $punto1;
            ?>
        <br><hr>
        <li>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.</li><br>
            <?php
                $num_1 = 7;
                $num_2 = 13;
                echo "Variables Enteras: " . $num_1 . " y " . $num_2;
                print "<p>Suma : $num_1 + $num_2 = " . $num_1 + $num_2 . "\n</p>";
                print "<p>Resta : $num_1 - $num_2 = " . $num_1 - $num_2 . "\n</p>";
                print "<p>Multiplicación : $num_1 x $num_2 = " . $num_1 * $num_2 . "\n</p>";
                print "<p>División : $num_1 / $num_2 = " . $num_1 / $num_2 . "\n</p>";
                print "<p>Resto Entero : $num_1 % $num_2 = " . $num_1 % $num_2 ;
            ?>
        <br><hr>
        <li>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.</li><br>
            <?php
               $grados = 20;
               print "<p>Temperatura: $grados ºC = " . ($grados*(9/5)+32) . " ºF\n</p>";
               print "<p>Para pasar a grados Fahrenheit: [(t °C x 9/5) + 32]\n</p>";
            ?>
        <br><hr>
        <li>5. Implementar algoritmos que permitan:
            <ul><br>
                <li>A. Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</li><br>
                    <?php
                        $base = 18;
                        $altura = 12;
                        print "Lados del Rectángulo: $base cm y $altura cm</p>\n";
                        print "<p>Perímetro: " . (2*$base)+(2*$altura) . " cm</p>\n";
                        print "<p>Área: " . $base * $altura . " cm^2</p>";
                    ?>
                <br><hr>
                <li>B. Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</li><br>
                    <?php
                        $radio = 30;
                        print "El radio del círculo es: $radio cm </p>\n";
                        define("PI", 3.14159);
                        print "<p>Teniendo en cuenta que el valor de pi es " . PI . "</p>\n";
                        print "<p>Perímetro: " . 2*PI*$radio . " cm</p>\n";
                        print "<p>Área: " . PI*($radio**2) . " cm^2</p>";
                    ?>
            </ul>
        </li>
    </ol>
</body>
</html>
