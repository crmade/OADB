<?php
include_once 'functions.php';

function showServers(){
    $conn = connectDB();
    $query = "select * from servers;";
    $result = mysqli_query($conn, $query);
    //$sql_result=$conn->query($conn,"select * from servers;"); //or die(mysqli_error());
    //mysqli_query("SET NAMES 'utf8'");
    //$sql_result=  mysqli_query($query_string,$conn);// or die("displayTableSite:" . mysqli_error());
    //$column_count = mysql_num_fields($sql_result);
    echo"<div class='divScroll'>";
    print("<table class='table table-striped'>");
    print("<tbody>");
    echo"<tr>";
        echo"<th>IP</th>";
        echo"<th>Name</th>";
        echo"<th>OS</th>";
        echo"<th>Last Seen</th>";
        echo"<th>Actions</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
        print("<tr >");
        print("<td style='cursor:pointer;' onclick='showPorts(".$row['id_servers'].")'/>".$row['ip']."</td>");
        print("<td>".$row['name']."</td>");
        print("<td>".$row['os']."</td>");
        print("<td>".$row['lastSeen']."</td>");
        print("<td style='cursor:pointer;'>");
        echo "<div style='width:30px; float:left;'>";
        //<span class="oi oi-pencil"></span>

            echo"<span class='oi oi-pencil' title='oi-pencil' onclick='editServer(".$row['id_servers'].")'></span>";
            //echo"<span class='glyphicon glyphicon-pencil' onclick='editServer(".$row['id_servers'].")'/>";
        echo "</div>";
        //Eliminar id_paciente
        /*echo "<div style='width:30px; float:left;'>";
            echo"<span class='glyphicon glyphicon-trash' onclick='eliminarPaciente(".$row['id_paciente'].")'/>";
            //print("<button id='test' type='button' class='btn btn-danger'>Eliminar</button>");
        echo "</div>"; 
         */
            print("</td>");
        print("</tr>");
    }
    print("</tbody>");
    print("</table>");
    print("</div>");
    cerrarConexion();
}


?>