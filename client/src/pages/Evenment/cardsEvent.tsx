import React from "react";
import { Helmet } from "react-helmet-async";
import banane from "../../assets/img/photos/banane.jpg"
import { Button, Card, Col, Container, ListGroup, Row } from "react-bootstrap";

const image={ 
	width:"300px",
	marginTop: "20px", 
	marginLeft: "auto",
	marginRight: "auto",

	/*TextAlign : "center",*/
}


const CardWithImageAndLinks = () => (
	<Card>
		<Card.Img width="100%" style={image} src={banane} alt="Card image cap" />
		{/*<img style={ {width:"100px"} } src={banane} ></img>*/}
		<Card.Header>
			<Card.Title className="mb-0">
				Lieu de l'evenement
			</Card.Title>
		</Card.Header>
		<Card.Body>
			<Card.Text>
				heure de commencement
				heure de fin
				quesque c'est ?
			</Card.Text>
			<Card.Link href="#">Card link</Card.Link>
			<Card.Link href="#">Another link</Card.Link>
		</Card.Body>
	</Card>
);

export default CardWithImageAndLinks 
