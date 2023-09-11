<?php

// 01-Creare una scuola in OOP, con questa gerarchia di classi: Person classe parent, con classi figlie Student e Teacher. Dare la possibilità di contare ogni oggetto nuovo creato con un metodo counter.



class Person {
    protected static $counter = 0;

    public function __construct() {
        self::$counter++;
    }

    public function __destruct() {
        self::$counter--;
    }

    public static function getCounter() {
        return self::$counter;
    }
}

class Student extends Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        parent::__construct();
        $this->name = $name;
        $this->age = $age;
    }

    public function displayInfo() {
        echo "Student Name: $this->name, Age: $this->age\n";
    }
}

class Teacher extends Person {
    private $name;
    private $subject;

    public function __construct($name, $subject) {
        parent::__construct();
        $this->name = $name;
        $this->subject = $subject;
    }

    public function displayInfo() {
        echo "Teacher Name: $this->name, Subject: $this->subject\n";
    }
}

$student1 = new Student("Alice", 20);
$student2 = new Student("andrea", 21);

$teacher1 = new Teacher("prof.bianchi", "Matematica");
$teacher2 = new Teacher("prof.Rossi", "Sciennze");

$student1->displayInfo();
$student2->displayInfo();
$teacher1->displayInfo();
$teacher2->displayInfo();

echo "Total Persons: " . Person::getCounter() . "\n";








// 02-Riprodurre una concessionaria di automobili in OOP , con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta). Seguite questa gerarchia di classi: Automobile, SUV, Utilitaria, Sportiva, e tenere il conto degli oggetti creati per ogni classe


class Automobile {
    protected static $counter = 0;

    protected $marca;
    protected $modello;
    protected $numeroPorte;
    protected $prezzo;

    public function __construct($marca, $modello, $numeroPorte, $prezzo) {
        self::$counter++;
        $this->marca = $marca;
        $this->modello = $modello;
        $this->numeroPorte = $numeroPorte;
        $this->prezzo = $prezzo;
    }

    public function getInfo() {
        return "Marca: $this->marca, Modello: $this->modello, Numero Porte: $this->numeroPorte, Prezzo: $this->prezzo";
    }

    public static function getCounter() {
        return self::$counter;
    }
}

class SUV extends Automobile {
    protected $tipo = "SUV";
}

class Utilitaria extends Automobile {
    protected $tipo = "Utilitaria";
}

class Sportiva extends Automobile {
    protected $tipo = "Sportiva";
}

$autoSUV = new SUV("Audi", "Q5", 5, 50000);
$autoUtilitaria = new Utilitaria("Fiat", "Panda", 3, 15000);
$autoSportiva = new Sportiva("Ferrari", "488 GTB", 2, 250000);

echo $autoSUV->getInfo() . "\n";
echo $autoUtilitaria->getInfo() . "\n";
echo $autoSportiva->getInfo() . "\n";

echo "Totale SUV: " . SUV::getCounter() . "\n";
echo "Totale Utilitarie: " . Utilitaria::getCounter() . "\n";
echo "Totale Sportive: " . Sportiva::getCounter() . "\n";
echo "Totale Automobili: " . Automobile::getCounter() . "\n";
