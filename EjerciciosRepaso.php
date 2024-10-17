<h3>Ejercicio 1</h3>
<?php
// Creo un array para guardar los valores que salgan en cada tirada de los dados.
$dados = [];
$tiradas = 5;
$par = 0;
$impar = 0;
echo "<strong>$tiradas dados</strong><br>";

// Cada tirada será un número al azar que se guardará en el array
for ($i = 0; $i < $tiradas; $i++) {
    $dados[$i] = rand(1, 6);
    // Necesito ir contando el número de pares e impares
    // Es par si el módulo del número del dado / 2 es 0
    if ($dados[$i] % 2 == 0) {
        $par++;
    } else {
        $impar++;
    }

    /* Mostramos la imagen con el número al azar que tenga el dado.
        Como cada imagen es un número, estaremos mostrando el "número_de_
        la_imagen.svg"*/
    echo "<img src='img/$dados[$i].svg' alt='Dado $dados[$i]'>";
}

echo "<br>Han salido $par números pares y $impar números impares.";
?>

<h3>Ejercicio 2</h3>
<?php
// En este caso cada jugador tendrá su dado
$dadoJ1 = rand(1, 6);
$dadoJ2 = rand(1, 6);

/* Como en el ejercicio anterior, mostramos la imagen correspondiente
    al número del dado*/
echo "<p><strong>Jugador 1:</strong></p>";
echo "<img src='img/$dadoJ1.svg' alt='DadoJ1'>";

echo "<p><strong>Jugador 2:</strong></p>";
echo "<img src='img/$dadoJ2.svg' alt='DadoJ2'>";

// Determinamos que jugador ha ganado, o si han empatado.
if ($dadoJ1 > $dadoJ2) {
    echo "<p>Ha ganado el jugador 1.</p>";
} else if ($dadoJ1 < $dadoJ2) {
    echo "<p>Ha ganado el jugador 2.</p>";
} else {
    echo "<p>Ha habido un empate.</p>";
}
?>

<h3>Ejercicio 3</h3>
<?php
/* En este caso cada jugador tendrá un array para sus dados que guardan
    los valores de cada tirada*/
$dadosJ1 = [];
$dadosJ2 = [];
$tiradas = 4;
$victoriasJ1 = 0;
$victoriasJ2 = 0;
$empates = 0;
echo "<p><strong>Jugador 1:</strong></p>";

/* Cada tirada será un número al azar que se guardará en el array del
    dado del jugador correspondiente*/
for ($i = 0; $i < $tiradas; $i++) {
    $dadosJ1[$i] = rand(1, 6);

    /* Mostramos la imagen con el número al azar que tenga el dado del 
        jugador 1 y jugador 2.
        Como cada imagen es un número, estaremos mostrando el "número_de_
        la_imagen.svg"*/
    echo "<img src='img/$dadosJ1[$i].svg' alt='Dado $dados[$i]'>";
}

echo "<p><strong>Jugador 2:</strong></p>";

for ($i = 0; $i < $tiradas; $i++) {
    $dadosJ2[$i] = rand(1, 6);
    echo "<img src='img/$dadosJ2[$i].svg' alt='Dado $dados[$i]'>";
}

for ($i = 0; $i < $tiradas; $i++) {
    /* Sumamos una victoria al jugador 1 si gana este, al jugador 2 si
        gana el, y de lo contrario un empate.*/
    if ($dadosJ1[$i] > $dadosJ2[$i]) {
        $victoriasJ1++;
    } else if ($dadosJ1[$i] < $dadosJ2[$i]) {
        $victoriasJ2++;
    } else {
        $empates++;
    }
}

if ($empates != 0 || $victoriasJ1 > 0 || $victoriasJ2 > 0) {
    echo "<p>El jugador 1 ha ganado <strong>$victoriasJ1</strong> veces, el jugador 2 ha ganado <strong>$victoriasJ2</strong> veces y los jugadores han empatado <strong>$empates</strong> veces.</p>";
} else {
    echo "<p>Han empatado siempre.</p>";
}
?>

<h3>Ejercicio 4</h3>
<?php
/* Para este ejercicio utilizaré los repositorios de GitHub para compartir el código con varios participantes.
    Después de iniciar sesión en nuestra cuenta de GitHub con VSC, realizo un primer commit para publicarlo en GitHub.*/

//Los dos primeros puntos los hara Ricardo 
//Se añade esta funcion por parte de Ricardo, para agilizar el proceso y adaptar un poco el codigo 
function enseniarDado($dado)
{
    switch ($dado) {
        case 1:
            echo "<img src='img/1.svg'>";
            break;
        case 2:
            echo "<img src='img/2.svg'>";
            break;
        case 3:
            echo "<img src='img/3.svg'>";
            break;
        case 4:
            echo "<img src='img/4.svg'>";
            break;
        case 5:
            echo "<img src='img/5.svg'>";
            break;
        case 6:
            echo "<img src='img/6.svg'>";
            break;
    };
}

$dado1 = []; //Declaramos un array vacio para guardar los valores de las 6 tiradas
$dado2 = mt_rand(1, 6); //Lanzamos enseguida el dado 2
echo "<br><h3>Tirada de 3 dados</h3>";
for ($i = 0; $i < 6; $i++) {
    $dado = mt_rand(1, 6); //Lanzamos un dado
    enseniarDado($dado); //Enseñamos el valor de ese dado
    array_push($dado1, $dado); //Acto seguido ese dado se guarda en el array
}

echo "<br><h3>Dado a eliminar</h3>";
enseniarDado($dado2); //Se enseña el valor del segundo dado


?>