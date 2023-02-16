<?php
class rectangulo extends figura implements formulas{
	private $base;
    private $altura;
    private $tipo;
    
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
        $this->tipo = "Rectángulo";
    }
    
    public function GetArea(){
        return $this->base * $this->altura;
    }
    
    public function GetPerimetro(){
        return 2 * ($this->base + $this->altura);
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
