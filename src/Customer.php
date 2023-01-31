<?php 


namespace Ridho\BelajarComposerLibrary;

/**
 *
 */
class Customer
{
	
	function __construct(private string $name)
	{
		// code...
	}

	public function hello(string $name)
	{
		return "Hello $name, My name is $this->name";
	}
}