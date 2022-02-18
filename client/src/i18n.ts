import i18n from "i18next";
import { initReactI18next } from "react-i18next";

const resources = {
	en: {
		translation: {
			Search: "Search projects…",
			"Welcome back": "Welcome back",
			"Evenements": "Evenements",
			"Heure de début": "Heure de début",
			"heure de fin": "heure de fin",
			"Description": "Description",
			"Nom :": "Nom :",
			"Date de l'evenement": "Date de l'evenement",
			"Télécharger le flyer": "Télécharger le flyer",
			"Nom de l'évènement :": "Nom de l'évènement :",
			"Description de l'évènement :" : "Description de l'évènement :",
			"Image de l'évènement :" : "Image de l'évènement :",
			"Créer l'évènement" : "Créer l'évènement",
			"Date de début de l'évènement :" : "Date de début de l'évènement :",
			"Date de fin de l'évènement :" : "Date de fin de l'évènement :",
			"Heure de début de l'évènement :" : "Heure de début de l'évènement :",
			"Heure de fin de l'évènement :" : "Heure de fin de l'évènement :",
			"Lieu de l'évènement :" : "Lieu de l'évènement :",
			"Creation d'évènement" : "Creation d'évènement",
			"Supprimer l'évènement": "Supprimer l'évènement",
			"Modifier l'évènement": "Modifier l'évènement",
		},
	},
	fr: {
		translation: {
			Search: "Rechercher…",
			"Welcome back": "Bon retour",
			"Evenements": "Evenements",
		},
	},
	de: {
		translation: {
			Search: "Suchen…",
			"Welcome back": "Willkommen zurück",
		},
	},
	nl: {
		translation: {
			Search: "Zoeken…",
			"Welcome back": "Welkom terug",
		},
	},
};

i18n.use(initReactI18next).init({
	resources,
	lng: "en",
	fallbackLng: "en",
	interpolation: {
		escapeValue: false,
	},
});
