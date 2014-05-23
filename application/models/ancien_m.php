<?php 

Class ancien_m extends CI_Model{



	public function connexion(){
		print_r("debut");
		//connexion à la base de données 
		//mysql_connect('localhost', 'root', 'root');
	

		//mysql_select_db('imbds');
		
	
		$bdd = new PDO('mysql:host=localhost;dbname=imbds','root','root');
    	print_r("fin");


	}


	public function calcul_ancien(){

		//ancien_m.connexion();
		$bdd = new PDO('mysql:host=localhost;dbname=imbds','root','root');
		
		//Nous récupérons le contenu de la requête dans $retour_total
		$retour_total=mysql_query('SELECT COUNT(*) AS total FROM GMAncien'); 
		
		//On range retour sous la forme d'un tableau.
		$donnees_total=mysql_fetch_assoc($retour_total); 
		
		//On récupère le total pour le placer dans la variable $total.
		$total=$donnees_total['total']; 
		return $total;

	}


	public function calcul_page($valeur){
		
		//connexion();
		$bdd = new PDO('mysql:host=localhost;dbname=imbds','root','root');
		//Nous allons afficher 10 messages par page.
		$messagesParPage=10; 
 
		//Nous allons maintenant compter le nombre de pages.


		$nombreDePages=ceil($valeur/$messagesParPage);

		return $nombreDePages;
	}	
 		
	public function getAll(){
		
		$anciens = $this->db->get('GMAncien');
		
		return $anciens;
		
	}


	public function get_ancien($id){
			//connexion
		$bdd = new PDO('mysql:host=localhost;dbname=imbds','root','root');
		
		$ancien = $this->db->getwhere('GMAncien',array('id'=>$id))->row_array();
	
		return $ancien;
	}

}
?>






















