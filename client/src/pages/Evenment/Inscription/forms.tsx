import React, {useState} from "react";
import { Helmet } from "react-helmet-async";

import { Button, Card, Col, Container, Form, Row } from "react-bootstrap";
import { useTranslation } from "react-i18next";
import useEvenement from "hooks/useEvenement"

const BasicForm = () => {
	const { t } = useTranslation();
	const { city } = useEvenement()
	const [state, setstate] = useState({
		
		libevent: null,
		desevent: null,
		photoevent: null,
		flyer: '',
		debutevent: null,
		debutevent_hr: null,
		finevent: null,
		finevent_hr: null,
		cp: 97139,
		
		/*imagevent: '', cr_event: null,
		visevent: null, 
		/* idevent: '',
		classement: null,
		typeevent: null, 
		/* idlak: null,
		idassoc: null, 
		
		/* nomville: 'les Abymes' */
	})
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
				>
					<option value="">{t("Ville")}</option>
					{city.map((cit) => {
						return <option key={cit.cp} value={cit.cp}>{cit.nomville}</option>
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

				<Button variant="primary">{t("Créer l'évènement")}</Button>
			</Form>
		</Card.Body>
	</Card>
);
}
export default BasicForm 