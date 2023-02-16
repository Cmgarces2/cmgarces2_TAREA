<?php
class cuadrado extends figura implements formulas {
	private $lado;
    private $tipo;
    
    public function __construct($lado) {
        $this->lado = $lado;
        $this->tipo = "Cuadrado";
    }
    
    public function GetArea() {
        return pow($this->lado, 2);
    }
    
    public function GetPerimetro() {
        return $this->lado * 4;
    }
    
    public function GetTipo() {
        return $this->tipo;
    }
    
    public function area() {
        return $this->GetArea();
    }
    
    public function perimetro() {
        return $this->GetPerimetro();
    }
}
?>
