<?php
include_once 'functions.php';

function showPorts($id_servers){
    $conn = connectDB();
    $query = "select * from ports where fk_servers =".$id_servers.";";
    $result = mysqli_query($conn, $query);
    //$sql_result=$conn->query($conn,"select * from servers;"); //or die(mysqli_error());
    //mysqli_query("SET NAMES 'utf8'");
    //$sql_result=  mysqli_query($query_string,$conn);// or die("displayTableSite:" . mysqli_error());
    //$column_count = mysql_num_fields($sql_result);
    echo"<div class='divScroll'>";
    print("<table class='table table-striped'>");
    print("<tbody>");
    echo"<tr>";
        echo"<th>Port</th>";
        echo"<th>Name</th>";
        echo"<th>Version</th>";
        echo"<th>Type</th>";
        echo"<th>Status</th>";
        echo"<th>Last Seen</th>";
        echo"<th>Actions</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
        print("<tr >");
        print("<td>".$row['port']."</td>");
        print("<td>".$row['name']."</td>");
        print("<td>".$row['version']."</td>");
        print("<td>".$row['type']."</td>");
        print("<td>".$row['status']."</td>");
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