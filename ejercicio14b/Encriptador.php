<?php 
	/**
	* 
	*/
	class Encriptador
	{
		private $texto;
		function __construct($text)
		{
			$this->texto = $text;
		}
		public function encriptar()
		{
			for ($i=0; $i < strlen($this->texto) ; $i++) { 
				$temp = ord($this->texto[$i]) + 1;
				$this->texto[$i] = chr($temp);
			}
			return $this->texto;
		}
		public function desencriptar()
		{
			for ($i=0; $i < strlen($this->texto); $i++) { 
				$temp = ord($this->texto[$i]) - 1;
				$this->texto[$i] = chr($temp);
			}
			return $this->texto;
		}
	}
 ?>