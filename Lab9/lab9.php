<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Lab5"/>
        <link rel="stylesheet" type="text/css" href="lab9.css">
        <title> Lab9 </title>
	</head>
	<body>
        <h1>Preguntas:</h1>
        <ol>
            <li>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</li>
            <ul><li>Esta función despliega en la pantalla toda la configuración y herramientas de la versión de PHP (del PHP lol) que tenemos en nuestra compu. Vienen datos como Build Date (Jan 16 2018 14:25:02) o la versión que tienes instalada (PHP Version 7.2.1). Esta información que se despliega, pienso que al saber más al respecto, le puedes sacar mucho provecho.</li></ul>
            <li>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</li>
            <ul><li>Es necesario preparar la base de datos, el registro del usuario, el gestor de despliegue así como el servidor Web remoto. </li></ul>
            <li>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</li>
            <ul><li>Lo que se ejecuta es el archivo php, el cual incluye el HTML, o sea que el HTML ejecuta después de todo mediante el php.</li></ul>
        </ol>
            
          <?php
            function promedio($arr){
                $resul = 0;
                foreach($arr as $value){
                    $resul += $value;
                }
                $resul = $resul / count($arr);
                return $resul;
            }
            $arre=array(90,100,110,10,50);
            $arre2=array(10,20,10,50,30,20);
            
            echo "Promedio arreglo [90,100,110,10,50]"."<br>";
            echo promedio($arre)."<br>";
            echo "Promedio arreglo [10,20,10,50,30,20]"."<br>";
            echo promedio($arre2)."<br>";
            
            function mediana($arr){
                sort($arr, SORT_NUMERIC);
                $length = count($arr);
                $middle = floor($length/2);
                $median = $arr[$middle]; 
                if ($length % 2 == 0){
                    $median = ($median + $arr[$middle - 1]) / 2;
                }
                return $median;
            }
            echo "Mediana arreglo [90,100,110,10,50]"."<br>";
            echo mediana($arre)."<br>";
            echo "Mediana arreglo [10,20,10,50,30,20]"."<br>";
            echo mediana($arre2)."<br>";
            
            function lista($arr){
                sort($arr, SORT_NUMERIC);
                $prom=promedio($arr);
                $medi=mediana($arr);
                $length = count($arr)-1;
                echo "<ul>
                    <li>Promedio=$prom</li>
                    <li>Mediana=$medi</li>
                    <li>Menor a mayor:</li>";
                $i=0;
                foreach($arr as $value){
                    echo "<li>$arr[$i]</li>";
                    $i++;
                }
                echo "<li>Mayor a menor:</li>";
                foreach($arr as $value){
                    echo "<li>$arr[$length]</li>";
                    $length--;
                }
                echo"</ul>";
            }
            lista($arre);
            lista($arre2);
        
            function tabla($n){
                echo "<table>";
                
                echo "<tr>";
                echo "<th>";echo "n";echo "</th>";
                echo "<th>";echo "Cuadrado:";echo "</th>";
                echo "<th>";echo "Cubo:";echo "</th>";
                echo "</tr>";
                
                for ($i = 1; $i <= $n; $i++) {
                    echo "<tr>";
                    echo "<td>";
                    echo "$i";
                    echo "</td>";
                    echo "<td>";
                    echo pow($i,2);
                    echo "</td>";
                    echo "<td>";
                    echo pow($i,3);
                    echo "</td>";
                    echo "</tr>";
    
                }
                echo "</table>";

            }
            tabla(4);
            tabla(7);

            
          ?>
        
        
	</body>
</html>