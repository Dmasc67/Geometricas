<?php
require_once 'Figures.php';

class Rectangle implements Figura {
    private $ample;
    private $llarg;

    public function __construct($ample, $llarg) {
        $this->ample = $ample;
        $this->llarg = $llarg;
    }

    public function calcularArea() {
        return $this->ample * $this->llarg;
    }

    public function calcularPerimetre() {
        return 2 * ($this->ample + $this->llarg);
    }
}
?>
