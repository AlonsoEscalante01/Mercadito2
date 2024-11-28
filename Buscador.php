<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "artemarket";
$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida" . $conn->connect_error);
}

// Consulta SQL para obtener las obras
//$sql = "SELECT * FROM Obras";
$Busqueda = $_POST['buscar'];
$sql = "SELECT O.Nombre as Obras from  Obras O Where O.Nombre LIKE '%$Busqueda%'";

$result = $conn->query($sql);

$sql2 = "SELECT  U.Usuario from Usuarios U  Where U.Usuario LIKE '%$Busqueda%'";

$result2 = $conn->query($sql2);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte-Market</title>
    <link rel="stylesheet" href="Styles.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }

        #header {
            margin: auto;
            width: 500px;
            font-family: Arial, Helvetica, sans-serif;
        }

        ul,
        ol {
            list-style: none;
        }

        .nav>li {
            float: right;
        }

        .nav li a {
            background-color: #fff;
            color: #000;
            text-decoration: none;
            padding: 10px 12px;
            margin-left: -125px;
            margin-right: 20px;
            display: block;
        }

        .nav li a:hover {
            background-color: rgba(200, 132, 223, 1);
            color: #000;
        }

        .nav li ul {
            display: none;
            position: absolute;
            min-width: 180px;
        }

        .nav li:hover>ul {
            display: block;
        }

        .nav li ul li {
            position: relative;
        }

        .nav li ul li ul {
            right: -140px;
            top: 50px;
        }

        /* Estilo de los selectores */
        select {
            font-size: 15px;
            border-radius: 25px;
            background-color: #f5f5f5;
            color: #333;
            border: 1px solid #ccc;
            padding: 5px;
        }

        select:focus {
            border: 2px solid white;
            background-color: black;
            color: rgba(200, 132, 223, 1);
            font-weight: bolder;
        }

        select:hover {
            border: 2px solid white;
            background-color: black;
            color: rgba(200, 132, 223, 1);
            font-weight: bolder;
            
        }

        .filtrosL {
            font-weight: bold;
            font-size: 16px;
            padding-left: 50px;

        }


        /*Estilos de las estrellas*/
        #valoracionObras {
            font-size: 16px;
            /*Estilo boton filtros*/
        }

        #aplicar-filtros {
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
            color: white;
            border-radius: 15px;
        }

        .obra {
            background-color: transparent;
            display: block;
            visibility: visible;
        }
    </style>
</head>

<body>
    <div style="background-color:rgba(200, 132, 223, 0.701); width: 110%; margin-left: 50px;">
        <header>
            <div class="container2">
                <div class="btn-menu">
                    <div class="logo">
                        <label style="margin-left:-60px;" for="btn-menu">☰</label>
                    </div>
                </div>
            </div>
            <a href="Inicio.php" style="margin-left: 10px;"><img src="Logo.jpg" alt="Logo" width="90px" height="90px"
                    style="border-radius: 50%; margin: 10px;"></a>
                    <div>
               <form action="Buscador.php" method="POST" style="margin-top:30px;
            margin-left:15px;        
            padding:10px;
            width:320;">
                <input type="text" name="buscar" id="buscar"
                    style="width:280px; height: 35px; border-radius: 50px; border: #fff;">
                <button type="submit"
                    style="cursor:pointer; border-radius: 50px; height: 33px; width: 30px; background-color: #fff; border: #fff;">
                    <img src="https://www.freeiconspng.com/thumbs/search-icon-png/search-icon-png-21.png" alt="Buscar"
                        width="15" height="12">
                </button>
                </form>
            </div>
            <div class="Title" style="position: relative; left: 10px;">
                <h1 style="background-color: transparent; position:relative; margin-left:10px;">Destacados</h1>
            </div>

            <div id="header">
                <ul class="nav">
                    <li><a href=""
                            style="position: relative; top: 0px; right: 300px; height: 20px; border-radius: 50px; border:#000;">Categorías</a>
                        <ul class="Categorias" style="position: absolute; right: 250px;">
                            <li><a href="Dibujos.html">Dibujos</a></li>
                            <li><a href="Digitales.html">Digitales</a></li>
                            <li><a href="Esculturas.html">Esculturas</a></li>
                            <li><a href="Fotografias.html">Galería Fotográfica</a></li>
                            <li><a href="Pinturas.html">Pinturas</a></li>
                        </ul>
                    </li>
                </ul>
                <button type="submit"
                    style=" cursor: pointer; border-radius: 50px; height: 40px; width: 30px; position: absolute; top: 35px; right: 140px; background-color: #fff; border: #fff;">
                    <a href="Subir.html"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Upload_alt_font_awesome.svg/1200px-Upload_alt_font_awesome.svg.png"
                            alt="Subir" width="12" height="12">
                </button>
                <a href="Menu Login.html"><img src="https://cdn-icons-png.flaticon.com/512/1144/1144760.png"
                        alt="Profile" width="90px" height="90px"
                        style="border-radius: 50%; margin: 10px; position: absolute; top: -2px; right: 30px;"></a>
            </div>
        </header>
    </div>


<?php
// Mostrar las obras en la página
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        echo '<div>';
        /*echo '<a href="detalle_obra.php?id=' . $row['IdImg'] . '" style="color: #000;">'; // Agregar un enlace a la página de detalle de la obra*/
       
        
        echo '<div class="infoProducto">';
        echo '<h2>' . $row['Obras'] . '</h2>';
       

        echo '</div>';
      
        echo '</div></a>';
    }
}

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        
        echo '<div>';
        /*echo '<a href="detalle_obra.php?id=' . $row['IdImg'] . '" style="color: #000;">'; // Agregar un enlace a la página de detalle de la obra*/
       
        echo '<div class="infoProducto">';
        echo '<h2>' . $row['Usuario'] . '</h2>';
        
        echo '</div>';
        echo '</div></a>';
    }
}
if ( $result->num_rows == 0 && $result2->num_rows == 0 ) {
    echo "No se encontraron obras.";
}

?>


</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>
