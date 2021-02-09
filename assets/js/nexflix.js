function moverDerecha(id) {
  const fila = document.getElementById(id);
  fila.scrollLeft += fila.offsetWidth;
}
function moverIzquierda(id) {
  const fila = document.getElementById(id);
  fila.scrollLeft -= fila.offsetWidth;
}
function detener() {
  let containerElement = document.getElementById('popup');
  let iframe_tag = containerElement.querySelector("iframe");
  let video_tag = containerElement.querySelector("video");
  if (iframe_tag) {
    let iframeSrc = iframe_tag.src;
    iframe_tag.src = iframeSrc;
  }
  if (video_tag) {
    video_tag.pause();
  }
}
