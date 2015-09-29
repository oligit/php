<?php
	/**
		* Clase botella
		*/
		class Botella
		{
			private $porcentajeAlcohol;
			private $tipo;
			private $marca;
			private $id;
			static protected $_ultimoId = 0;
			function __construct($por, $tip, $mar)
			{
				$this->porcentajeAlcohol = $por;
				$this->tipo = $tip;
				$this->marca = $mar;

				self::$_ultimoId += 1;
				$this->id = self::$_ultimoId;
			}

			public function getID()
			{
				return $this->id;
			}
			public function getBotella()
			{
				return "Botella de $this->tipo, marca $this->marca, con $this->porcentajeAlcohol % alcohol e id : $this->getID()";
			}
		}	

?>