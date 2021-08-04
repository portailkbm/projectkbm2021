function Informationlakou(){
	document.getElementsByName('titretableau').innerHTML="Information lakou";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc  blanc rouge event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}

function Communicationlakou(){
	document.getElementsByName('titretableau').innerHTML="Communication lakou";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc  blanc rouge event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}

function Livraisonbénéficiares(){
	document.getElementsByName('titretableau').innerHTML="Livraison bénéficiaires";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc  blanc rouge event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}

function Livraisoncommande(){
	document.getElementsByName('titretableau').innerHTML="Livraisons commandes";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc  blanc rouge event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}


function Inscriptionmembre(){
	document.getElementsByName('titretableau').innerHTML="Inscription membre";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc  blanc rouge event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}

function Evénements(){
	document.getElementsByName('titretableau').innerHTML="Evénements";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc  blanc rouge event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}

function Cahier(){
	document.getElementsByName('titretableau').innerHTML="Cahier";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc  blanc rouge event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}

function Agenda(){
	document.getElementsByName('titretableau').innerHTML="Agenda";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Informationlakou()");
	element1.innerHTML="Information lakou";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Communicationlakou()");
	element2.innerHTML="Communication lakou";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Livraisonbénéficiares()");
	element3.innerHTML="Livraison bénéficiaires";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Livraisoncommande()");
	element4.innerHTML="Livraisons commandes";
	div4.appendChild(element4);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div4);

	var div5 = document.createElement("div");
	var element5 =document.createElement("a");
	element5.setAttribute('class','champc vert event');
	element5.setAttribute('onclick',"Inscriptionmembre()");
	element5.innerHTML="Inscription membre";
	div5.appendChild(element5);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div5);

	var div6 = document.createElement("div");
	var element6 =document.createElement("a");
	element6.setAttribute('class','champc vert event');
	element6.setAttribute('onclick',"Evénements()");
	element6.innerHTML="Evénements";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Cahier()");
	element7.innerHTML="Cahier";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc  blanc rouge event');
	element8.setAttribute('onclick',"Agenda()");
	element8.innerHTML="Agenda";
	div8.appendChild(element8);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div8);


}


