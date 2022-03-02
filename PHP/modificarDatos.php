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
        $IDAlumno= filter_input(INPUT_POST, "IDAlumno");
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
        }
        if (!empty($nombre)) {
            $sql = "UPDATE alumno SET nombreAlumno='$nombre' WHERE IDAlumno='$IDAlumno'";
            
            if (mysqli_query($conn, $sql)) {
              echo "Nombre modificado".'<br>';
            } else {
              echo "Error al realizar la modificación del nombre: " . mysqli_error($conn).'<br>';
            }
          } 
          if (!empty($apellido1)) {
            $sql = "UPDATE alumno SET apellido1Alumno='$apellido1' WHERE IDAlumno='$IDAlumno'";
            
            if (mysqli_query($conn, $sql)) {
              echo "Apellido modificado".'<br>';
            } else {
              echo "Error al realizar la modificación del apellido: " . mysqli_error($conn).'<br>';
            }
          }
          if (!empty($apellido2)) {
            $sql = "UPDATE alumno SET apellido2Alumno='$apellido2' WHERE IDAlumno='$IDAlumno'";
            
            if (mysqli_query($conn, $sql)) {
              echo "Apellido modificado".'<br>';
            } else {
              echo "Error al realizar la modificación del apellido: " . mysqli_error($conn).'<br>';
            }
          } 
          if (!empty($curso)) {
            $sql = "UPDATE alumno SET curso='$curso' WHERE IDAlumno='$IDAlumno'";
            if (mysqli_query($conn, $sql)) {
              echo "Asignatura modificados".'<br>';
            } else {
              echo "Error al realizar la modificación de la asignatura: " . mysqli_error($conn).'<br>';
            }
          } 
          if (!empty($nota)) {
            $sql = "UPDATE alumno SET nota='$nota' WHERE IDAlumno='$IDAlumno'";
            if (mysqli_query($conn, $sql)) {
              echo "Nota modificada".'<br>';
            } else {
              echo "Error al realizar la modificación de la nota: " . mysqli_error($conn);
            }
          } 
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>