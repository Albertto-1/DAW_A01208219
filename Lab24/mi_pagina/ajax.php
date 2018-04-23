<?php
    
    if($_GET["opcion"] == "productos")
    {
        $opcion = $_GET["opcion"];
        $url = "https://lab24-albertto.c9users.io/lab24_WebServices/public/$opcion"; //Route to the REST web service
        $c = curl_init($url);
        $response = curl_exec($c);
        curl_close($c);
    }
    
        if($_GET["opcion"] == "info")
    {
        $opcion = $_GET["opcion"];
        $url = "https://lab24-albertto.c9users.io/lab24_WebServices/public/$opcion"; //Route to the REST web service
        $c = curl_init($url);
        $response = curl_exec($c);
        curl_close($c);
    }
    
?>