import React from "react";
import { Bar } from "react-chartjs-2";

import { Card, Dropdown } from "react-bootstrap";

import { MoreHorizontal } from "react-feather";

import usePalette from "../../hooks/usePalette";

const BarChartProduit = () => {
	const palette = usePalette();

	const data = {
		labels: [
			"igname",
			"banane plantain",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		],
		datasets: [
			{
				label: "quantité reel",
				backgroundColor: palette.primary,
				borderColor: palette.primary,
				hoverBackgroundColor: palette.primary,
				hoverBorderColor: palette.primary,
				data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
				barPercentage: 0.325,
				categoryPercentage: 0.5,
			},
			{
				label: "quantité Sur l'année",
				backgroundColor: palette["primary-light"],
				borderColor: palette["primary-light"],
				hoverBackgroundColor: palette["primary-light"],
				hoverBorderColor: palette["primary-light"],
				data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
				barPercentage: 0.325,
				categoryPercentage: 0.5,
			},
		],
	};

	const options = {
		maintainAspectRatio: false,
		cornerRadius: 15,
		legend: {
			display: false,
		},
		scales: {
			yAxes: [
				{
					gridLines: {
						display: false,
					},
					ticks: {
						stepSize: 20,
					},
					stacked: true,
				},
			],
			xAxes: [
				{
					gridLines: {
						color: "transparent",
					},
					stacked: true,
				},
			],
		},
	};

	return (
		<Card className="flex-fill w-100">
			<Card.Header>
				<div className="card-actions float-end">
					<Dropdown align="end">
						<Dropdown.Toggle as="a" bsPrefix="-">
							<MoreHorizontal />
						</Dropdown.Toggle>
						<Dropdown.Menu>
							<Dropdown.Item>Action</Dropdown.Item>
							<Dropdown.Item>Another Action</Dropdown.Item>
							<Dropdown.Item>Something else here</Dropdown.Item>
						</Dropdown.Menu>
					</Dropdown>
				</div>
				<Card.Title className="mb-0">
                quantité / Produit
				</Card.Title>
			</Card.Header>
			<Card.Body className="d-flex">
				<div className="align-self-center w-100">
					<div className="chart chart-lg">
						<Bar data={data} options={options} />
					</div>
				</div>
			</Card.Body>
		</Card>
	);
};

export default BarChartProduit ;