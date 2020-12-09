import React, { useState, useEffect } from "react";
import SearchResults from "./SearchResults.jsx";



function Search() {
    const [cuisine, setCuisine] = useState("");
    const [color, setColor] = useState("");
    const [diet, setDiet] = useState("");
    const [recipes, setRecipes] = useState([]);

    // const [searchValue, setSearchValue] = useState();
    // const [searchResults, setSearchResults] = useState([]);
    const [page, setPage] = useState(0);
    const [hasMore, setHasMore] = useState(true);

    const url = "/api/recipes";

    const searchRecipes = async () => {
        let url_with_params = url + "?";
        if (cuisine) {
            url_with_params += "&cuisine=" + encodeURIComponent(cuisine);
        }
        if (color) {
            url_with_params += "&color=" + encodeURIComponent(color);
        }
        if (diet) {
            url_with_params += "&diet=" + encodeURIComponent(diet);
        }
        if (page > 0) {
            url_with_params += "&page=" + encodeURIComponent(page);
        }
        try {
            const response = await fetch(url_with_params);
            const data = await response.json();
            console.log(data);

            setHasMore(data.recipes.length === 4);
            setRecipes(recipes => recipes.concat(data.recipes));
        } catch (error) {
            console.log(error);
        }
    };

    useEffect(() => {
        searchRecipes();
    }, [page]);

    const selectCuisine = e => {
        setCuisine(e.target.value);
    };

    const selectColor = e => {
        setColor(e.target.value);
    };

    const selectDiet = e => {
        setDiet(e.target.value);
    };

    return (
        <div className="container">
            <div className="search-bar">
                <h1 className="title">Find a Recipe</h1>
                <form
                    className="search-form"
                    onSubmit={e => {
                        e.preventDefault();
                        setRecipes([]);
                        setPage(0);
                        searchRecipes();
                    }}
                >
                    <span className="category">
                        <label className="label" htmlFor="color">
                            Time
                        </label>
                        <img
                            className="category-img"
                            src="/images/time.png"
                            height="30px"
                            width="30px"
                        />
                        <select
                            className="drop-down"
                            name="color"
                            onChange={selectColor}
                        >
                            <option value="">I have nothing but time!</option>
                            <option value="red">red</option>
                            <option value="white">white</option>
                            <option value="rose">rose</option>
                        </select>
                    </span>

                    <span className="category">
                        <label className="label" htmlFor="cuisine">
                            Cuisine
                        </label>
                        <img
                            className="category-img"
                            src="/images/cuisine.png"
                            height="30px"
                            width="30px"
                        />
                        <select
                            className="drop-down"
                            name="cuisine"
                            onChange={selectCuisine}
                        >
                            <option value="">
                                Pick the most delicious one!
                            </option>
                            <option value="Western">Western</option>
                            <option value="Asian">Asian</option>
                            <option value="Fusion">Fusion</option>
                            <option value="Middle Eastern">
                                Middle Eastern
                            </option>
                            <option value="African">African</option>
                            <option value="Latin American">
                                Latin American
                            </option>
                        </select>
                    </span>

                    <span className="category">
                        <label className="label" htmlFor="diet">
                            Diet
                        </label>
                        <img
                            className="category-img"
                            src="/images/diet.png"
                            height="30px"
                            width="30px"
                        />
                        <select
                            className="drop-down"
                            name="diet"
                            onChange={selectDiet}
                        >
                            <option value="">Suprise me!</option>
                            <option value="vegetarian">Vegetarian</option>
                            <option value="pescatarian">Pescatarian</option>
                            <option value="dairy-free">Dairy-free</option>
                        </select>
                    </span>

                    <span className="category">
                        <button className="recipe-btn" type="submit">
                            Take me to the recipes!
                        </button>
                    </span>
                </form>
                <div className="results__container">
                    <h2 className="check-out">Check out the latest recipes. . .</h2>

                    <SearchResults recipes={recipes} />

                    {// moved outside of div, if doesn't work, move above last line
                    hasMore === true ? (
                        <button
                            className="add-more"
                            onClick={() => setPage(page + 1)}
                        >
                            Find more
                        </button>
                    ) : (
                        ""
                    )}
                </div>

            </div>

        </div>
        
    );
}

export default Search;