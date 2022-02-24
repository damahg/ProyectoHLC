<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Mark-Edit</title>
</head>
<body>
    <!--Logo y cambiar a modo claro / oscuro-->
    <div id="generalArriba">
        <div class="logo">
            <a href="index.html"> <h3>Mark-Edit</h3> </a>
        </div>
        <div class="login">
          <a href="Login.html">Login</a>
        </div>
    </div>

    

    <!--NAVBAR-->
    <div id="NavBar">
        <ul>
           <li><a href="insertarDatos.html">Insertar datos</a></li> 
           <li><a href="consultarDatos.html">Consultar datos</a></li>
           <li><a href="eliminarDatos.html">Eliminar datos</a></li>
           <li><a href="editarDatos.html">Editar datos</a></li>
        </ul>
    </div>

    <!--Formulario para consultar los datos, insertar, etc.-->
    <div id="indexPrincipal">
        <h1>Datos Recibidos</h1>
        <?php
        //Datos
        $nombre = filter_input(INPUT_POST, "nombre");
        $apellidos = filter_input(INPUT_POST, "apellidos");
        $curso = filter_input(INPUT_POST, "curso");
        $nota = filter_input(INPUT_POST, "nota");
        
        //Servidor
        $server="localhost";
        //BD
        $database = "";
        $user = "root";
        $pass ="";
        
        //Conexion
        $conn = mysqli_connect($server,$user,$pass,$database);
        
        if(!$conn){
            die("La conexion falló: " . mysqli_connect_error());
        }else{
            echo "Conectado correctamente";
        }
       
        echo "<br>";
        
        $sql = "INSERT INTO alumno (Nombre, Apellidos, Curso, Nota) VALUES ('$nombre', '$apellidos', '$curso', '$nota')";
        
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