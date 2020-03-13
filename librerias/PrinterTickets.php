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
namespace App\Libraries;
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

class PrinterTickets {
	public static function ticket($post){
		date_default_timezone_set('America/Caracas');
		$ticket = json_decode($post["ticket"]);
		$plays = json_decode($post["plays"]);
		$total_amount = $post["total_amount"];
		$lotteries = $post["lotteries"]." ".$post["raffles"];
		$connector = new WindowsPrintConnector("smb://agito-PC/tikera");
		$printer = new Printer($connector);

		/* Initialize */
		$printer -> initialize();

		/* Text */
		$printer -> feedReverse(1);
		$printer -> text("TP4201".LN);
		$printer -> text("TICKET #".$ticket->reference.LN);
		$printer -> text("SERIAL #".$ticket->serial.LN);
		$printer -> text(date("Y/m/d H:i:s").LN);
		$printer -> text("---------------------------".LN);

		$count = 0;
		$line ="";
		$printer -> text($lotteries.LN);

		foreach ($plays as $key => $value) {
			$count ++;

				$name = strtoupper(substr($value->name_animal,0,5));
				$line = $value->number_animal." ".$name." ".$value->bet;

				if ($count == 1) {
					$printer -> text($line);
				
				} elseif($count == 2) {
					$printer -> text(" - ".$line.LN);
					$count = 0;
					$line = "";
				}

/*

			if ($count == 1) {
			} else if($count == 2) {
				$name = substr($value->name_animal,0,5);

				$line .=" - ".$value->number_animal." ".$name." ".$value->bet;
				//echo $line.LN;
				$count = 0;
				$line = "";
			}*/
		}
		//$printer -> text("LOTTO ACTIVO 07:00 PM".LN);
		//$printer -> text("09 AGUIL 100 - 09 ELEFA 100".LN);
		$printer -> text(LN."---------------------------".LN);
		$printer -> text("Total ".$total_amount.LN);
		$printer -> text("Caduca a los 3 dias.");
		$printer -> feed(4);
		/* Line feeds */
		$printer -> close();
	}
	public static  function test()
	{
		$connector = new WindowsPrintConnector("smb://angel-pavilion-PC/generic");
		$printer = new Printer($connector);
		$printer -> initialize();
		$printer -> feedReverse(1);
		$printer -> text("hOLA TENGO VIDA ".LN);
		$printer -> feed(3);
		$printer -> close();
	}
}

