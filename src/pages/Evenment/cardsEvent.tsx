import React from "react";
import { Helmet } from "react-helmet-async";
import banane from "../../assets/img/photos/banane.jpg"
import { Button, Card, Col, Container, ListGroup, Row } from "react-bootstrap";

const image={ 
	width:"300px",
	marginTop: "20px", 
	margin: "auto",
	/*TextAlign : "center",*/
}


const CardWithImageAndLinks = () => (
	<Card>
		<Card.Img width="100%" style={image} src={banane} alt="Card image cap" />
		{/*<img style={ {width:"100px"} } src={banane} ></img>*/}
		<Card.Header>
			<Card.Title className="mb-0">
				Card with image and links
			</Card.Title>
		</Card.Header>
		<Card.Body>
			<Card.Text>
				Some quick example text to build on the card title and make up the bulk
				of the card's content.
			</Card.Text>
			<Card.Link href="#">Card link</Card.Link>
			<Card.Link href="#">Another link</Card.Link>
		</Card.Body>
	</Card>
);

export default CardWithImageAndLinks 
