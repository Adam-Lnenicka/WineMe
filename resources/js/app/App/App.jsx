import React, { useEffect, useState } from 'react';
import SearchBar from './Components/SearchBar';
import SearchResults from './Components/SearchResults';


const App = () => {

  const [searchValue, setSearchValue] = useState('');
  const [searchResults, setSearchResults] = useState([]);


  useEffect(() => {
    fetchData();
    console.log(searchResults);
  }, [searchValue])

  const fetchData = async () => {
    const url = 
      "/api/allWines?search=";

    const response = await fetch(url + searchValue); 
 
    const data = await response.json();

    setSearchResults(data); 
  
  }

  return (

    <div className="App">
      
      {console.log(searchResults)}
      <SearchBar setSearchValue={setSearchValue} />
      <SearchResults searchValue={searchValue} searchResults={searchResults} />

      
      
      
    </div>
    
  );
}

export default App;