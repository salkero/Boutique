<?php
	
	abstract class TemplateDAO
	{
		protected $connexion;
		
		protected function getPrimaryKey()
		{
			return "id";			
		}
		
		abstract protected function getTable();
		
		public function __construct()
		{
			$this->connexion = new PDO("mysql:host=localhost;dbname=e1895293", "e1895293", "rZurNW0WlNXTjGlCfB96");
		}
	}
?>