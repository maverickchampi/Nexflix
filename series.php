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

    <?php include("structure/header.php"); ?>
    <main class="main">
        <div class="list">
        <h2 class="list-title">Las mejores series</h2>
            <button role="button" onclick="moverIzquierda('series')" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
            <div class="list-content" id="series">
                <?php include("structure/list-series.php"); ?>
            </div>
            <button role="button" onclick="moverDerecha('series')" class="flecha-derecha r-one"><i class="fas fa-angle-right"></i></button>
        </div>
    </main>
    <?php include("structure/footer.php"); ?>

</body>

</html>