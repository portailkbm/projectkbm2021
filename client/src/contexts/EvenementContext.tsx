import React, { createContext,useState, useReducer, useEffect} from "react";
import axios from "axios";

import { getTab2, getOneEvent, getCity, postEvent } from "../services";

const FETCH_STATS_TABB = "FETCH_STATS_TABB"
const FETCH_PENDING = "FETCH_POSTS_PENDING"
const FETCH_ERROR = "FETCH_POSTS_ERROR"
const FETCH_CARD = "FETCH_CARD"
const FETCH_CITY = "FETCH_CITY"
const POST_EVENT = "POST_EVENT"

const initialState = {
  isFetching: false,
  error: null,
  tab2: [],
  dataCards: [],
  city: [],
};

const StatistiquesReducer = (state, action) => {

  switch (action.type) {
    case FETCH_PENDING:
      return { ...state, isFetching: true }

    case FETCH_ERROR:
      return { ...state, error: action.payload.error, isFetching: false }

 
    case FETCH_STATS_TABB:
      return {
        ...state,
        tab2: action.payload.response,
        postsHolder: action.payload.stats,
        error: null,
        isFetching: false
      }

    case FETCH_CARD:
      return {
        ...state,
        dataCards: action.payload.response,
        error: null,
        isFetching: false
      }
    
    case FETCH_CITY:
      return {
        ...state,
        city: action.payload.response,
        error: null,
        isFetching: false
      }

    default:
      return state;
  }

}

const EvenementContext = createContext(null)

function EvenementProvider({ children }) {
  const [state, dispatch] = useReducer(StatistiquesReducer, initialState);

  useEffect(() => {
    fetchCity()
  }, [])
  const fetchTabKBM = async (lvl,cus) => {

    const response = await getTab2(lvl,cus)
    dispatch({
      type: FETCH_STATS_TABB,
      payload: {
        response: response
      },
    })
  }

  const fetchCardKBM = async (id) => {

    const response = await getOneEvent(id)
    dispatch({
      type: FETCH_CARD,
      payload: {
        response: response[0]
      },
    })
  }

  const fetchCity = async () => {

    const response = await getCity()
    dispatch({
      type: FETCH_CITY,
      payload: {
        response: response
      },
    })
  }


  const postData = async (body) => {

    //const response = await postEvent(body)
 /*    await axios.post('http://localhost:4002/api/Evenemment', body)
		.then(function (response) {
		console.log(response);
		})
		.catch(function (error) {
		console.log(error);
		}); */
	
    //console.log(response)
    /* dispatch({
      type: POST_EVENT,
      payload: {
        response: response
      },
    }) */
  }
  

  return (
    <EvenementContext.Provider
      value={{
        ...state,
        fetchTabKBM, 
        fetchCardKBM,
        postData,
        fetchCity,
      }}
    >
      {children}
    </EvenementContext.Provider>
  );
}

export { EvenementProvider, EvenementContext };
