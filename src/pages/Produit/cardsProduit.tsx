import React from "react";
import { Helmet } from "react-helmet-async";
import plantain from "../../assets/img/photos/plantain.jpg";
import igname from "../../assets/img/photos/igname.jpg";
import { Button, Card, Col, Container, ListGroup, Row, ProgressBar, Badge } from "react-bootstrap";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faPlus } from "@fortawesome/free-solid-svg-icons";

const image={ 
	width:"300px",
	marginTop: "20px", 
	marginLeft: "auto",
	marginRight: "auto",

	/*TextAlign : "center",*/
}


const CardWithImageAndLinks = () => (
	<Card>
		<Card.Img width="100%" style= {image} src={igname} alt="Card image cap" />
		<Card.Header>
			<Card.Title className="mb-0">
				Igname
			</Card.Title>
		</Card.Header>
		<Card.Body>
			<Card.Text>
			Plantes de la famille des Dioscoreacées, 2 espèces d'ignames sont principalement cultivées en Guadeloupe 
			: Dioscorea alata (variétés : « Pacala », « Plimbite », « Belep ») et Dioscorea cayenensisrotundata 
			(Igname jaune et igname grosse caille).
			</Card.Text>
			<Card.Link href="#">Card link</Card.Link>
			<Card.Link href="#">Another link</Card.Link>
		</Card.Body>
			<Card>
			<Card.Img width="100%" style= {image} src={plantain} alt="Card image cap" />
			<Card.Header>
				<Card.Title className="mb-0">
				banane plantain 
				</Card.Title>
			</Card.Header>
			<Card.Body>
				<Card.Text>
				La banane jaunes ou banane plantain est un légumes pays incontournable et très apprécié des antillais.
				 C'est un fruit qui se consomme comme un légume.
				</Card.Text>
				<Card.Link href="#">Card link</Card.Link>
				<Card.Link href="#">Another link</Card.Link>
			</Card.Body>
   		 </Card>
	</Card>



);


	
/*const Projects = () => (
	<React.Fragment>
		<Helmet title="Projects" />
		<Container fluid className="p-0">
			<Button variant="primary" className="float-end mt-n1">
				<FontAwesomeIcon icon={faPlus} /> New project
			</Button>
			<h1 className="h3 mb-3">Projects</h1>
			<Row>
			
			</Row>
		</Container>
	</React.Fragment>
);*/

export default CardWithImageAndLinks 
