<?php 
/**
 * This is a demo script for the functions of the PHP ESC/POS print driver,
 * Escpos.php.
 *
 * Most printers implement only a subset of the functionality of the driver, so
 * will not render this output correctly in all cases.
 *
 * @author Michael Billington <michael.billington@gmail.com>
 */
namespace Librerias;
require  'Mike42/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\CapabilityProfile;
use Mike42\Escpos\EscposImage;
/**
* 
*/
define("LN", "\n");
define("TAB", "\t");

/**
 * 
 */
class Tickera {	
	
	public static $equipo;
	
	//funcion principal e esencial en una clase no me preguntes el porque.
	function __construct()
	{
		//aqui se guarda el nombre del equipo de manera automatica
		// el de la tickera va a hacer a pies
		self::$equipo = gethostname();
	}

	public static function test(){
		$connector = new WindowsPrintConnector("smb://".self::$equipo."/tickera");
		$printer = new Printer($connector);
		$printer -> initialize();
		$printer -> feedReverse(1);
		$printer -> text("hOLA TENGO VIDA ".LN);
		$printer -> feed(3);
		$printer -> close();
	}
}



?>
