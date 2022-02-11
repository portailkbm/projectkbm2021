import React from "react";
import Carte from "./cardsProduit";
import BarChartProduit from "./BarChartProduit";
import { Container, Row, Col } from "react-bootstrap";
/*import BarChart from "./BarCharProduit";*/

const Produit = () => {
    return (<React.Fragment>
        <div>Produit</div> 
        <Row>
        <Col md="4" lg="6" className="col-xxl-5 d-flex-3">
					<BarChartProduit />
				</Col>
				<Col lg="4" xl="4" className="d-flex">
					<Carte/>
				</Col>
			</Row>
        </React.Fragment>) 
    
    
}
export default Produit