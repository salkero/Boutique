<?php
	abstract class BaseControleur
	{
	
		//la fonction qui sera appelle par le routeur
		public abstract function traite(array $params);
		//public abstract function traite($params = []);
		
		protected function afficheVue($nomVue, $data = null)
		{
			$cheminVue = RACINE . "vues/" . $nomVue . ".php";
			
			if(file_exists($cheminVue))
			{
				include($cheminVue); 
			}
			else
			{
				die("Erreur 404! La vue n'existe pas.");				
			}
		}
	
	}
?>