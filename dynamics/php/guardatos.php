<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "guapayasos_chido";
    function connect ()
    {
        $conexion = mysqli_connect (DBHOST, DBUSER, PASSWORD, DB);
        return $conexion;
    }
   
?> 