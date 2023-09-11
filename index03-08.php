<?php

// Scrivere una funzione che faccia la somma di tutti i numeri in essa passati come parametri, fare in modo che accetti qualsiasi quantità di parametri (**hint** spread operator)



function sommaNumeri(...$numeri) {
    return array_sum($numeri);
}

$risultato = sommaNumeri(1, 2, 3, 4, 5);
echo "La somma dei numeri è: " . $risultato;
