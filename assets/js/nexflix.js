function moverDerecha(id) {
  const fila = document.getElementById(id);
  fila.scrollLeft += fila.offsetWidth;
}
function moverIzquierda(id) {
  const fila = document.getElementById(id);
  fila.scrollLeft -= fila.offsetWidth;
}
