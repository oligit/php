<?php 
	/**
	* Clase persona
	*/
	class Persona 
	{
		private $nombre;
		private $apellido;
		private $fechaN;

		function __construct($nom, $ape, $fec)
		{
			$this->nombre = $nom;
			$this->apellido = $ape;
			$this->fechaN = strtotime($fec);
		}

		public function getNombre()
		{
			return $this->nombre;
		}
		public function getApellido()
		{
			return $this->apellido;
		}
		public function getNombreCompleto()
		{
			return $this->nombre.' '.$this->apellido;
		}
		public function getFechaNacimiento()
		{
			return date('d/m/Y', $this->fechaN);
		}
		public function getEdad()
		{
			// return (time() - $this->fechaN)/3600;
			return date('Y', time()) - date('Y', $this->fechaN);
		}
	}
 ?>