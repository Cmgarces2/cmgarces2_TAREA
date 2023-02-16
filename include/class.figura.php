<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" method="POST" action="">
				<table border=0 align="center">
					<tr>
						<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
					</tr>
					<tr>
						<td>Tipo: </td>
						<td>
							<select name="tipo" onchange="actualizarCampos()">
								<option value="sel">Seleccione...</option>
								<option value="cuadrado">Cuadrado</option>
								<option value="rectangulo">Rectángulo</option>
								<option value="triangulo">Triángulo</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Lado 1:</td>
						<td><input type="text" name="lado_1" size="4" disabled></td>
					</tr>
					<tr>
						<td>Lado 2:</td>
						<td><input type="text" name="lado_2" size="4" disabled></td>
					</tr>
					<tr>
						<td>Lado 3:</td>
						<td><input type="text" name="lado_3" size="4" disabled></td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="calcular" value="Calcular"></th>
					</tr>
				</table>
			</form>
			
			
			';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>

<script>
function actualizarCampos() {
    const tipo = document.getElementsByName('tipo')[0].value;
    const lado1 = document.getElementsByName('lado_1')[0];
    const lado2 = document.getElementsByName('lado_2')[0];
    const lado3 = document.getElementsByName('lado_3')[0];

    switch (tipo) {
        case 'cuadrado':
            lado1.disabled = false;
            lado2.disabled = true;
            lado3.disabled = true;
            break;
        case 'rectangulo':
            lado1.disabled = false;
            lado2.disabled = false;
            lado3.disabled = true;
            break;
        case 'triangulo':
            lado1.disabled = false;
            lado2.disabled = false;
            lado3.disabled = false;
            break;
        default:
            lado1.disabled = true;
            lado2.disabled = true;
            lado3.disabled = true;
            break;
    }
}
</script>