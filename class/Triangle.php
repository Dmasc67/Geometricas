<?php
require_once 'Figures.php';

class Triangle implements Figura {
    private $costat1;
    private $costat2;
    private $costat3;

    public function __construct($costat1, $costat2, $costat3) {
        $this->costat1 = $costat1;
        $this->costat2 = $costat2;
        $this->costat3 = $costat3;
    }

    public function calcularArea() {
        // Fòrmula d'Heró per calcular l'àrea d'un triangle donats tres costats
        $semiperimetre = $this->calcularPerimetre() / 2;
        return sqrt($semiperimetre * ($semiperimetre - $this->costat1) * ($semiperimetre - $this->costat2) * ($semiperimetre - $this->costat3));
    }

    public function calcularPerimetre() {
        return $this->costat1 + $this->costat2 + $this->costat3;
    }
}
?>
