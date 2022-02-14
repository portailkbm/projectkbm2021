import { useContext } from "react";
import { EvenementContext} from "../contexts/EvenementContext";

//const useStatistiques = () => useContext(StatistiquesContext);

const useAuth = () => {
    
    const context = useContext(EvenementContext);
    if (!context) {
      throw new Error("AuthContext must be placed within AuthProvider");
    }
  
    return context;
  };

export default useAuth 
//export default useStatistiques;
