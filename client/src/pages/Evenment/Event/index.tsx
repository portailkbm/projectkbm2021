import React from "react";
import Event from ".";
import Carte from "./cardsEvent";
import Tab from "./ColumnFiltering"
import { Container, Row, Col } from "react-bootstrap";

const Accueil = () => {
    return (<React.Fragment>
        <Row>
			{/*w-100  flex-fill d-flex d-flex*/}
				<Col lg="8" xl="8" className="flex-fill">
					<Tab/>
				</Col>
				<Col lg="4" xl="4" className="flex-fill d-flex">
					<Carte/>
				</Col>
			</Row>
        </React.Fragment>) 
    
    }
export default Accueil