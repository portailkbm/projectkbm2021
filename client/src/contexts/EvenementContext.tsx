import React, { createContext,useState, useReducer, useEffect} from "react";
import axios from "axios";

import { getTab2, getOneEvent, getCity, postEvent, deletEvent } from "../services";

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
    await axios.post('https://demenjala.herokuapp.com/api/Evenemment',body/* {
      libevent: body.libevent,
      desevent: body.desevent,
      photoevent: body.photoevent,
      flyer: body.flyer,
      debutevent: body.debutevent,
      debutevent_hr: body.debutevent_hr,
      finevent: body.finevent,
      finevent_hr: body.finevent_hr,
      cp: body.cp,
    } */)
		.then(function (response) {
		console.log(response);
    return response.status
		})
		.catch(function (error) {
		console.log(error);
		});
	
  }
  const deleteEvent = async () => {

    if(state.dataCards.idevent){
      const id = state.dataCards.idevent
      await deletEvent(id)
      fetchTabKBM(1,2)
    }else {
      console.log("fail")
    }
    
  }
  

  return (
    <EvenementContext.Provider
      value={{
        ...state,
        fetchTabKBM, 
        fetchCardKBM,
        postData,
        fetchCity,
        deleteEvent,
      }}
    >
      {children}
    </EvenementContext.Provider>
  );
}

export { EvenementProvider, EvenementContext };
