<?php

namespace services\Helpers;

class PasswordGenerator {

	private $variables;
	private $password;
	private $pass;

	 public function __construct()
	 {
		$this->variables = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$this->password = array();

		$this->pass = $this->generatePassword();
	 }

	private function generatePassword()
	{
		$variablesLength = strlen($this->variables) - 1;
		for ($i=0; $i < 8 ; $i++) { 
			$n = rand(0, $variablesLength);
			$this->password[] = $this->variables[$n];
		}
		
		return $this->pass = implode($this->password);
		
	}

	public function getPassword()
	{
		return $this->pass;
	}
}