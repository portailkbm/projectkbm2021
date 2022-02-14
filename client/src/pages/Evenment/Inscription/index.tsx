import React from "react";
import { Container, Row, Col } from "react-bootstrap";
import Forms from "./forms";

const Accueil = () => {
    return (
        <React.Fragment >
            <Row className="text-center mt-4 "  style={{ textAlign: "center" }}>
                <Col className="text-center"  >
                   <Forms />
                </Col>
            </Row>
            
            {/* <Row>
                <Col lg="9" xl="7" className="d-flex ">
                    <Forms />
                </Col>
                <Col lg="4" xl="4" className="d-flex">
                    
                </Col>
            </Row> */}
        </React.Fragment>
    ) 
}
export default Accueil