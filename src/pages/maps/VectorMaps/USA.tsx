import React from "react";
import { VectorMap } from "react-jvectormap";
import { Card } from "react-bootstrap";

import usePalette from "../../../hooks/usePalette";

function USA() {
	const palette = usePalette();

	const options = {
		map: "us_aea",
		regionStyle: {
			initial: {
				fill: palette["gray-200"],
			},
		},
		backgroundColor: "transparent",
		containerStyle: {
			width: "100%",
			height: "100%",
		},
		zoomOnScroll: false,
	};

	return (
		<Card>
			<Card.Header>
				<Card.Title className="mb-0">
					USA Map
				</Card.Title>
			</Card.Header>
			<Card.Body>
				<div className="map-container" style={{ height: 300 }}>
					<VectorMap {...options} />
				</div>
			</Card.Body>
		</Card>
	);
}

export default USA;
