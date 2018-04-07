<?php


function get_connect(){

 $connexion;
$PARAM_hote='mysql-danielwellington.alwaysdata.net'; // le chemin vers le serveur
$PARAM_port='3306';
$bdd='danielwellington_dw'; // le nom de votre base de donn?es
$PARAM_utilisateur='157042'; // nom d'utilisateur pour se connecter
$PARAM_mot_passe='ITUniversity12'; // mot de passe de l'utilisateur pour se connecter

try
{    
       $connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$bdd, $PARAM_utilisateur, $PARAM_mot_passe);
}
 
catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N? : '.$e->getCode();
		
}
 return $connexion;
}

function get_produits($condition, $connexion)
{
    
$requete_prepare_1=$connexion->prepare("SELECT * FROM produit1 WHERE 1<2 ".$condition); 
$requete_prepare_1->execute();
$table=array();
while($lignes=$requete_prepare_1->fetch(PDO::FETCH_OBJ)){
	
	$table[]=$lignes;
}
return $table;
   
}

 function insert_produits($image,$Alt,$Libelle,$Couleur,$Prix,$date,$connexion)
    {

        $requete_prepare_1=$connexion->prepare("insert into  produit1 (image,Alt,Libelle,Couleur,Prix,DateProduction) values ('".$image."','".$Alt."','".$Libelle."','".$Couleur."',".$Prix.",'".$date."')"); // on pr�pare notre requ�te
        $requete_prepare_1->execute();

    }
	
		function delete_produitByid($id){
		$connexion = get_connect();
		$requete_prepare_1=$connexion->prepare("DELETE produit1 WHERE idproduit=".$id); // on pr�pare notre requ�te
		$requete_prepare_1->execute();
	}
	
		function update_produitByid($colonne,$valeur, $id){
		$connexion = get_connect();
		$requete_prepare_1=$connexion->prepare("UPDATE produit1 SET ".$colonne." = ".$valeur."  WHERE idproduit=".$id); // on pr�pare notre requ�te
		$requete_prepare_1->execute();
	}
	
	function splitter($description){
	
		
		$newphrase =  str_replace(array(" ", "'", '"'), "-", $description);
		return $newphrase;
	}



?>