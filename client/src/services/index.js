import axios from "axios"

const options = { 
  method: "GET",
  url: "http://localhost:3001/mysql",
  headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
};


const options2 = { 
    method: "GET",
    url: "http://localhost:4002/api/resume",
    headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
}


const options3 = { 
    method: "GET",
    url: "http://localhost:4002/api/connexion/11/8",
    headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
}

const host = "http://localhost:4002/"

export const getLeaks = () => {
    
    return new Promise((onSuccess, onFail) => {
        
        axios(options).then((response, error) => {
            if (!response || error) {
                onFail(`Response failure ${error}`)
                console.log("fail")
                return false
            }
           //console.log(response)
            onSuccess(response)
        })
    })
}
export const getIdSide = () => {
    return new Promise((onSuccess, onFail) => {
        
        axios(options3).then((response, error) => {
            if (!response || error) {
                onFail(`Response failure ${error}`)
                console.log("fail")
                return false
            }
            //console.log(response)
            onSuccess(response)
        })
    })
}
export const getPostsBy = category => {
    return new Promise((onSuccess, onFail) => {
        axios.get(`http://localhost:4000/api/posts/${category}`).then((response, error) => {
            if (!response || error) {
                onFail(`Response failure ${error}`)
                return false
            }
            onSuccess(response)
        })
    })
}
export const getPostBy = id => {
    return new Promise((onSuccess, onFail) => { 
        axios.get(`http://localhost:4000/api/post/${id}`).then((response, error) => {
            if (!response || error) {
                onFail(`Response failure ${error}`)
                return false
            }
            onSuccess(response)
        })
    })
}
export const addPost = body => {
    return new Promise((onSuccess, onFail) => { 
        const post = {
            ...body, 
            u: new Date()
        }
        axios.post('http://localhost:4000/api/post/add', post).then((response, error)=> {
            if (error) { 
                onFail(`error adding new post : ${error}`)
                return false
            }
            onSuccess(`post ${post.title} added successfully`)
        }).catch(err => onFail(err))
    })
}

export const getStats = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({
            method: "GET",
            url: `http://localhost:4002/api/resume/${lvl}/${cus}`,
            headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ"}
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            //console.log(response.data)
            onSuccess(response.data)
        })
    })
}


export const getUser = (id,mdp) => {
    return new Promise((onSuccess, onFail) => {
        console.log(id)
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/connexion/user/${id}/${mdp}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            onSuccess(response)
            //onSuccess(response.data)
        })
    })
}

export const getOutages = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/outages/${lvl}/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            onSuccess(response.data)
        })
    })
}

export const getReports = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/reports/${lvl}/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            onSuccess(response.data)
        })
    })
}

export const getPie = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/piechart/${lvl}/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            
            onSuccess(response.data)
        })
    })
}
export const getTab = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/tab/${lvl}/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
      
            onSuccess(response.data)
        })
    })
}

export const getLine = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/line/${lvl}/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
           
            onSuccess(response.data)
        })
    })
}

export const getFeed = (cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/feed/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
        
            onSuccess(response.data)
        })
    })
}

export const getMap = (type,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/map/${type}/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            
            onSuccess(response.data)
        })
    })
}

export const getActivity = (idUser) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/management/activite/${idUser}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            
            onSuccess(response.data)
        })
    })
}

export const getTeam = (cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/management/team/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            
            onSuccess(response.data)
        })
    })
}

export const getManagementUser = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/management/user/${lvl}/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
           
            onSuccess(response.data)
        })
    })
}

export const getNotifications = (cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/notifications/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            
            onSuccess(response.data)
        })
    })
}

export const getInterventions = (cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `http://localhost:4002/api/resume/intervention/${cus}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
            
            onSuccess(response.data)
        })
    })
}

export const getTab2 = (lvl,cus) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `${host}api/Evenemment`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
      
            onSuccess(response.data)
        })
    })
}

export const getOneEvent = (id) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `${host}api/Evenemment/${id}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
      
            onSuccess(response.data)
        })
    })
}

export const getCity = () => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "GET",
            url: `${host}api/Ville`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
      
            onSuccess(response.data)
        })
    })
}

export const postEvent = (body) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "POST",
            url: `${host}api/Evenemment`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }, body).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
      
            onSuccess(response.data)
        })
    })
}

export const deletEvent = (id) => {
    return new Promise((onSuccess, onFail) => {
        axios({ 
            method: "DELETE",
            url: `${host}api/Evenemment/${id}`,
            //headers: { "authorization": "Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6InZYSWtCLWdlTWN3NUtFdVREWW8xVyJ9.eyJpc3MiOiJodHRwczovL2Rldi1iOXlvYmRydy51cy5hdXRoMC5jb20vIiwic3ViIjoieWl6ME1aV0g1WVlySDJUbG55ZHBBTE5ESzRSZHIyNTRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYWRzLWFwaSIsImlhdCI6MTYzNDMxMzgwOSwiZXhwIjoxNjM0NDAwMjA5LCJhenAiOiJ5aXowTVpXSDVZWXJIMlRsbnlkcEFMTkRLNFJkcjI1NCIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.LevckBfdi1o61VYYUk3O52bYEUgLQHoOlcZ4YorHfmPBweyUARlhWREicir-UVGaVoZOrxYyJdauPID_iY_cm7ONNdmaLpYIHb6dxevYEuQpZRef_3yhxRrt9vvKCuPRGVcB4nFlUyqASs14d0t8WRBZsWN1-PZkR7cmWmrBlTvFT0hOtPSF1YEBqbSktoX5LFvO2Kd5JbTXt_CToNH7dihakIExUPQCrPyztYkShRp8a4-CZrGOWmwuZX2g-XvA12m8Mzwmyie3RpcoAWBmGY0Mbj2Q5lHsEblYFWS3J_wirZMkEqn8AR_2dA-fgaDeh9RaNG_OzGldoNKqHGGpvQ" },
        }).then((response, error) => {
            if (!response || error) {
                console.log("Fail")
                onFail(`Response failure ${error}`)
                return false
            }
      
            onSuccess(response.data)
        })
    })
}




