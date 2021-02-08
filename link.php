<?php

class nexflix
{
    var $title;
    var $description;
    var $link;
    var $img;

    function __construct($title,$description,$link,$img){
        $this->title = $title;
        $this->description=$description;
        $this->link=$link;
        $this->img=$img;
      }
  
}

$nexflix[0] = new nexflix('El Hoyo', 
'Dos personas por nivel, un número desconocido y vertiginoso de niveles, 
una plataforma con comida para todos ellos. ¿Eres de los que piensan demasiado 
cuando están arriba? ¿O de los que no tienen agallas cuando están abajo? Si lo 
descubres demasiado tarde, no saldrás vivo del hoyo.', 
'https://damedamehoy.xyz/embed.html#MkV5QktZUy9sdGhHSnZac3JGQ05pd28yM3BhbzdQQmFMNkNKUjlHekkzUmE2aGVhNDR5cXJzejZXK3phSU91ODFZRGtEUXl5V2FEeU4vRmUrTks0cktjMXl5ZEgzTDN2cjRQTmdXMVVQZzQ9',
'https://image.tmdb.org/t/p/w1280/vq7TCblq7UfbT9DDOAqZKtlMkik.jpg');

$nexflix[1] = new nexflix('Misión Rescate', 
'Tyler Rake, un intrépido mercenario que ofrece sus servicios en el mercado negro,
 emprende una peligrosa misión cuando es contratado para rescatar al hijo 
 secuestrado de un señor del crimen de Bombay…', 
'https://damedamehoy.xyz/embed.html#VTdYSjgzRUZjc1RWSFNoT2FHMjhXTmdoVnFScHhkTlkrbFhHYkl6VHJ6b0R5WURQVnpOTURmVEduZ0R0TmRPckVEdHp3aWsybGlidzZpakhMZG82bStLdmFaK2Y3WDJOMG9KRFVVaVV2V3c9',
'https://image.tmdb.org/t/p/w1280/1R6cvRtZgsYCkh8UFuWFN33xBP4.jpg');

$nexflix[2] = new nexflix('El irlandés', 
'Frank Sheeran fue un veterano de la Segunda Guerra Mundial, estafador y sicario 
que trabajó con algunas de las figuras más destacadas del s. XX. ‘El irlandés’ 
la crónica de uno de los grandes misterios sin resolver del país: la desaparición
 del legendario sindicalista Jimmy Hoffa; un gran viaje por los turbios entresijos 
 del crimen organizado: sus mecanismos internos, rivalidades y su conexión con 
 la política', 
'https://damedamehoy.xyz/embed.html#U2VyUWV2dThDSS95a2pmaGhwbVl1QWJOWExyUkppSS9yakg3NlZGSzNlOWVvNUFRRUJRSHduY0JuNmd4cFZleXlpRk9zblp3OE5Na2ZyWUNFMGxJQnR1SDlTcDluN1E1eHBGRVhoUTN4S3M9',
'https://image.tmdb.org/t/p/w1280/iLLDiO4dbUfFEnRug8DuvFEl1NB.jpg');

$nexflix[3] = new nexflix('Malcolm y Marie', 
'Un cineasta regresa a casa para celebrar con su novia el estreno de su película,
que le augura un potencial éxito de crítica e ingresos en taquilla. La noche, de 
repente, da un giro cuando las revelaciones sobre sus relaciones comienzan a 
aflorar, poniendo a prueba la fuerza de su amor.', 
'https://damedamehoy.xyz/embed.html#N1VPc0pZaWh3dE9JS1lDRTR5b25SYjdOWWNlSWpoYjVxalFIbW9qS3pBRGs2bFNXcUdHVUhITUFwY2pDZGtvazUzdmxIcTVQRlF1Q1EwTUFQN3d0SzVEVzNHY0hlMm9EenNBWWdYZ0dCNjg9',
'https://image.tmdb.org/t/p/w1280/5LCz61vWbYNjEVxxhO2ZLniOkgU.jpg');

?>