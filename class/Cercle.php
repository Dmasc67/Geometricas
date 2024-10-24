<?php
require_once 'Figures.php';

class Cercle implements Figura {
    private $radi;

    public function __construct($radi) {
        $this->radi = $radi;
    }

    public function calcularArea() {
        return pi() * pow($this->radi, 2);
    }

    public function calcularPerimetre() {
        return 2 * pi() * $this->radi;
    }
}
?>