<?php
function connectDB(){
    $db_host = "127.0.0.1";
    $db_name = "OADB";
    $db_user = "oadb_user";
    $db_pass = "12345678";
    global $conn;
    $conn =  mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die('Could not connect to mysql server.' );
    //$conn =  mysql_connect("localhost:3307","root","") or die('Could not connect to mysql server.' );
    //mysqli_select_db($db_name, $conn) or die('Could not select database.');
    if($conn){
        return $conn;
    }
    else{
        return "fail";
    }
    
//mysql_close($conn);
}

function cerrarConexion(){
    global $conn;
    if($conn){
        $conn=  mysqli_close();
        $conn = false;
    }
}

?>