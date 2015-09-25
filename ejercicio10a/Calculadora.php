<?php 
	/**
	* clase calculadora nano xD
	*/

	class Calculadora 
	{
		private $_num1;
		private $_num2;
		private $_error;
		
		function __construct($n1, $n2)
		{
			echo 'entra en la clase';
			$this->$_num1 = $n1;
			$this->$_num2 = $n2;
			$this->$_error[0] = 'Un valor no es numerico';
			$this->$_error[1] = 'No se puede dividir entre 0';
		}
		private function comprobar()
		{
			echo 'entra en la funcion comprobar';
			if (is_numeric($this->_num1) && is_numeric($this->_num2)) {
				if ($this->num2 != 0) {
					return true;
				}
			}else{return false;}
		}
		function sumar()
		{
			echo 'entra en sumar';
			if ($this->comprobar($this->_num1, $this->_num2)) {
				# code...
				return $this->_num1 + $this->_num2;
			}else{
				return $this->error[0];
			}
		}
		function restar()
		{
			if ($this->comprobar($this->_num1, $this->_num2)) {
				# code...
				return $this->num1 - $this->num2;
			}else{
				return $this->error[0];
			}
		}
		function multiplicar()
		{
			if ($this->comprobar($this->_num1, $this->_num2)) {
				return $this->num1 * $this->num2;
			}else{
				return $this->error[0];
			}
		}
		function dividir()
		{
			if ($this->comprobar($this->_num1, $this->_num2)) {
				# code...
				return $this->num1 / $this->num2;
			}else{
				return $this->error[1];
			}
		}
		function potencia()
		{
			if ($this->comprobar($this->_num1, $this->_num2)) {
				# code...
				return $this->num1 ** $this->num2;
			}else{
				return $this->error[0];
			}
		}
	}
 ?>