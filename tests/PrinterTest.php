<?php
use Kalam\Printer\Printer;

class PrinterTest extends PHPUnit_Framework_TestCase{
	
	public function testHelloWorld()
	{
		$printer = new Printer();
		$this->assertTrue($printer->helloWorld());
	}
}