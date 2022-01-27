import React from "react";
import { Helmet } from "react-helmet-async";
import { Button, Card, Col, Container, ListGroup, Row } from "react-bootstrap";



const CardWithImageAndLinks = () => (
	<Card>
		<Card.Img width="100%" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimg.passeportsante.net%2F1000x526%2F2021-05-03%2Fi102067-igname-nu.jpg&imgrefurl=https%3A%2F%2Fwww.passeportsante.net%2Ffr%2FNutrition%2FEncyclopedieAliments%2FFiche.aspx%3Fdoc%3Digname_nu&tbnid=kO2WmrPHJzWThM&vet=12ahUKEwjjqsKMxrz1AhUSh1wKHRIqCxgQMygAegUIARDkAQ..i&docid=3HCpF_L2KBSuhM&w=1000&h=526&itg=1&q=igname&ved=2ahUKEwjjqsKMxrz1AhUSh1wKHRIqCxgQMygAegUIARDkAQ" alt="Card image cap" />
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
