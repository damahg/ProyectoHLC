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
        <table>
            <h1>DATOS ALUMNOS REGISTRADOS</h1>
            <tr>
                <th>NÚMERO</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>ESTUDIOS </th>
                <th>NOTAS</th>
            </tr>
            <?php
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
                } else {
                    // Sacamos todos los datos almacenados en la base de datos
                    $consulta = "SELECT * FROM alumno";
                    // se llama a la funcion query() para pasarle los datos de la base de datos y realizar la consulta
                    $alumnos = $conexion->query($consulta);
                    // nos devuelve el numero de filas que contiene
                    $numeroRegistros = $alumnos->num_rows;

                    // va guardando los indices numericos de cada alumno y los guarda el $fila que luego vamos a ir mostrando
                    while ($fila = $alumnos->fetch_array()) {
                    ?>

                    <tr>
                        <td>
                            <?php
                            echo $fila[0];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $fila[1];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $fila[2];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $fila[3];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $fila[4];
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <?php
            echo "</br>";
            echo "</br>";
            echo "Número de alumnos registrados: " . $numeroRegistros;
            // limpia los datos para que no sigan almacenados una  vez que ya no sirvan
            $alumnos->free();
        }
        // cerramos conexión con la base de datos
        mysqli_close($conexion);
        ?>
        <form method="post" action="index.html">
            </br>
            <input type="submit" value="Volver inicio">
        </form>
    </div>
</body>
</html>