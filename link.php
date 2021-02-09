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

/*Exclusivas*/

$nexflix[0] = new nexflix('El Hoyo', 
'Dos personas por nivel, un número desconocido y vertiginoso de niveles, 
una plataforma con comida para todos ellos. ¿Eres de los que piensan demasiado 
cuando están arriba? ¿O de los que no tienen agallas cuando están abajo? Si lo 
descubres demasiado tarde, no saldrás vivo del hoyo.', 
'https://www.youtube.com/embed/24Lf7fmKIXI',
'https://image.tmdb.org/t/p/w1280/vq7TCblq7UfbT9DDOAqZKtlMkik.jpg');

$nexflix[1] = new nexflix('Misión Rescate', 
'Tyler Rake, un intrépido mercenario que ofrece sus servicios en el mercado negro,
 emprende una peligrosa misión cuando es contratado para rescatar al hijo 
 secuestrado de un señor del crimen de Bombay…', 
'https://www.youtube.com/embed/18fMBzX5PdA',
'https://image.tmdb.org/t/p/w1280/1R6cvRtZgsYCkh8UFuWFN33xBP4.jpg');

$nexflix[2] = new nexflix('El irlandés', 
'Frank Sheeran fue un veterano de la Segunda Guerra Mundial, estafador y sicario 
que trabajó con algunas de las figuras más destacadas del s. XX. ‘El irlandés’ 
la crónica de uno de los grandes misterios sin resolver del país: la desaparición
 del legendario sindicalista Jimmy Hoffa; un gran viaje por los turbios entresijos 
 del crimen organizado: sus mecanismos internos, rivalidades y su conexión con 
 la política', 
'https://www.youtube.com/embed/B3cJXk9IaH0',
'https://image.tmdb.org/t/p/w1280/iLLDiO4dbUfFEnRug8DuvFEl1NB.jpg');

$nexflix[3] = new nexflix('Malcolm y Marie', 
'Un cineasta regresa a casa para celebrar con su novia el estreno de su película,
que le augura un potencial éxito de crítica e ingresos en taquilla. La noche, de 
repente, da un giro cuando las revelaciones sobre sus relaciones comienzan a 
aflorar, poniendo a prueba la fuerza de su amor.', 
'https://www.youtube.com/embed/4hPC4Wee_oY',
'https://image.tmdb.org/t/p/w1280/5LCz61vWbYNjEVxxhO2ZLniOkgU.jpg');

$nexflix[4] = new nexflix('El stand de los besos', 
'Elle nunca imaginó que el primer beso daría para tanto. Pero, a pesar de que ha conseguido salir 
con el chico más guapo del instituto, está a punto de perder a su mejor amigo de toda la vida.', 
'https://www.youtube.com/embed/L5nYYBxg52A',
'https://image.tmdb.org/t/p/w1280/h77CizIf7vb5CO8SUuhcKSMyXx1.jpg');

$nexflix[5] = new nexflix('Historia de un matrimonio', 
'Un director de teatro y su mujer, actriz, luchan por superar un divorcio 
que les lleva al extremo tanto en lo personal como en lo creativo.', 
'https://www.youtube.com/embed/pFg0Rk3L9SY',
'https://image.tmdb.org/t/p/w1280/4PCO7tewIGnE6ySjVf2DbJ3pjqq.jpg');

$nexflix[6] = new nexflix('Bright', 
'Ambientada en un mundo en el que las criaturas fantásticas conviven con los 
humanos, y en el que la policía tiene un departamento especial dedicado a 
crímenes que involucran magia. Un policía humano (Will Smith) se ve obligado 
a trabajar con un orco (Joel Edgerton), el primero en entrar en el cuerpo de 
policía.', 
'https://www.youtube.com/embed/6EZCBSsBxko',
'https://image.tmdb.org/t/p/w1280/b09HLFIifMNljI7NI9CJgm2gN1Y.jpg');

$nexflix[7] = new nexflix('Los dos papas', 
'Es el año 2012. Frustrado por el rumbo que está tomando la iglesia, 
el cardenal Bergoglio solicita el permiso del Papa Benedicto 
para retirarse. Sin embargo, el Papa Benedicto convocará a su crítico y 
futuro sucesor en Roma. Entre ambos se sucederán extensas charlas para 
buscar posturas en común.', 
'https://www.youtube.com/embed/epf-XMQ5Q8M',
'https://image.tmdb.org/t/p/w1280/bOPessdyd0dChHy70FM8Om7CgDg.jpg');

/*Películas*/

$nexflix[8] = new nexflix('The Dark Knight Rises', 
'Hace ocho años que Batman desapareció, dejando de ser un héroe para 
convertirse en un fugitivo. Al asumir la culpa por la muerte del fiscal 
del distrito Harvey Dent, el Caballero Oscuro decidió sacrificarlo todo.', 
'https://www.youtube.com/embed/c_BZOsbX3MI',
'http://2.bp.blogspot.com/-dowhy5K1QSg/UCGNbtrUxJI/AAAAAAAABn4/2xXD7_HBFJs/s1600/The+dark+knight+rises+01.jpg');

$nexflix[9] = new nexflix('Bob Esponja: Un héroe al rescate', 
'Los amigos son lo más importante para Bob Esponja, por lo que no dudará 
en salir de la comodidad de su hogar en Fondo de Bikini.', 
'https://www.youtube.com/embed/BUFKUy_c5Tw',
'https://image.tmdb.org/t/p/w1280/bt4xA9WZE9P1wiRILRFt0Zh2wmV.jpg');

$nexflix[10] = new nexflix('Soul', 
'¿Alguna vez te has preguntado de dónde provienen tu pasión, tus sueños y 
tus intereses? ¿Qué es lo que te hace ser… tú? Viaja desde las calles de 
Nueva York a los reinos cósmicos para descubrir las respuestas a las preguntas 
más importantes de la vida.', 
'https://www.youtube.com/embed/xOsLIiBStEs',
'https://image.tmdb.org/t/p/w1280/kf456ZqeC45XTvo6W9pW5clYKfQ.jpg');

$nexflix[11] = new nexflix('Avengers: Endgame', 
'Tras los sucesos de “Vengadores: Infinity War”, los superhéroes que 
sobrevivieron a Thanos se reunen para poner en práctica un plan definitivo 
que podría acabar con el villano definitivamente. No saben si funcionará, 
pero es su única oportunidad de intentarlo.', 
'https://www.youtube.com/embed/TcMBFSGVi1c',
'https://image.tmdb.org/t/p/w1280/7RyHsO4yDXtBv1zUU3mTpHeQ0d5.jpg');

$nexflix[12] = new nexflix('John Wick 3: Parabellum', 
'John Wick regresa a la acción, solo que esta vez con una recompensa de 
14 millones de dólares sobre su cabeza y con un ejército de mercenarios 
intentando darle caza..', 
'https://www.youtube.com/embed/M7XM597XO94',
'https://image.tmdb.org/t/p/w1280/5Wo36oWzdblY5Fgvbws0L43trRq.jpg');

$nexflix[13] = new nexflix('Wonder Woman 1984', 
'En 1984, en plena guerra fría, Diana Prince, conocida como Wonder Woman 
se enfrenta al empresario Maxwell Lord y a su antigua amiga Barbara Minerva 
/ Cheetah, una villana que posee fuerza y agilidad sobrehumanas.', 
'https://www.youtube.com/embed/w9IE5apTPrc',
'https://image.tmdb.org/t/p/w1280/srYya1ZlI97Au4jUYAktDe3avyA.jpg');

$nexflix[14] = new nexflix('The Amazing Spiderman', 
'Un estudiante de secundaria que fue abandonado por sus padres cuando era niño,
 dejándolo a cargo de su tío Ben y su tía May. Como la mayoría de los 
 adolescentes de su edad, Peter trata de averiguar quién es y qué quiere llegar 
 a ser.', 
'https://www.youtube.com/embed/eou9olJruK4',
'https://www.wallpapertip.com/wmimgs/4-41057_amazing-spider-man-1-poster.jpg');

$nexflix[15] = new nexflix('Cómo entrenar a tu dragón', 
'Ambientada en el mítico mundo de los rudos vikingos y los dragones salvajes, 
y basada en el libro infantil de Cressida Cowell, esta comedia de acción narra 
la historia de Hipo, un vikingo adolescente.', 
'https://www.youtube.com/embed/DWXJdezkThk',
'https://image.tmdb.org/t/p/w1280/kxklJL1v8MYEU5xdU6W5VvmBwVz.jpg');

/*Series*/

$nexflix[16] = new nexflix('Wanda Vision', 
'Bruja Escarlata y Visión de Marvel Studios combina el estilo de 
«sitcom clásicas» con el Universo Cinematográfico de Marvel. Wanda Maximoff 
y Visión, dos seres súper poderosos que viven sus vidas cotidianas ideales, 
comienzan a sospechar que no todo es como parece.', 
'https://www.youtube.com/embed/UuhqbcMNrME',
'https://image.tmdb.org/t/p/w1280//lOr9NKxh4vMweufMOUDJjJhCRHW.jpg');

$nexflix[17] = new nexflix('The Walking Dead', 
'“The Walking Dead” está ambientada en un futuro apocalíptico con la Tierra 
devastada por el efecto de un cataclismo, que ha provocado la mutación en 
zombies de la mayor parte de los habitantes del planeta.', 
'https://www.youtube.com/embed/aQvmRkxqceA',
'https://www.hola.com/imagenes/actualidad/20200629171176/quien-cuidaba-rick-grimes-walking-dead-gt/0-841-916/portada-walking-t.jpg?filter=w600&filter=ds75');

$nexflix[18] = new nexflix('Breaking Bad', 
'El profesor calmado de química de una secundaria, Walter White cree que 
su vida no puede ser peor. Su salario apenas le alcanza para sostener a su 
familia, una situación que no mejora cuando su esposa da a luz y su hijo 
adolescente sufre de parálisis cerebral, pero Walter queda anonadado cuando 
se entera que tiene un cáncer terminal.', 
'https://www.youtube.com/embed/mXd1zTwcQ18',
'https://p4.wallpaperbetter.com/wallpaper/12/292/881/breaking-bad-tv-wallpaper-preview.jpg');

$nexflix[19] = new nexflix('Game of Thrones', 
'Juego de Tronos es una serie de televisión de drama y fantasía creada para 
la HBO por David Benioff y D. B. Weiss. Es una adaptación de la saga de novelas 
de fantasía Canción de Hielo y Fuego de George R. R. Martin. La primera de las 
novelas es la que da nombre a la serie.', 
'https://www.youtube.com/embed/BpJYNVhGf1s',
'https://image.tmdb.org/t/p/w1280//qLsx6viZ0NBYQ6nhZ4OOrWXuiBj.jpg');

$nexflix[20] = new nexflix('La Casa de Papel', 
'Un enigmático personaje llamado el Profesor planea algo grande: llevar a cabo 
el mayor atraco de la historia. Para ello recluta una banda de ocho personas que 
reúnen un único requisito, ninguno tiene nada que perder.', 
'https://www.youtube.com/embed/To_kVMMu-Ls',
'https://i.blogs.es/458cc7/casa-papel-parte-4/1366_2000.jpeg');

$nexflix[21] = new nexflix('Gambito de Dama', 
'Cuenta la historia de Beth Harmon, una joven prodigio del ajedrez que ha 
tenido una infancia complicada, por lo que sus habilidades sociales no son las 
mejores y además sufre de cierta tendencia a la adicción de drogas, medicamentos 
o alcohol', 
'https://www.youtube.com/embed/lbleRbyGKL4',
'https://i1.wp.com/hiramnoriega.com/wp-content/uploads/2020/10/2354543654.jpg?fit=900%2C506&ssl=1');

$nexflix[22] = new nexflix('The Boys', 
'Un grupo de vigilantes se dispuso a acabar con los superhéroes corruptos 
que abusan de sus superpoderes.', 
'https://www.youtube.com/embed/tcrNsIaQkb4',
'https://image.tmdb.org/t/p/w1280//bI37vIHSH7o4IVkq37P8cfxQGMx.jpg');

$nexflix[23] = new nexflix('The End of the F***ing World', 
'Un psicópata adolescente y una chica rebelde con sed de aventura emprenden 
un accidentado viaje por carretera en esta serie de humor negro basada en una 
novela gráfica.', 
'https://www.youtube.com/embed/1mhWzjgbLO0',
'https://image.tmdb.org/t/p/w1280//up1HuhhJnzrJ8El0ZJqpKNf0piL.jpg');


?>