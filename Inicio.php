<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadito</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
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
            color: #ffffff;
            background-color: #ab0d2f;
            text-decoration: none;
            padding: 10px 12px;
            margin-left: -125px;
            margin-right: 20px;
            display: block;
        }

        .nav li a:hover {
            background-color: #fdfd96;
            color: rgba(0,0,0, 0.904);
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

        select {
        font-size: 15px;
        font-weight: bold;
        border-radius: 25px;
        background-color: #fafafa;
        color: #797878;
        border: 1px solid #c0c0c0;
        padding: 5px;
        transition: all 0.8s ease; /* Cambiado para incluir todas las propiedades en la transición */
        }

        select:focus,
        select:hover {
        border: 1px solid rgba(22, 141, 86, 0.904);
        background-color: #ebebeb;
        color: black;
        font-weight: bolder;
        }

        /* Revertir la transición cuando no está enfocado */
        select:not(:focus) {
        background-color: #fafafa;
        border: 1px solid #c0c0c0;
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
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ab0d2f;
            color: white;
            border-radius: 15px;
            width: 80px;
            height: 30px;
            border: 1px solid;
            font-weight: bolder;
        }

        #aplicar-filtros:hover {
            border: 1px solid #ab0d2f;
            background-color:#fdfd96;
            color: black;
            font-weight: bolder;
        }

        .obra {
            background-color: transparent;
            display: block;
            visibility: visible;
        }
        h1{
            font-family: "Open Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
            "wdth" 100;
            color: rgba(255, 255, 255, 0.904);
        }
    </style>
</head>

<body style="background-color: #fdfd96;">

    <div style="background-color: #ab0d2f; width: 130%;">
        <header style="width: 100%; margin-left: 0px; height: 15%; ">
            <div class="container2">
                <div class="btn-menu">
                    <div class="logo">
                    <label style=" color: #ffffff; font-size: 25px; width: 25px; height: 25px; padding-left: 15px;" for="btn-menu">☰</label>
                    </div>
                </div>
            </div>
            <a href="Inicio.php" style="margin-left: 10px;"><img src="Logo.jpg" alt="Logo" width="65px" height="65px" style="border-radius: 100%; margin: 0px;"></a>
            <div>
            <form action="Buscador.php" method="POST" style="margin-top:30px; margin-left:15px; padding:10px; width:320px; height: 66px;">
                    <input type="text" name="buscar" id="buscar" style="width:280px; height: 35px; border-radius: 50px; border: #fff;">
                    <button type="submit" style="cursor:pointer; border-radius: 100px; height: 33px; width: 30px; background-color: #fff; border: #fff;">
                        <img src="https://www.freeiconspng.com/thumbs/search-icon-png/search-icon-png-21.png" alt="Buscar" width="12" height="12">
                    </button>
                </form>
            </div>
            <div class="Title" style="position: relative; left: 10%;">
                <h1 style="background-color: transparent; position:relative; margin-left:-10px; font-size: xx-large">Más consumido</h1>
            </div>

            <div id="header">
                <ul class="nav">
                    <li>
                        <a href="" style="position: relative; top: 0px; right: 300px; height: 20px; height: 15px; border-radius: 50px; border:#000; font-size: large;">Categorías</a>
                        <ul class="Categorias" style="position: absolute; right: 10%; z-index: 1;">
                            <li><a href="Rapida.html">Comida rápida</a></li>
                            <li><a href="Oriental.html">Comida oriental</a></li>
                            <li><a href="Tradicional.html">Comida tradicional</a></li>
                            <li><a href="Italiana.html">Comida italiana</a></li>
                            <li><a href="Postres.html">Postres</a></li>
                        </ul>
                    </li>
                </ul>
                <button type="submit" style=" cursor: pointer; border-radius: 50px; height: 40px; width: 30px; position: absolute; top: 30px; right: 140px; background-color: #fff; border: #fff;">
                    <a href="Subir.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Upload_alt_font_awesome.svg/1200px-Upload_alt_font_awesome.svg.png" alt="Subir" width="13" height="13"></a>
                </button>
                <a href="Menu Login.html"><img src="https://cdn-icons-png.flaticon.com/512/1144/1144760.png" alt="Profile" width="40px" height="40px" style="border-radius: 50%; margin: 10px; position: absolute; top: 20px; right: 30px;"></a>
            </div>
        </header>
    </div>
    <div>
        <form>
            <div class="filtro" style="display: flex; padding-top: 30px; justify-content: center;">

                <label class="filtrosL" for="tamaño">Tamaño:</label>
                <select id="Cantidad" style="position: relative; right: -1%">
                    <option value="Individual">Individual</option>
                    <option value="Pareja">Para dos personas</option>
                    <option value="Equipo">De tres a cuatro</option>
                    <option value="Familia">Familia</option>
                </select>

                <label class="filtrosL" for="precios">Precio:</label>
                <select id="precios"  style="position: relative; right: -1%">
                    <option value="TodosP">Todos</option>
                    <option value="precio1">Menos de $300</option>
                    <option value="precio2">$300 - $500</option>
                    <option value="precio3">$500 - $1,000</option>
                    <option value="precio4">Mas de $1,000</option>
                </select>


                <label class="filtrosL" for="valoracionObras">Valoración:</label>
                <select id="valoracionObras" style="margin-right: 30px;position: relative; right: -1%">
                    <option value="TodosV">Todos</option>
                    <option value="1">&#9733;</option>
                    <option value="2">&#9733;&#9733;</option>
                    <option value="3">&#9733;&#9733;&#9733;</option>
                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>

                <button id="aplicar-filtros">Filtrar</button>
            </div>
        </form>

    </div>


    <div class="container-items" style="padding-left: 20%; background-color: #fdfd96;">
        <a href="PizzaPeperoni.html" style="color: #000;">
        <div class="Items">
            <figure>
                <img src="https://mobilestatic.littlecaesars.com/mexweborderingimages/083a6b87-6e7b-444e-b30a-f4d8e1894e7e.jpg"
                    alt="Producto1" oncontextmenu="return false">
            </figure>
            <div class="infoProducto">
                <h2>Pizza de peperoni</h2>
                <div>
                <figcaption class="pinturasT">Antojitos</figcaption> <figcaption class="pinturasE">Comida rápida</figcaption>
                    <br>
                    <b>
                        <p style="display: contents; font-size: 11px;">Vendedor: </p>
                    </b>
                    <p class="Vendedor">Little Caesars</p>
                </div>
                <p class="Precio">$119.00</p>
                <button>Comprar</button>
            </div>
        </div></a>

        <a href="BicMac.html" style="color: #000;">
        <div class="Items">
            <figure>
                <img src="https://tiendafs.middleby.com.mx/cdn/shop/collections/98ad0315-3f2a-4231-bf0d-355bc3ec91cf_1920x_crop_center.jpg?v=1707511316"
                    alt="Obra" oncontextmenu="return false">
            </figure>
            <div class="infoProducto">
                <h2>BicMac</h2>
                <div>
                    <figcaption class="pinturasT">Antojitos</figcaption> <figcaption class="pinturasE">Comida rápida</figcaption>
                    <br>
                    <b>
                        <p style="display: contents; font-size: 11px;">Vendedor: </p>
                    </b>
                    <p class="Vendedor">McDonald's</p>
                </div>
                <p class="Precio">$99.00</p>
                <button>Comprar</button>
            </div>
        </div></a>

        <a href="TacoPastor.html" style="color: #000;">
        <div class="Items">
            <figure>
                <img src="https://images.venturapark.com/img/2021/07/tacos-de-carnitas-carne-asada-y-al-pastor.jpg"
                    alt="Obra" oncontextmenu="return false">
            </figure>
            <div class="infoProducto">
                <h2>Tacos al pastor</h2>
                <div>
                <figcaption class="pinturasT">Mexicana</figcaption> <figcaption class="pinturasE">Antojitos</figcaption>
                    <br>
                    <b>
                        <p style="display: contents; font-size: 11px;">Vendedor: </p>
                    </b>
                    <p class="Vendedor">Porky's Junior</p>
                </div>
                <p class="Precio">$59.00</p>
                <button>Comprar</button>
            </div>
        </div></a>

        <a href="Boneless.html" style="color: #000;">
        <div class="Items">
            <figure>
                <img src="https://www.recetasnestlecam.com/sites/default/files/srh_recipes/9588ce1e072039046deffaf717edeae3.jpg"
                    alt="Obra" oncontextmenu="return false">
            </figure>
            <div class="infoProducto">
                <h2>Boneless</h2>
                <div>
                    <figcaption class="pinturasT">Comida rápida</figcaption>
                    <br>
                    <b>
                        <p style="display: contents; font-size: 11px;">Vendedor: </p>
                    </b>
                    <p class="Vendedor">Rebel Wings</p>
                </div>
                <p class="Precio">$187.00</p>
                <button>Comprar</button>
            </div>
        </div></a>

        <a href="TortaPastor.html" style="color: #000;">
            <div class="Items">
                <figure>
                    <img src="https://www.cocinavital.mx/wp-content/uploads/2017/08/torta-de-pastor.jpg"
                        alt="Obra" oncontextmenu="return false">
                </figure>
                <div class="infoProducto">
                    <h2>Torta de pastor</h2>
                    <div>
                        <figcaption class="pinturasT">Mexicana</figcaption> <figcaption class="pinturasE">Antojitos</figcaption>
                        <br>
                        <b>
                            <p style="display: contents; font-size: 11px;">Vendedor: </p>
                        </b>
                        <p class="Vendedor">Taquerias Neza</p>
                    </div>
                    <p class="Precio">$85.00</p>
                    <button>Comprar</button>
                </div>
            </div></a>
            <a href="CrepaDulce.html" style="color: #000;">
                <div class="Items">
                    <figure>
                        <img src="https://i.blogs.es/b45e35/como-hacer-masa-para-crepas-3-/450_1000.jpg"
                            alt="Obra" oncontextmenu="return false">
                    </figure>
                    <div class="infoProducto">
                        <h2>Crepa Dulce</h2>
                        <div>
                            <figcaption class="pinturasT">Postres</figcaption> <figcaption class="pinturasE">Francés</figcaption>
                            <br>
                            <b>
                                <p style="display: contents; font-size: 11px;">Vendedor: </p>
                            </b>
                            <p class="Vendedor">Le gout De La Crepe</p>
                        </div>
                        <p class="Precio">$90.00</p>
                        <button>Comprar</button>
                    </div>
                </div></a>


<a href="ChilesRellenos.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://www.goya.com/media/4255/stuffed-chileschiles-rellenos.jpg?quality=80" alt="Producto3" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Chiles Rellenos</h2>
            <div>
                <figcaption class="pinturasT">Platillo principal</figcaption> <figcaption class="pinturasE">Comida casera</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Cocina Doña Lupita</p>
            </div>
            <p class="Precio">$85.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="PozoleVerde.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://i0.wp.com/mesasanamx.com/wp-content/uploads/2024/09/Pozole-Verde.jpg?resize=1200%2C1200&ssl=1s" alt="Producto4" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Pozole Verde</h2>
            <div>
                <figcaption class="pinturasT">Caldo</figcaption> <figcaption class="pinturasE">Platillo típico</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Pozolería El Guero</p>
            </div>
            <p class="Precio">$90.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="TamalesVerdes.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://doñarepa.com/wp-content/uploads/2018/11/Recetas-Tamalitos-Verdes.jpg" alt="Producto5" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Tamales Verdes</h2>
            <div>
                <figcaption class="pinturasT">Desayuno</figcaption> <figcaption class="pinturasE">Tradicional</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Tamalitos Doña Mary</p>
            </div>
            <p class="Precio">$18.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="EnchiladasVerdes.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://i.blogs.es/efb378/1366_2000-1/450_1000.jpg" alt="Producto6" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Enchiladas Verdes</h2>
            <div>
                <figcaption class="pinturasT">Platillo principal</figcaption> <figcaption class="pinturasE">Comida mexicana</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Cocina Mexicana</p>
            </div>
            <p class="Precio">$75.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="Elotes.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://lh5.googleusercontent.com/proxy/35RKuDQkAYEOebSZltToqppl5BZql9cXL1r_RtXAmz5os9G7Fy-xsqBUGXxmwZolhRqMhMecqT9ZdaADuSdsmMNbqN7yGkxZVNWhyEta0FLZQOxQce3Gix_kUPVwcw" alt="Producto7" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Elotes con Mayonesa</h2>
            <div>
                <figcaption class="pinturasT">Snacks</figcaption> <figcaption class="pinturasE">Callejeros</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Elotes Don Pancho</p>
            </div>
            <p class="Precio">$25.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="Quesadillas.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPdB0w8m_4QTagcIcJRB9nlA-CtHtFjtQPLQ&s" alt="Producto8" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Quesadillas</h2>
            <div>
                <figcaption class="pinturasT">Antojitos</figcaption> <figcaption class="pinturasE">Tradicional</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Antojitos Doña Tere</p>
            </div>
            <p class="Precio">$20.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="Molletes.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://i.blogs.es/22aed8/dap-1-64-/840_560.jpg" alt="Producto9" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Molletes con Queso</h2>
            <div>
                <figcaption class="pinturasT">Desayuno</figcaption> <figcaption class="pinturasE">Rápido</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Café de la Esquina</p>
            </div>
            <p class="Precio">$50.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="Guacamole.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://www.allrecipes.com/thmb/p4OH2iCMjg6-cgzI__Nwn9VR-r0=/0x512/filters:no_upscale():max_bytes(150000):strip_icc()/AR-RM-14064-easy-guacamole-ddmfs-3x4-9e4a1eb1bb34421a99db675b53a29e53.jpg" alt="Producto10" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Guacamole con Totopos</h2>
            <div>
                <figcaption class="pinturasT">Entrada</figcaption> <figcaption class="pinturasE">Mexicano</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Antojitos Don Nacho</p>
            </div>
            <p class="Precio">$45.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

<a href="TortasAguacate.html" style="color: #000;">
    <div class="Items">
        <figure>
            <img src="https://mojo.generalmills.com/api/public/content/S1yn_E4Erk2fD6n7AK618A_gmi_hi_res_jpeg.jpeg?v=be010d85&t=16e3ce250f244648bef28c5949fb99ff" alt="Producto11" oncontextmenu="return false">
        </figure>
        <div class="infoProducto">
            <h2>Torta de Aguacate</h2>
            <div>
                <figcaption class="pinturasT">Snacks</figcaption> <figcaption class="pinturasE">Rápido</figcaption>
                <br>
                <b>
                    <p style="display: contents; font-size: 11px;">Vendedor: </p>
                </b>
                <p class="Vendedor">Lonchería La Lupita</p>
            </div>
            <p class="Precio">$35.00</p>
            <button>Comprar</button>
        </div>
    </div>
</a>

                
<!--<?php
include("mostrarObras.php")
?>-->
   
</div>

    <script src="Index.js"></script>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="#">Favoritos</a>
                <a href="#">Ajustes</a>
                <a>Reseñas</a>
                <ul>
                    <li><a href="reseñasmias.html">Mias</a></li>
                    <li><a href="reseñasrecibidas.html">Recibidas</a></li>
                </ul>
                <br><br><br><br><br><br>
                <a href="Menu Login.html">Iniciar Sesion</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    </imput>

</body>

</html>