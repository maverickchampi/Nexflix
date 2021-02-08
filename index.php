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
  <header class="header">
    <img src="assets/images/nexflix-logo.png" height="30" alt="Logo Netflix">
    <nav>
      <ul class="navigation">
        <li class="navigation-item">
          <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 2.09961L1 12H4V21H11V15H13V21H20V12H23L12 2.09961ZM12 4.79102L18 10.1914V11V19H15V13H9V19H6V10.1914L12 4.79102Z"
                fill="black" />
            </svg><span>Inicio</span></a>
        </li>
        <li class="navigation-item">
          <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
                <path
                  d="M4 3C2.897 3 2 3.897 2 5V19C2 20.103 2.897 21 4 21H12V19H4V5H20V13.2852L22 14.4082V5C22 3.897 21.103 3 20 3H4ZM6.00195 7V9H8V7H6.00195ZM16 7V9H18V7H16ZM6 11V13H8V11H6ZM15.0859 13C14.514 13.019 14 13.492 14 14.1445V22.8555C14 23.7255 14.9132 24.2764 15.6602 23.8574L23.4199 19.502C24.1939 19.067 24.1939 17.932 23.4199 17.498L15.6602 13.1426C15.4734 13.0378 15.2766 12.9937 15.0859 13ZM6 15V17H8V15H6Z"
                  fill="black" />
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="24" height="24" fill="white" />
                </clipPath>
              </defs>
            </svg><span>Películas</span></a>
        </li>
        <li class="navigation-item">
          <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
                <path
                  d="M4 3C2.897 3 2 3.897 2 5V19C2 20.103 2.897 21 4 21H12V19H4V5H20V13.2852L22 14.4082V5C22 3.897 21.103 3 20 3H4ZM6.00195 7V9H8V7H6.00195ZM16 7V9H18V7H16ZM6 11V13H8V11H6ZM15.0859 13C14.514 13.019 14 13.492 14 14.1445V22.8555C14 23.7255 14.9132 24.2764 15.6602 23.8574L23.4199 19.502C24.1939 19.067 24.1939 17.932 23.4199 17.498L15.6602 13.1426C15.4734 13.0378 15.2766 12.9937 15.0859 13ZM6 15V17H8V15H6Z"
                  fill="black" />
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="24" height="24" fill="white" />
                </clipPath>
              </defs>
            </svg>
            <span>Series</span></a>
        </li>
        <li class="navigation-item">
          <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9 2C5.14585 2 2 5.14585 2 9C2 12.8541 5.14585 16 9 16C10.748 16 12.345 15.348 13.5742 14.2812L14 14.707V16L20 22L22 20L16 14H14.707L14.2812 13.5742C15.348 12.345 16 10.748 16 9C16 5.14585 12.8541 2 9 2ZM9 4C11.7733 4 14 6.22673 14 9C14 11.7733 11.7733 14 9 14C6.22673 14 4 11.7733 4 9C4 6.22673 6.22673 4 9 4Z"
                fill="black" />
            </svg>
            <span>Buscar</span></a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <div class="list">
      <h2 class="list-title">Exclusivas de Nexflix</h2>
      <button role="button" onclick="moverIzquierda('exclusivas')" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
      <div class="list-content" id="exclusivas">
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/el-hoyo.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/mision-resacte.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/el-irlandes.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/malcom-y-marie.jpeg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/El_stand_de_los_besos.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/historia-de-un-matrimonio.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/Bright.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/los-dos-papas.jpg">
          </a>
        </div>
      </div>
      <button role="button" onclick="moverDerecha('exclusivas')" class="flecha-derecha r-one"><i class="fas fa-angle-right"></i></button>
    </div>
    <div class="list">
      <h2 class="list-title">Las mejores películas</h2>
      <button role="button" onclick="moverIzquierda('movies')"  class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
      <div class="list-content" id="movies">
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/The Dark Knight Rises.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/bob.png">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/soul.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/endgame.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/john.png">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/ww1984.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/spider-man.png">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/dragon.png">
          </a>
        </div>
      </div>
      <button role="button" onclick="moverDerecha('movies')" class="flecha-derecha r-two"><i class="fas fa-angle-right"></i></button>
    </div>
    <div class="list">
      <h2 class="list-title">Las mejores series</h2>
      <button role="button" onclick="moverIzquierda('series')"  class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
      <div class="list-content" id="series">
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/wandavision.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/The_Walking_Dead.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/breaking bad.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/game of thrones.jpeg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/La_casa_de_papel.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/gambito de dama.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/the boys.jpg">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="assets/images/covers/the end of the fing world.jpg">
          </a>
        </div>
      </div>
      <button role="button" onclick="moverDerecha('series')" class="flecha-derecha r-three"><i class="fas fa-angle-right"></i></button>
    </div>
  </main>

  <footer class="footer">
    <div class="credits">
      Diseñado con 💗 por
      <a href="https://maverickchampi.com/" target="_blank">maverickchampi.com</a>
    </div>
  </footer>

  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="assets/js/nexflix.js"></script>
  <script src="assets/js/block.js"></script>
</body>

</html>