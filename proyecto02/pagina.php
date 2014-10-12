<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";

class pagina
{
	public $titulo="TITULO DE LA PAGINA";
	private $cabecera,$cuerpo,$pie;
	
	function __construct($numFilas,$numColumnas)
	{
		$this->cabecera = new cabecera();
		$this->cabecera->setMenu(5);
		$this->cuerpo = new cuerpo;
		$this->cuerpo->setTabla($numFilas,$numColumnas);
		$this->pie = new pie;
		$this->pie->setPie();
	}
	
	function getPagina()
	{
		echo $this->cabecera.$this->cuerpo.$this->pie;
	}
	
}
?>