<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Soy Maverick Champi y estoy recreando Netlix" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexflix | Maverick</title>
    <link rel="icon" href="assets/images/nexflix.ico">
    <link rel="stylesheet" href="assets/css/nexflix.css">
</head>

<body>

    <?php include("link.php") ?>
    <?php include("structure/header.php"); ?>
    <?php $nex = $nexflix[2]; ?> <!-- Unica linea a cambiar -->
    <main>
        <div class="pelicula-principal" id="pelicula-principal">
            <div class="contenedor">
                <h3 class="titulo"><?php echo $nex->title ?></h3>
                <p class="descripcion">
                    <?php echo $nex->description ?>
                </p>
                <a href="#search" title="search"><button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button></a>
                <a href="index.php" role="button" class="boton"><i class="fas fa-plus"></i>Explorar</a>
            </div>
        </div>
    </main>
    <div class="busqueda">
        <div id="search" class="pop-overlay">
            <div class="popup">
                <iframe src='<?php echo $nex->link ?>' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <a class="close" href="#close">×</a>
        </div>
    </div>
    <section class="section">
        <div class="list">
            <h2 class="list-title">Recomendaciones</h2>
            <button role="button" onclick="moverIzquierda('movies')" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
            <div class="list-content" id="movies">
                <?php include("structure/list-movies.php"); ?>
            </div>
            <button role="button" onclick="moverDerecha('movies')" class="flecha-derecha r-four"><i class="fas fa-angle-right"></i></button>
        </div>
    </section>
    <?php include("structure/footer.php"); ?>

    <script>
        var img = document.getElementById("pelicula-principal");
        img.style.background = "linear-gradient(rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.6) 100%),url('<?php echo $nex->img ?>')";
        img.style.backgroundPosition = "center center"; 
        img.style.backgroundSize = "cover";
    </script>
</body>

</html>