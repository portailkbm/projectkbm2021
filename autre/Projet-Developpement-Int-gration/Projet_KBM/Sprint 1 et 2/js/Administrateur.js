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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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

function Gestionb??n??ficiaires(){
	document.getElementsByName('titretableau').innerHTML="Gestion b??n??ficiaires";

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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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

function Int??grationproduits(){
	document.getElementsByName('titretableau').innerHTML="Int??gration produits";

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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc  blanc rouge event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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
	element7.setAttribute('onclick',"Gestionb??n??ficiaires()");
	element7.innerHTML="Gestion b??n??ficiaires";
	div7.appendChild(element7);
	var moitieD = document.querySelector('#moitieD');
	moitieD.appendChild(div7);

	var div8 = document.createElement("div");
	var element8 =document.createElement("a");
	element8.setAttribute('class','champc vert event');
	element8.setAttribute('onclick',"Int??grationproduits()");
	element8.innerHTML="Int??gration produits";
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

}