<?php

// Creare una classe Esercito, che sarà costituita da una Difesa e da un Attacco.
// Entrambe le classi si estenderanno a loro volta e avranno i rispettivi metodi: date sfoggio alla vostra fantasia!
// Esempio: ATTACCO: Fanteria, cavalleria, arcieri, catapulte, DIFESA: Fossato, fortezza, mura di cinta ecc..
// Creare quindi degli oggetti di classe esercito che possano attaccare o difendere utilizzando i metodi delle diverse classi create
// in più
// Aggiungere un trait che mi permetta di utilizzare un determinato comportamento sia in Attacco che in Difesa Es. FUGAAAA


class Esercito {
    protected $attacco;
    protected $difesa;
    
    public function __construct(Attacco $attacco, Difesa $difesa) {
        $this->attacco = $attacco;
        $this->difesa = $difesa;
    }
    
    public function attacca() {
        echo "L'esercito sta attaccando!\n";
        $this->attacco->fanteria();
        $this->attacco->cavalleria();
        $this->attacco->arcieri();
        $this->attacco->catapulte();
    }
    
    public function difendi() {
        echo "L'esercito sta difendendo!\n";
        $this->difesa->fossato();
        $this->difesa->fortezza();
        $this->difesa->muraDiCinta();
    }
}

class Attacco {
    public function fanteria() {
        echo "Fanteria in azione!\n";
    }
    
    public function cavalleria() {
        echo "Cavalleria in azione!\n";
    }
    
    public function arcieri() {
        echo "Arcieri in azione!\n";
    }
    
    public function catapulte() {
        echo "Catapulte in azione!\n";
    }
}

class Difesa {
    public function fossato() {
        echo "Fossato pronto!\n";
    }
    
    public function fortezza() {
        echo "Fortezza pronta!\n";
    }
    
    public function muraDiCinta() {
        echo "Mura di cinta pronte!\n";
    }
}

trait Fuga {
    public function fuga() {
        echo "Fuga in corso!\n";
    }
}

// Creazione degli oggetti
$attacco = new Attacco();
$difesa = new Difesa();
$esercito = new Esercito($attacco, $difesa);

// Utilizzo dei metodi
$esercito->attacca();
$esercito->difendi();

// Utilizzo del trait Fuga
class AttaccoFuga extends Attacco {
    use Fuga;
}

$attaccoFuga = new AttaccoFuga();
$attaccoFuga->fuga();


