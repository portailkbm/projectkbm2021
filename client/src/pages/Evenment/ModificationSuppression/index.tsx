import React from "react";
import { Container, Row, Col } from "react-bootstrap";
import Carte from "./cardsEvent";
import Tab from "./ColumnFiltering"

const Accueil = () => {
    return (
        <React.Fragment>
            <Row>
                {/*w-100  flex-fill d-flex d-flex*/}
                    <Col lg="8" xl="8" className="flex-fill">
                        <Tab/>
                    </Col>
                    <Col lg="4" xl="4" className="flex-fill d-flex">
                        <Carte/>
                    </Col>
                </Row>
            </React.Fragment>
    ) 
}
export default Accueil