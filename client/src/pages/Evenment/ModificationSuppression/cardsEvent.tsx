import React from "react";
import { Helmet } from "react-helmet-async";
//import banane from "../../../assets/img/photos/banane.jpg"
import banane from "assets/img/photos/banane.jpg"
import { Button, Card, Col, Container, ListGroup, Row } from "react-bootstrap";
import { useTranslation } from "react-i18next";
import useEvenement from "hooks/useEvenement"
import moment from 'moment';

const image={ 
	width:"300px",
	marginTop: "20px", 
	marginLeft: "auto",
	marginRight: "auto",

	/*TextAlign : "center",*/
}


const CardWithImageAndLinks = () => {
	const { t } = useTranslation();
	const { dataCards, deleteEvent } = useEvenement();
	return (
	<Card className="flex-fill w-100" style={{ /* maxHeight: 500, */ overflow: "auto"}}>
		
		{/*<img style={ {width:"100px"} } src={banane} ></img>*/}
		<Card.Header>
			<Card.Title className="mb-0">		
			<h2>{t("Nom :")} {dataCards.libevent}</h2>
			</Card.Title>
		</Card.Header>
		<Card.Img width="100%" style={image} src={banane} alt="Card image cap" />
		<Card.Body>
			<h4>{t("Date de l'evenement")}</h4>
            <Card.Text>	
				{moment(dataCards.debutevent).format('ll')}
			</Card.Text>
			<h4>{t("Lieu de l'evenement")}</h4>
            <Card.Text>	
				{dataCards.nomville}
			</Card.Text>
			<h4>{t("Heure de début")}</h4>
			<Card.Text>	
				{dataCards.debutevent_hr}
			</Card.Text>
			<h4>{t("heure de fin")}</h4>
			<Card.Text>
				{dataCards.finevent_hr}
			</Card.Text>
			<h4>{t("Description")}</h4>
			<Card.Text>
				{dataCards.desevent}		
			</Card.Text>
			<Button>{t("Modifier l'évènement")}</Button>
			<br />
			<br />
		    <Button variant="danger"  onClick={() => deleteEvent()}>{t("Supprimer l'évènement")}</Button>
	
			
		</Card.Body>
	</Card>
);
}
export default CardWithImageAndLinks 
