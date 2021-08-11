
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

/*

function Gestiondesproduits(){
	document.getElementsByName('titretableau').innerHTML="Gestion des produits";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc  blanc rouge event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}

function Gestiondeshabilitations(){
	document.getElementsByName('titretableau').innerHTML="Gestion des habilitations";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc  blanc rouge event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}

function Gestiondescomptes(){
	document.getElementsByName('titretableau').innerHTML="Gestion des comptes";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc  blanc rouge event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}

function Qualificationproducteurs(){
	document.getElementsByName('titretableau').innerHTML="Qualification producteurs";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc  blanc rouge event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}

function Gestionforum(){
	document.getElementsByName('titretableau').innerHTML="Gestion Forum";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc  blanc rouge event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}

function Gestionlakous(){
	document.getElementsByName('titretableau').innerHTML="Gestion lakous";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc  blanc rouge event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}

function Gestionbénéficiaires(){
	document.getElementsByName('titretableau').innerHTML="Gestion bénéficiaires";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc  blanc rouge event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}

function Intégrationproduits(){
	document.getElementsByName('titretableau').innerHTML="Intégration produits";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc  blanc rouge event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc vert event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}


function Webmastering(){
	document.getElementsByName('titretableau').innerHTML="Web mastering";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestiondesproduits()");
	element1.innerHTML="Gestion des produits";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Gestiondeshabilitations()");
	element2.innerHTML="Gestion des habilitations";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Gestiondescomptes()");
	element3.innerHTML="Gestion des comptes";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Qualificationproducteurs()");
	element4.innerHTML="Qualification producteurs";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Gestionforum()");
	element5.innerHTML="Gestion Forum";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Gestionlakous()");
	element6.innerHTML="Gestion lakous";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Gestionbénéficiaires()");
	element7.innerHTML="Gestion bénéficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Intégrationproduits()");
	element8.innerHTML="Intégration produits";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);

	var div9 = document.createElement("div");
	var element9 =document.createElement("a");
	element9.setAttribute('class','champc  blanc rouge event');
	element9.setAttribute('onclick',"Webmastering()");
	element9.innerHTML="Web mastering";
	div9.appendChild(element9);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div9);

}*/