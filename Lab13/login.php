<?php
    session_start();
    
    if(isset($_SESSION["nombre"])) {
        
        include("partials/_header.html");
        
        $nombre = $_SESSION["nombre"];
        $apellido = $_SESSION["apellido"];
        $tel = $_SESSION["tel"];
        
        include("partials/_inside.html");
        include("partials/_footer.html"); 
        
    }else if ($_POST["nombre"]=="Alberto" && $_POST["password"]=="betousqui" ) {
        
        unset($_SESSION["error"]);
        
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["apellido"] = $_POST["apellido"];
        $_SESSION["tel"] = $_POST["tel"];
        
        $nombre = $_SESSION["nombre"];
        $apellido = $_SESSION["apellido"];
        $tel = $_SESSION["tel"];
        
        include("partials/_header.html");
        include("partials/_inside.html");
        include("partials/_footer.html"); 
        
    } 
    else if ($_POST["nombre"]!="Alberto" || $_POST["password"]!="betousqui" ){
        header("location:index.php");
    }
    
?>