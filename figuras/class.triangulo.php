<?php
class triangulo extends figura implements formulas{
	private $lado1;
    private $lado2;
    private $lado3;
    private $altura;
    private $base;
    private $tipo;
    
    public function __construct($lado1, $lado2, $lado3, $altura, $base){
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
        $this->altura = $altura;
        $this->base = $base;
        $this->tipo = "Triángulo";
    }
    
    public function GetArea(){
        return ($this->base * $this->altura) / 2;
    }
    
    public function GetPerimetro(){
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
    
    public function GetTipo(){
        return $this->tipo;
    }
    
    public function area(){
        return $this->GetArea();
    }
    
    public function perimetro(){
        return $this->GetPerimetro();
    }
}
?>

