
function apparitionCreerevenement(){
	// gestion apparition pour creer
	if(document.getElementById("conteneurglobalinputCreer").style.display == 'inline')
	{
		document.getElementById("conteneurglobalinputCreer").style.display = 'none';
	}else if(document.getElementById("conteneurglobalinputCreer").style.display == 'none')
	{
		document.getElementById("conteneurglobalinputCreer").style.display = 'inline';
		document.getElementById("conteneurglobalinputModifier").style.display = 'none';
		document.getElementById("conteneurglobalinputSupprimer").style.display = 'none';
	}
	

}

function apparitionModifierevenement(){
	// gestion apparition pour creer
	if(document.getElementById("conteneurglobalinputModifier").style.display == 'none')
	{
		document.getElementById("conteneurglobalinputModifier").style.display = 'inline'
		document.getElementById("conteneurglobalinputCreer").style.display = 'none';
		document.getElementById("conteneurglobalinputSupprimer").style.display = 'none'
	}else if(document.getElementById("conteneurglobalinputModifier").style.display == 'inline')
	{
		document.getElementById("conteneurglobalinputModifier").style.display = 'none';
	}
	

}

function apparitionSuppreimerevenement(){
	// gestion apparition pour creer
	if(document.getElementById("conteneurglobalinputSupprimer").style.display == 'none')
	{
		document.getElementById("conteneurglobalinputSupprimer").style.display = 'inline'
		document.getElementById("conteneurglobalinputModifier").style.display = 'none';
		document.getElementById("conteneurglobalinputCreer").style.display = 'none';
	}else if(document.getElementById("conteneurglobalinputSupprimer").style.display == 'inline')
	{
		document.getElementById("conteneurglobalinputSupprimer").style.display = 'none'
	}
	

}
// fonction pour la gestion de la production



function apparitionchoixproduction(){
	// gestion apparition pour creer
	if(document.getElementById("choixproducteur").style.display == 'none')
	{
		document.getElementById("choixproducteur").style.display = 'inline'
		
	}else if(document.getElementById("choixproducteur").style.display == 'inline')
	{
		document.getElementById("choixproducteur").style.display = 'none'
	}
	

}



// fonction pour la gestion de l'exploitation

function apparitionexploitation(){
	// gestion apparition pour creer
	if(document.getElementById("choixpexploitation").style.display == 'none')
	{
		document.getElementById("choixpexploitation").style.display = 'inline'
		
	}else if(document.getElementById("choixpexploitation").style.display == 'inline')
	{
		document.getElementById("choixpexploitation").style.display = 'none'
	}
}
// option admin exploitation

function apparition_ajout_exploitation(){
	// gestion apparition pour creer
	if(document.getElementById("ajouter_exploitation").style.display == 'none')
	{
		document.getElementById("ajouter_exploitation").style.display = 'inline'
		
	}else if(document.getElementById("ajouter_exploitation").style.display == 'inline')
	{
		document.getElementById("ajouter_exploitation").style.display = 'none'
	}
}
function  apparition_modifier_exploitation(){
	// gestion apparitio pour creer
	if(document.getElementById("modifier_exploitation").style.display == 'none')
	{
		document.getElementById("modifier_exploitation").style.display = 'inline'
		
	}else if(document.getElementById("modifier_exploitation").style.display == 'inline')
	{
		document.getElementById("modifier_exploitation").style.display = 'none'
	}
}


// fonction pour la gestion des produits


function apparitionproduit(){
	// gestion apparition pour creer
	if(document.getElementById("choixproduit").style.display == 'none')
	{
		document.getElementById("choixproduit").style.display = 'inline'
		
	}else if(document.getElementById("choixproduit").style.display == 'inline')
	{
		document.getElementById("choixproduit").style.display = 'none'
	}
	

}
// option produit

function apparition_ajout_produit(){
	// gestion apparition pour ajout produit
	if(document.getElementById("ajouter_produits").style.display == 'none')
	{
		document.getElementById("ajouter_produits").style.display = 'inline'
		
	}else if(document.getElementById("ajouter_produits").style.display == 'inline')
	{
		document.getElementById("ajouter_produits").style.display = 'none'
	}
}

function apparition_Modifier_produit(){
	// gestion apparition pour modifier produit
	if(document.getElementById("modifier_produit").style.display == 'none')
	{
		document.getElementById("modifier_produit").style.display = 'inline'
		
	}else if(document.getElementById("modifier_produit").style.display == 'inline')
	{
		document.getElementById("modifier_produit").style.display = 'none'
	}
}
// js apparition producteur de production
function apparition_ajouter_producteur(){
	
	if(document.getElementById("ajouter_producteur").style.display == 'none')
	{
		document.getElementById("ajouter_producteur").style.display = 'inline'
		
	}else if(document.getElementById("ajouter_producteur").style.display == 'inline')
	{
		document.getElementById("ajouter_producteur").style.display = 'none'
	}
}
function apparition_modifier_producteur(){
	
	if(document.getElementById("modifier_producteur").style.display == 'none')
	{
		document.getElementById("modifier_producteur").style.display = 'inline'
		
	}else if(document.getElementById("modifier_producteur").style.display == 'inline')
	{
		document.getElementById("modifier_producteur").style.display = 'none'
	}
}

// Apparition producteur option
function apparition_ajouter_produit_producteur(){
	
	if(document.getElementById("ajouter_produit_vente").style.display == 'none')
	{
		document.getElementById("ajouter_produit_vente").style.display = 'inline'
		
	}else if(document.getElementById("ajouter_produit_vente").style.display == 'inline')
	{
		document.getElementById("ajouter_produit_vente").style.display = 'none'
	}
}
function apparition_visualiser_produit_producteur(){
	
	if(document.getElementById("visualiser_produit").style.display == 'none')
	{
		document.getElementById("visualiser_produit").style.display = 'inline'
		
	}else if(document.getElementById("visualiser_produit").style.display == 'inline')
	{
		document.getElementById("visualiser_produit").style.display = 'none'
	}
}

/*gestion supprimer*/

function apparition_supprimerProducteur(){
	
	if(document.getElementById("supprimerProducteur").style.display == 'none')
	{
		document.getElementById("supprimerProducteur").style.display = 'inline'
		
	}else if(document.getElementById("supprimerProducteur").style.display == 'inline')
	{
		document.getElementById("supprimerProducteur").style.display = 'none'
	}
}


function apparition_supprimerProduit(){
	
	if(document.getElementById("supprimerProduit").style.display == 'none')
	{
		document.getElementById("supprimerProduit").style.display = 'inline'
		
	}else if(document.getElementById("supprimerProduit").style.display == 'inline')
	{
		document.getElementById("supprimerProduit").style.display = 'none'
	}
}


function apparition_SupprimerExploitation(){
	
	if(document.getElementById("supprimerExploitation").style.display == 'none')
	{
		document.getElementById("supprimerExploitation").style.display = 'inline'
		
	}else if(document.getElementById("supprimerExploitation").style.display == 'inline')
	{
		document.getElementById("supprimerExploitation").style.display = 'none'
	}
}
/*Js pour la page connexion producteurs*/

function visualiser_produit_producteur(){
	
	if(document.getElementById("visualiser_produit_producteurs").style.display == 'none')
	{
		document.getElementById("visualiser_produit_producteurs").style.display = 'inline'
		
	}else if(document.getElementById("visualiser_produit_producteurs").style.display == 'inline')
	{
		document.getElementById("visualiser_produit_producteurs").style.display = 'none'
	}
}

function modifier_produit_producteur(){
	
	if(document.getElementById("modification_productuitmodifenoinp").style.display == 'none')
	{
		document.getElementById("modification_productuitmodifenoinp").style.display = 'inline'
		
	}else if(document.getElementById("modification_productuitmodifenoinp").style.display == 'inline')
	{
		document.getElementById("modification_productuitmodifenoinp").style.display = 'none'
	}
}



function supprimer_produit_producteur(){
	
	if(document.getElementById("supprimer_produit_producteurs").style.display == 'none')
	{
		document.getElementById("supprimer_produit_producteurs").style.display = 'inline'
		
	}else if(document.getElementById("supprimer_produit_producteurs").style.display == 'inline')
	{
		document.getElementById("supprimer_produit_producteurs").style.display = 'none'
	}
}