<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" id="theme">
    <title>Mark-Edit</title>
</head>
<body id ="myBody">
    <script src="scriptsParaPHP.js"></script>
    <!--Logo y cambiar a modo claro / oscuro-->
    <div id="generalArriba">
        <div class="logo">
            <a href="index.html"> <h3>Mark-Edit</h3> </a>
        </div>
        <div class="login">
            <a href="login.html">Login</a>

            <img src="../resources/icons/luna.svg" onclick="cambiarColorOscuro()">
            <img src="../resources/icons/sol.svg" onclick="cambiarColorClaro()">
          
        </div>
    </div>


    <!--NAVBAR-->
    <div id="NavBar">
        <ul>
           <li><a href="../insertarDatos.html">Insertar datos</a></li> 
           <li><a href="../consultarDatos.html">Consultar datos</a></li>
           <li><a href="../eliminarDatos.html">Eliminar datos</a></li>
           <li><a href="../editarDatos.html">Editar datos</a></li>

        </ul>
    </div>

    <!--Formulario para consultar los datos, insertar, etc.-->
    <div id="indexPrincipal">
        <?php
        //Datos
        $IDProfesor= filter_input(INPUT_POST, "IDProfesor");
        $nombre = filter_input(INPUT_POST, "nombre");
        $apellido1 = filter_input(INPUT_POST, "nuevoPrimerApellido");
        $apellido2 = filter_input(INPUT_POST, "nuevoSegundoApellido");
        $curso = filter_input(INPUT_POST, "curso");
        $nota = filter_input(INPUT_POST, "nuevaNota");
        
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
        
        $sqlUpdate = "UPDATE alumno SET nombre = '$nombre', apellido1Alumno = '$apellido1', apellido2Alumno = '$apellido2' WHERE id = '$id'";

        if (mysqli_query($conexion, $sqlUpdate)) {
            echo "Registro actualizado con éxito";
            echo "</br>";
        } else {
            echo "Error: " . $sqlUpdate . "</br>" . mysqli_error($conexion);
            echo "</br>";
        }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>