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
        <h1>Consulta: </h1>
        <?php  
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
            $consulta = "SELECT * FROM alumno";
            $alumno = $conn->query($consulta);
            $num_fil = $alumno->num_rows;
            
            echo "ID" . " - " . "Nombre" .  " - " . "Apellidos" . " - " . "Curso" . " - " . "Nota" . "<br>";
            
            while ($fila = $alumno->fetch_array()){
                echo $fila[0] . " - " . $fila[1] .  " - " . $fila[2] . " - " . $fila[3] . " - " . $fila[4] . "<br>";
            }
            echo '<br>';
            echo 'El numero de alumnos es: ' . $num_fil;
            $alumno -> free();
        }
        
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>