<?php

/*
  Като спазвате конвенциите за писане на PHP си направете контролер, който има следните методи:
  а) метод, който отпечатва директно в контролера (без view) заглавие и съдържание:
  любим ваш десерт и негова рецепта със снимка.
  б) метод, който отпечатва чрез view същото нещо съдържание в подточка а).
*/
	
	class Desert extends CI_Controller 
	{
		public function serve()
		{
			$this->load->view('view');
		}
	}
?>
