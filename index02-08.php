




<?php
// Dato un array di numeri, calcolare la media dei numeri pari
$numbers = [10, 7, 4, 15, 8, 21, 6];
$sum = 0;
$count = 0;

foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        $sum += $number;
        $count++;
    }
}
if ($count > 0) {
    $average = $sum / $count;
    echo "La media dei numeri pari è: $average<br>";
} else {
    echo "Non ci sono numeri pari nell'array.<br>";

}



// Dato un array di utenti, stampare un messaggio di saluto in base al genere
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
];

 




foreach ($users as $user) {
    $gender = strtolower($user['gender']);
    $salutation = "Buongiorno";

    if ($gender === 'f') {
        $salutation .= " Sig.ra";
    } elseif ($gender === 'm') {
        $salutation .= " Sig.";
    }

    $salutation .= " " . $user['name'] . " " . $user['surname'];
    echo "$salutation<br>";
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY85";
    } elseif ($i % 3 == 0) {
        echo "PHP";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT";
    } else {
        echo $i;
    }

    echo " ";
}

?>




