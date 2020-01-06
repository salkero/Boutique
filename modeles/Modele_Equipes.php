<?php
	class Modele_Equipes extends TemplateDAO
	{
		public function getTable()
		{
			return "equipe";
		}


		public function obtenirTous()
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT id, nom, quartier FROM equipe");
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}


		public function ajouteEquipe($nom, $quartier)
		{		
			try
			{
				$stmt = $this->connexion->prepare("INSERT into equipe (nom, quartier) VALUES (:nom, :quartier)");
				$stmt->execute(array(":nom" => $nom, ":quartier" => $quartier));
				return 1;
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}


		public function changeNomEquipe($nom, $id)
		{		
			try
			{
			
				$stmt = $this->connexion->prepare("UPDATE equipe SET nom=:nom, id=:id WHERE id=:id");
				$stmt->execute(array(":nom" => $nom, ":id" => $id));
				return 1;
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}


		public function effaceEquipe($id)
		{
			try
			{
				$stmt = $this->connexion->prepare("DELETE from equipe WHERE id=:id");
				$stmt->bindParam(":id", $id);
				$stmt->execute();
				return true;
			}
			catch(Exception $exc)
			{
				return false;
			}
		}
	}
?>