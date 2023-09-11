<?php

// 04/08/2023 
// ESERCIZI PER IL WEEKEND



// Funzione per calcolare l'area di un cerchio dato il raggio
function calcolaAreaCerchio($raggio) {
    $area = M_PI * pow($raggio, 2);
    return $area;
}



// Funzione per calcolare l'ipotenusa di un triangolo dati i cateti
function calcolaIpotenusa($cateto1, $cateto2) {
    $ipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
    return $ipotenusa;
}



// Funzione per generare un numero random tra due valori assegnati
function generaNumeroRandom($min, $max) {
    $numeroRandom = rand($min, $max);
    return $numeroRandom;
}



// Funzione per implementare l'algoritmo descritto
function algoritmo($numero) {
    $resultArray = array();
    while ($numero != 1) {
        if ($numero % 2 == 0) {
            $numero /= 2;
        } else {
            $numero = $numero * 3 + 1;
        }
        array_push($resultArray, $numero);
    }
    return $resultArray;
}



// Funzione per determinare se la somma degli elementi di un array è pari o dispari
function verificaPariDispari($array) {
    $somma = array_sum($array);
    if ($somma % 2 == 0) {
        return "pari";
    } else {
        return "dispari";
    }
}



// Esempi di utilizzo delle funzioni
$raggio = 5;
$cateto1 = 3;
$cateto2 = 4;
$min = 10;
$max = 20;
$numeroIniziale = 7;
$arrayNumeri = algoritmo($numeroIniziale);

echo "Area del cerchio con raggio $raggio: " . calcolaAreaCerchio($raggio) . "<br>";
echo "Ipotenusa del triangolo con cateti $cateto1 e $cateto2: " . calcolaIpotenusa($cateto1, $cateto2) . "<br>";
echo "Numero random tra $min e $max: " . generaNumeroRandom($min, $max) . "<br>";
echo "Risultati dell'algoritmo con numero iniziale $numeroIniziale: " . implode(", ", $arrayNumeri) . "<br>";
echo "Verifica se la somma degli elementi dell'array è pari o dispari: " . verificaPariDispari($arrayNumeri);

?>
