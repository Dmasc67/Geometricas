<?php

// Classe base FiguraGeometrica
class FiguraGeometrica {
    protected $tipoFigura;
    protected $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function calcularArea() {
        return "Aquest mètode ha de ser sobreescrit.";
    }

    public function calcularPerimetre() {
        return "Aquest mètode ha de ser sobreescrit.";
    }

    public function __toString() {
        return "Figura: " . $this->tipoFigura;
    }
}

// Classe Triangulo
class Triangulo extends FiguraGeometrica {
    private $lado2;
    private $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct("Triangulo", $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function calcularArea() {
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }

    public function calcularPerimetre() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    public function __toString() {
        return "Triangle amb costats $this->lado1, $this->lado2, $this->lado3";
    }
}

// Classe Rectangulo
class Rectangulo extends FiguraGeometrica {
    private $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectangulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }

    public function calcularPerimetre() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function __toString() {
        return "Rectangle amb costats $this->lado1 i $this->lado2";
    }
}

// Classe Cuadrado
class Cuadrado extends FiguraGeometrica {

    public function __construct($lado1) {
        parent::__construct("Cuadrado", $lado1);
    }

    public function calcularArea() {
        return pow($this->lado1, 2);
    }
    public function calcularPerimetre() {
        return 4 * $this->lado1;  
    }
    public function __toString() {
        return "Quadrat amb costat $this->lado1";
    }
}

// Classe Circulo
class Circulo extends FiguraGeometrica {
    private $radio;

    public function __construct($radio) {
        parent::__construct("Circulo", $radio);
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetre() {
        return 2 * pi() * $this->radio;
    }

    public function __toString() {
        return "Cercle amb radi $this->radio";
    }
}
