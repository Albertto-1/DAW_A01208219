<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
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

            echo promedio($arre)."<br>";
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
            echo mediana($arre)."<br>";
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

            
            
          ?>
        </p>
	</body>
</html>