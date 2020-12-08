  
import React, { useState, useEffect } from 'react';
import { FaBeer } from 'react-icons/fa';


export default function AllRestaurants(props) {

    const [{loading, loaded, data}, setDataState] = useState({
        loading: false,
        loaded: false,
        data: null
    })

    const url = "/api/allrestaurants"; // fill this in

    const loadData = async () => {
        if (url) {
            setDataState({
                loading: true,
                loaded: false,
                data: null
            });

            const response = await fetch(url);
            const data = await response.json();

            setDataState({
                loading: false,
                loaded: true,
                data: data
            });
        }
    }

    useEffect(() => {
        loadData();
    }, [])

    console.log(data);

    let content = '';

    if (loading) {
        content = (
            <div className="message">
                <div className="loader"><div></div><div></div><div></div><div></div></div>
                Loading
            </div>
        )
    } else if (loaded) {
        content = (
            
                <div className="d-md-flex h-md-100 flex-wrap ">
                    {
                        data.map(wine => (
                        <div className="jumbotron d-md-flex h-md-100 ">
                            <div >

                            <p key={ wine.id }></p>
                            <img src={wine.picture}></img>
                            
                            </div>
                            <div>
                                <p> Restaurant name:<a href={"/restaurant/"+ wine.id}>{wine.restaurant_name}</a></p>
                                <p>Cuisine:{ wine.cuisine }</p>
                                <div>Price range:{ wine.price_range }</div>
                                <FaBeer/>
                            </div>
                        </div>
                            
                        ))
                    }
                </div>
           
        )
    }
    return (
        <section className="all restaurants">
            <h2>Top Wine Reataurants</h2>
            { content }
        </section>
    );
}