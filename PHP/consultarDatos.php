<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Datos
        $IDProfesor= filter_input(INPUT_POST, "IDProfesor");
        $nombre = filter_input(INPUT_POST, "nombre");
        $apellido1 = filter_input(INPUT_POST, "apellido1");
        $apellido2 = filter_input(INPUT_POST, "apellido2");
        $curso = filter_input(INPUT_POST, "curso");
        $nota = filter_input(INPUT_POST, "nota");
        
        //Servidor
        $servername = "localhost";
        //Nombre de la base de datos
        $database = "webNotas";
        //Credenciales de la base de datos
        $username = "franvilla";
        $password = "franvilla10";
        //Conexion con la base de datos --> mysqli
        $conn = mysqli_connect($servername, $username, $password, $database);
        //Comprobacion de la conexion
        if (!$conn) {
            die ("La conexión falló: " .mysqli_connect_error());
        }else{
            echo "Conectado correctamente";
        }
       
        echo "<br>";
        
        $sql = "INSERT INTO alumno (IDProfesor, nombreAlumno, apellido1Alumno, apellido2Alumno, curso, nota) VALUES ('$IDProfesor','$nombre', '$apellido1','$apellido2','$curso', '$nota')";
        
                
        if(mysqli_query($conn, $sql)){
            echo "Datos introducidos correctamente";
        }else{
            echo "Error: " . $sql . "<br>" . mysql_error($conn);
        }
        
        mysqli_close($conn);
        ?>
    </div>
    </body>
</html>
