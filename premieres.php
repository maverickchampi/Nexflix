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
      <h2 class="list-title">Próximos películas</h2>
      <button role="button" onclick="moverIzquierda('premieres-movies')" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
      <div class="list-content" id="premieres-movies">
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/godzillavskong.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/topgun.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/f9.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/blackwidow.png">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/spacejam2.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/Raya_and_the_Last_Dragon.jpg">
          </a>
        </div>
      </div>
      <button role="button" onclick="moverDerecha('premieres-movies')" class="flecha-derecha r-one"><i class="fas fa-angle-right"></i></button>
    </div>
    <div class="list">
      <h2 class="list-title">Próximos series</h2>
      <button role="button" onclick="moverIzquierda('premieres-series')" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
      <div class="list-content" id="premieres-series">
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/supermanylois.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/loki.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/thefalconandthewintersoldier.jpg">
          </a>
        </div>
      <button role="button" onclick="moverDerecha('premieres-series')" class="flecha-derecha r-two"><i class="fas fa-angle-right"></i></button>
    </div>
  </main>
  <?php include("structure/footer.php"); ?>

</body>

</html>