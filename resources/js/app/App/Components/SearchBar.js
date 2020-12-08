  
import React, { useState } from 'react';

const SearchBar = (props) => {
 
  const [value, setValue] = useState('');

  const handleSubmit = (e) => {
 
    e.preventDefault();
    // assigns the targeted inputs value as a searchValue from App.js
    props.setSearchValue(value);
  }

  return(
    
    <form onSubmit={(e) => handleSubmit(e)}>
      <label className ="" htmlFor="search">Search user:</label> 
      <input 
        name="search"
        type="text" 
        onChange={(e) => setValue(e.target.value)}
 
      />
      <button className ="link" type="submit">Search</button>
    </form>
  )
}



export default SearchBar;