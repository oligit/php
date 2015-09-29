<?php 
	/**
	* Clase calculadora
	*/
	class Calculadora 
	{
		private $_num1;
		private $_num2;
		private $_error;
		private $_operacion;
		private $_mensaje;
		private $_errores;
		function __construct($num1, $num2)
		{
			$this->_num1 = $num1;
			$this->_num2 = $num2;
			$this->_errores[0] = 'Un valor no es numerico';
			$this->_errores[1] = 'No se puede dividir entre 0';
		}
		private function validarOperacion()
		{
			// echo "entra en validarOperacion";
			$salida = (is_numeric($this->_num1) && is_numeric($this->_num2) && $this->_num2 !=0) ? true : false;
			return $salida;
		}

		private function sumar()
		{
			// echo "entra en suma";
			if ($this->validarOperacion()) {
				return $this->_num1 + $this->_num2;
				// echo "suma de verdad";
			}else{
				return $this->_errores[0];
			}
		}

		private function restar()
		{
			if ($this->validarOperacion()) {
				return $this->_num1 - $this->_num2;
			}else{
				return $this->_errores[0];
			}
		}
		private function multiplicar()
		{
			if ($this->validarOperacion()) {
				return $this->_num1 * $this->_num2;
			}else{
				return $this->_errores[0];
			}
		}
		private function dividir()
		{
			if ($this->validarOperacion()) {
				return $this->_num1 / $this->_num2;
			}else{
				return $this->_errores[0];
			}
		}
		private function potencia()
		{
			if ($this->validarOperacion()) {
				return $this->_num1 ** $this->_num2;
			}else{
				return $this->_errores[0];
			}
		}
		private function factorial()
		{
			
		}
		private function deff()
		{
			return "Qué ases nano vas to loco xDD";
		}
		public function calcular($op)
				{
					switch ($op) {
						case 'sumar':
							# code...
							// echo "entra en la suma";
							return $this->sumar();
							break;
						case 'restar':
							# code...
							return $this->restar(); 
							break;
						case 'multiplicar':
							# code...
							return $this->multiplicar(); 
							break;
						case 'dividir':
							# code...
							return $this->dividir(); 
							break;
						case 'potencia':
							# code...
							return $this->potencia(); 
							break;
						default:
							# code...
							return $this->deff();
							break;
					}
				}		
	}
 ?>