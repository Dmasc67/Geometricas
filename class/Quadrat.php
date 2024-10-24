<?php
require_once 'Figures.php';

class Quadrat implements Figura {
    private $costat;

    public function __construct($costat) {
        $this->costat = $costat;
    }

    public function calcularArea() {
        return $this->costat * $this->costat;
    }

    public function calcularPerimetre() {
        return 4 * $this->costat;
    }
}
?>
