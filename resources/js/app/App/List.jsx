  
import React, { useState, useEffect } from 'react';

export default function List(props) {

    const [{loading, loaded, data}, setDataState] = useState({
        loading: false,
        loaded: false,
        data: null
    })

    const url = "/api/top"; 

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
            <>
                <ul>
                    {
                        data.map(wine => (
                            <li key={ wine.id }>
                                { wine.restaurant_name }
                                <div className="rating">{ wine.price_range }</div>
                            </li>
                        ))
                    }
                </ul>
            </>
        )
    }
    return (
        <section className>
            <h2>Our Choice</h2>
            { content }
        </section>
    );
}