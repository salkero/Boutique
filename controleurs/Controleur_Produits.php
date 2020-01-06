<?php
	class Controleur_Produits extends BaseControleur{

        public function traite(array $params)
		{
             //assigner une action par défaut
             $action = "afficheListeProduits";
                        
             if(isset($params["action"]))
             {
                  $action = $params["action"]; 
             }
             
            if(isset($action))
			{
				//modèle et vue vides par défaut
				$data = array();
                $vue = "";
                //switch en fonction de l'action qui nous est envoyée
				//ce switch détermine la vue $vue et obtient le modèle $data
              
                switch($action)
                { 
                    case "afficheListeProduits":
                        $this->afficheVue("Head");

			            $vue = "Header";
			            $this->afficheVue($vue);
                        
                        $modeleProduits = new Modele_Produits();
                        $data = $modeleProduits->obtenirLesDouzes();
                        
                        $vue = "ListeProduits";
                        $this->afficheVue($vue, $data);

                        $this->afficheVue("Footer");
						break;

                }  

        }			



    }
}
?>  