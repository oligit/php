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
			// if (is_numeric($this->_num1) && is_numeric($this->_num2) && $this->_num2 !=0) {
			// 		return true;
			// }else{
			// 	return false;
			// }
			$salida = (is_numeric($this->_num1) && is_numeric($this->_num2) && $this->_num2 !=0) ? true : false;
			return $salida;
		}

		private function sumar()
		{
			if (validarOperacion()) {
				return $this->_num1 + $this->_num2;
			}else{
				return $this->_errores[0];
			}
		}

		private function restar()
		{
			if (validarOperacion()) {
				return $this->_num1 - $this->_num2;
			}else{
				return $this->_errores[0];
			}
		}
		public function calcular($op)
				{
					switch ($op) {
						case 'sumar':
							# code...
							return $this->sumar();
							break;
						case 'restar':
							# code...
							return $this->restar(); 
							break;
						
						default:
							# code...
							break;
					}
				}		
	}
 ?>