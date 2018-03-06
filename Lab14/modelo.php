<?php

$foto = "";

function connectDb()
{
    $mysql = mysqli_connect("localhost","root","","Lab14");
    //root si estan en windows
    $mysql->set_charset("utf8");
    if(!$mysql)
    {
        die("Connection failed: ". mysqli_connect_error());
    }
    return $mysql;
}

function disconnectDb($mysql) 
{
     mysqli_close($mysql);
}

function login($user, $password)
{
    $db = connectDb();
    
    if ($db != NULL)
    {
        //Specification of the SQL query
        $query = 'SELECT nombre, fotoperfil FROM Usuarios WHERE nombre="'.$user.
            '" AND password="'.$password.'"';
        //$query;
        // Query execution; returns identifier of the result group
        $results = $db->query($query);
        // cycle to explode every line of the results
             
        if (mysqli_num_rows($results) > 0)
        {
            // it releases the associated results
            while($fila = mysqli_fetch_array($results, MYSQLI_BOTH))
            {
                $foto = $fila['fotoperfil'];
            }
            //var_dump($foto);
            mysqli_free_result($results);
            disconnectDb($db);
            
            return true;
        }
        return false;
    } 
    return false;
}

function getProfilePicture()
{
    
}

?>