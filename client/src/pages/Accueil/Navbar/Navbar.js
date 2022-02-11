import React, {useState, useEffect} from 'react'
import "./Navbar.css"



export default function Navbar() {
    const [toggleMenu, setToggleMenu] = useState(false);

    const toggleNavSmallScreen = () => {
        setToggleMenu(!toggleMenu);
    }
    useEffect(() => {

        const changeWidth = () =>{
            setLargeur(window.innerWidth);

            if(window.innerWidth > 500){
                setToggleMenu(false);
            }
        }

        window.addEventListener('resize', changeWidth);

        return () => {
            window.removeEventListener('resize', changeWidth);
        }

    }, [])
    return (
           <nav>
               {toggleMenu &&(
                   <ul className="liste">
                   <li className="items">Accueil</li>                 
                   <li className="items">Demenjala</li>
                   <li className="items">Lakou</li>
                   <li className="items">Evenements</li>
                   <li className="items">Connaissance</li>
                   <li className="items">Bokantag</li>
                   <li className="items">Produits</li>
                   <li className="items">Producteur</li>
 
                </ul>
               )}
               
                <button onClick={toggleNavSmallScreen} className="btn">BTN</button>

           </nav>

    )
}