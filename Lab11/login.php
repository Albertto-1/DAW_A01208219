<?php

if($_POST["nombre"] != "" && $_POST["password"] != "" && is_numeric($_POST["tel"]))
{
    include("partials/_header.html");
    
    echo "Bienvenido ".$_POST["nombre"]." ".$_POST["apellido"]."<br>";
    
    include("partials/_dentroForm.html"); 
    include("partials/_footer.html"); 
}
else
{
    header("location: index.php");
}

?> 