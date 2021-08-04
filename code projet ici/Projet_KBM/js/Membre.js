function Gestionducompte(){
	document.getElementsByName('titretableau').innerHTML="Gestion du compte";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc  blanc rouge event');
	element1.setAttribute('onclick',"Gestionducompte()");
	element1.innerHTML="Gestion du compte";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Commande()");
	element2.innerHTML="Commande";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Suividecommande()");
	element3.innerHTML="Suivi de commande";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Forum()");
	element4.innerHTML="Forum";
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
	element6.setAttribute('onclick',"Baykokopousavon()");
	element6.innerHTML="Bay koko pou savon";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Signalement()");
	element7.innerHTML="Signalement";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

}

function Commande(){
	document.getElementsByName('titretableau').innerHTML="Commande";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestionducompte()");
	element1.innerHTML="Gestion du compte";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc  blanc rouge event');
	element2.setAttribute('onclick',"Commande()");
	element2.innerHTML="Commande";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Suividecommande()");
	element3.innerHTML="Suivi de commande";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Forum()");
	element4.innerHTML="Forum";
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
	element6.setAttribute('onclick',"Baykokopousavon()");
	element6.innerHTML="Bay koko pou savon";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Signalement()");
	element7.innerHTML="Signalement";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

}

function Suividecommande(){
	document.getElementsByName('titretableau').innerHTML="Suivi de commande";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestionducompte()");
	element1.innerHTML="Gestion du compte";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Commande()");
	element2.innerHTML="Commande";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc  blanc rouge event');
	element3.setAttribute('onclick',"Suividecommande()");
	element3.innerHTML="Suivi de commande";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Forum()");
	element4.innerHTML="Forum";
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
	element6.setAttribute('onclick',"Baykokopousavon()");
	element6.innerHTML="Bay koko pou savon";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Signalement()");
	element7.innerHTML="Signalement";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

}

function Forum(){
	document.getElementsByName('titretableau').innerHTML="Forum";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestionducompte()");
	element1.innerHTML="Gestion du compte";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Commande()");
	element2.innerHTML="Commande";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Suividecommande()");
	element3.innerHTML="Suivi de commande";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc  blanc rouge event');
	element4.setAttribute('onclick',"Forum()");
	element4.innerHTML="Forum";
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
	element6.setAttribute('onclick',"Baykokopousavon()");
	element6.innerHTML="Bay koko pou savon";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Signalement()");
	element7.innerHTML="Signalement";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

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
	element1.setAttribute('onclick',"Gestionducompte()");
	element1.innerHTML="Gestion du compte";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Commande()");
	element2.innerHTML="Commande";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Suividecommande()");
	element3.innerHTML="Suivi de commande";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Forum()");
	element4.innerHTML="Forum";
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
	element6.setAttribute('onclick',"Baykokopousavon()");
	element6.innerHTML="Bay koko pou savon";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Signalement()");
	element7.innerHTML="Signalement";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

}


function Baykokopousavon(){
	document.getElementsByName('titretableau').innerHTML="Bay koko pou savon";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestionducompte()");
	element1.innerHTML="Gestion du compte";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Commande()");
	element2.innerHTML="Commande";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Suividecommande()");
	element3.innerHTML="Suivi de commande";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Forum()");
	element4.innerHTML="Forum";
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
	element6.setAttribute('onclick',"Baykokopousavon()");
	element6.innerHTML="Bay koko pou savon";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc vert event');
	element7.setAttribute('onclick',"Signalement()");
	element7.innerHTML="Signalement";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

}

function Signalement(){
	document.getElementsByName('titretableau').innerHTML="Signalement";

	var moitieD = document.getElementById('moitieD');
	moitieD.parentNode.removeChild(moitieD);

	var div = document.createElement("div");
	div.setAttribute('id','moitieD');
	var centrale = document.querySelector('#centrale');
	centrale.appendChild(div);

	var div1 = document.createElement("div");
	var element1 =document.createElement("a");
	element1.setAttribute('class','champc vert event');
	element1.setAttribute('onclick',"Gestionducompte()");
	element1.innerHTML="Gestion du compte";
	div1.appendChild(element1);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div1);

	var div2 = document.createElement("div");
	var element2 =document.createElement("a");
	element2.setAttribute('class','champc vert event');
	element2.setAttribute('onclick',"Commande()");
	element2.innerHTML="Commande";
	div2.appendChild(element2);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div2);

	var div3 = document.createElement("div");
	var element3 =document.createElement("a");
	element3.setAttribute('class','champc vert event');
	element3.setAttribute('onclick',"Suividecommande()");
	element3.innerHTML="Suivi de commande";
	div3.appendChild(element3);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div3);

	var div4 = document.createElement("div");
	var element4 =document.createElement("a");
	element4.setAttribute('class','champc vert event');
	element4.setAttribute('onclick',"Forum()");
	element4.innerHTML="Forum";
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
	element6.setAttribute('onclick',"Baykokopousavon()");
	element6.innerHTML="Bay koko pou savon";
	div6.appendChild(element6);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div6);

	var div7 = document.createElement("div");
	var element7 =document.createElement("a");
	element7.setAttribute('class','champc  blanc rouge event');
	element7.setAttribute('onclick',"Signalement()");
	element7.innerHTML="Signalement";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

}



