import React from "react";
import Event from "./event";
import Carte from "./cardsEvent";
import { Container, Row, Col } from "react-bootstrap";

const Accueil = () => {

    return (<React.Fragment>
        <div>Nou Kontan vwè'w</div> 
        <Row>
				<Col lg="9" xl="7" className="d-flex">
					<Event/>
				</Col>
				<Col lg="4" xl="4" className="d-flex">
					<Carte/>
				</Col>
			</Row>
        </React.Fragment>) 
    
    }

    export default Accueil