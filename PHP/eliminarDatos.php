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
        <?php
        $id = filter_input(INPUT_POST, "id");
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
            echo 'Fila borrada';
            $consulta = "DELETE FROM alumno WHERE id = '$id'";
            $alumno = $conn->query($consulta);

            echo "Registro borrado"
        }
        
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>