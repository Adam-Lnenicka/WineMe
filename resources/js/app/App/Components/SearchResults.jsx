import React from 'react';

const SearchResults = (props) => {
  return(
    <div>
      {props.searchResults.map(wine => (
        <div>
          <p>{wine.restaurant_name}</p>
        </div>
      ))}
    </div>
  )
}


export default SearchResults;