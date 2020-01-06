<?php
    class Modele_Produits extends TemplateDAO{

        public function getTable()
		{
			return "produits";
        }
        
        public function obtenirTous()
		{
			try
			{

				$stmt = $this->connexion->prepare("SELECT id, nom, prix, lienimage, inventaire FROM produits");
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}

		public function obtenirLesDouzes()
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT * FROM produits limit 12");
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}



    }






?>