<!-- /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */ -->
<?php

class Persona {

    private $nome;
    private $cognome;
    private $dataNascita;

    public function __construct($nome, $cognome) {
        $this -> nome = $nome;
        $this -> cognome = $cognome;
    }

    public function getNome() {
        return $this -> nome; 
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function getCognome() {
        return $this -> cognome; 
    }

    public function setCognome($cognome) {
        $this -> cognome = $cognome;
    }

    public function getDataNascita() {
        return $this -> dataNascita; 
    }

    public function setDataNascita($dataNascita) {
            $this -> dataNascita = $dataNascita; 
    }

    public function printFullPerson() {
        return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getDataNascita();
    }

    public function __toString() {
        return $this -> printFullPerson();
    }
}

$p1 = new Persona("Hermione", "Granger"); 
$p1 -> setDataNascita("13 feb 1995");
$p2 = new Persona("Ron", "Weasley");
$p2 -> setDataNascita("15 ago 1996");
$p3 = new Persona("Harry", "Potter");
$p3 -> setDataNascita("20 sett 1994");

echo "p1: " . $p1 . "</br>";
echo "p2: " . $p2 . "</br>";
echo "p3: " . $p3 . "</br>";

echo "</br>" . "------------------------------------" . "</br>";
class Employee extends Persona {
    private $stipendio;
    private $dataAssunzione;

    public function __construct($nome, $cognome, $stipendio) {
        parent::__construct($nome, $cognome) ;
        $this -> stipendio = $stipendio;
    }

    public function getStipendio() {
        return $this -> stipendio;
    }

    public function setStipendio($stipendio) {
        $this -> stipendio = $stipendio;
    }

    public function getDataAssunzione() {
        return $this -> dataAssunzione;
    }

    public function setDataAssunzione($dataAssunzione) {
        $this -> dataAssunzione = $dataAssunzione;
    }

    public function printFullEmployee() {
        return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getStipendio() . "$" . " " . "(" . $this -> getDataAssunzione() . ")";
    }

    public function __toString() {
        return $this -> printFullEmployee();
    }
}

$e1 = new Employee("Pinco", "Pallino", "1200");
$e1 -> setdataAssunzione("14 / 09 / 2010");
$e2 = new Employee("Mario", "Rossi", "1400");
$e2 -> setdataAssunzione("22 / 12 / 2011");
echo "e1: " . $e1 . "</br>";
echo "e2: " . $e2;

?>