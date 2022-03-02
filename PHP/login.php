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
            <a href="../index.html"> <h3>Mark-Edit</h3> </a>
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
        $nombre= filter_input(INPUT_POST, "nombre");
        $pass = filter_input(INPUT_POST,"pass");

        
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
           die("La conexión falló: " . mysqli_connect_error());
       } else {
           echo "Tu ID es: " . $nombre;
       }

       echo "<br>";
       //Introducción base de datos
       $consulta = "SELECT nombre=$nombre FROM profesor ";
       $alumno = $conn->query($consulta);
       $num_reg = $alumno->num_rows;

       while ($fila = $alumno->fetch_array()) {
       echo $fila[0];
       }
  
       echo "<br>" . "El número de alumnos es: " . $num_reg;
       //Buena practica programación --> Borrar la consulta          
        $alumno->free();
       //Buena práctica de programación cerrar la conexión con la mysqli_close()
       mysqli_close($conn);
       ?>
       

       <form method="post" action="../index.html">
           </br>
           <input type="submit" value="Volver inicio">
       </form>
    </div>
</body>
</html>