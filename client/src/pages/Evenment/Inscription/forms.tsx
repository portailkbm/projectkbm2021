import React, {useState, useContext} from "react";
import { Helmet } from "react-helmet-async";

import { Button, Card, Col, Container, Form, Row } from "react-bootstrap";
import { useTranslation } from "react-i18next";
import useEvenement from "hooks/useEvenement"
import NotyfContext from "contexts/NotyfContext";

const BasicForm = () => {
	const { t } = useTranslation();
	const { city, postData } = useEvenement()
	const notyf = useContext(NotyfContext);
	const [message, setMessage] = useState("Evenement Enregistré");
	const [type, setType] = useState("success");
	const [duration, setDuration] = useState("2500");
	const [ripple, setRipple] = useState(true);
	const [dismissible, setDismissible] = useState(false);
	const [positionX, setPositionX] = useState("right");
	const [positionY, setPositionY] = useState("top");
	const [state, setstate] = useState({
		
		libevent: null,
		desevent: null,
		photoevent: null,
		flyer: null,
		debutevent: null,
		debutevent_hr: null,
		finevent: null,
		finevent_hr: null,
		cp: 0,
		
		/*imagevent: '', cr_event: null,
		visevent: null, 
		/* idevent: '',
		classement: null,
		typeevent: null, 
		/* idlak: null,
		idassoc: null, 
		
		/* nomville: 'les Abymes' */
	})
	const handleChange = (e) => {

		setstate({...state, cp: e.target.value})
		
	}
	const handleClick = async () => {

		const status = await postData(state)

		if(status != 200){
			setType("danger")
			setMessage("Evenement non Enregistré")
		}else {

			setType("success")
			setMessage("Evenement Enregistré")
		}
		notyf.open({
			type,
			message: message
				? message
				: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.",
			duration: Number(duration),
			ripple,
			dismissible,
			position: {
				x: positionX as any,
				y: positionY as any,
			},
		})
	}
	return (
	<Card className="m-sm-4 text-center"style={{ maxWidth: 500, overflow: "auto"}}>
		<Card.Header>
			<Card.Title>{t("Creation d'évènement")}</Card.Title>
			{/* <h6 className="card-subtitle text-muted">
				Default Bootstrap form layout.
			</h6> */}
		</Card.Header>
		<Card.Body>
			<Form>
				<Form.Group className="mb-3">
					<Form.Label>{t("Nom de l'évènement :")}</Form.Label>
					<Form.Control type="input" name="email" placeholder="" onChange={(e) => setstate({...state, libevent: e.target.value})} />
				</Form.Group>
				<Form.Label>{t("Lieu de l'évènement :")}</Form.Label>
				<Form.Select
					id="exampleCustomSelect"
					name="customSelect"
					className="mb-3"
					value={state.cp}
					onChange={handleChange}
				>
					<option value="">{t("Ville")}</option> 
					{city.map((cit) => {
						return <option key={cit.cp} value={cit.cp} >{cit.nomville}</option>
					})}
				</Form.Select>
				<Form.Group className="mb-3">
					<Form.Label>{t("Date de début de l'évènement :")}</Form.Label>
					<Form.Control type="date" name="dateDebut" placeholder="Email" onChange={(e) => setstate({...state, debutevent: e.target.value})}/>
				</Form.Group>
				<Form.Group className="mb-3">
					<Form.Label>{t("Date de fin de l'évènement :")}</Form.Label>
					<Form.Control type="date" name="dateFin" placeholder="Email" onChange={(e) => setstate({...state, finevent: e.target.value})}/>
				</Form.Group>
				<Form.Group className="mb-3">
					<Form.Label>{t("Heure de début de l'évènement :")}</Form.Label>
					<Form.Control type="time" name="heureDebut" placeholder="Email" onChange={(e) => setstate({...state, debutevent_hr: e.target.value})}/>
				</Form.Group>
				<Form.Group className="mb-3">
					<Form.Label>{t("Heure de fin de l'évènement :")}</Form.Label>
					<Form.Control type="time" name="heureFin" placeholder="Email" onChange={(e) => setstate({...state, finevent_hr: e.target.value})}/>
				</Form.Group>
				{/* <Form.Group className="mb-3">
					<Form.Label>Password</Form.Label>
					<Form.Control
						type="password"
						name="password"
						placeholder="Password"
					/>
				</Form.Group> */}
				<Form.Group className="mb-3">
					<Form.Label>{t("Description de l'évènement :")}</Form.Label>
					<Form.Control
						as="textarea"
						name="textarea"
						placeholder="Textarea"
						rows={2}
						onChange={(e) => setstate({...state, desevent: e.target.value})}
					/>
				</Form.Group>
				<Form.Group className="mb-3">
					<Form.Label>{t("Image de l'évènement :")}</Form.Label>
					<Form.Control type="file" name="file" />
				</Form.Group>
				<Form.Group className="mb-3">
					<Form.Label>{t("Flyer de l'évènement :")}</Form.Label>
					<Form.Control type="file" name="file" />
				</Form.Group>

				{/* <Form.Group className="mb-3">
					<Form.Check type="checkbox" id="checkbox" label="Check me out" />
				</Form.Group> */}

				<Button variant="primary" onClick={() => handleClick()}>{t("Créer l'évènement")}</Button>
			</Form>
		</Card.Body>
	</Card>
);
}
export default BasicForm 