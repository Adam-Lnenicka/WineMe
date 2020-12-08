import React from 'react'
import ReactDOM from 'react-dom'
import App from './App/App'
import List from './App/List'
import AllRestaurants from './App/AllRestaurants'


ReactDOM.render(
    <div>
        

        <div class="d-md-flex h-md-100 ">

        <div class="col-md-3 p-0 ">
            <div class=" h-100 p-1 text-center align-top bg-primary">
                    <App />
                    <br/>
                    <List/>
                
            </div>
        </div>



        <div class="col-md-9 p-0 bg-white h-md-100 ">
            <div class="d-md-flex align-items-center h-md-100 p-1 justify-content-center">
            <AllRestaurants />
            </div>
        </div>
        
        </div>
        
        

    </div>
    , document.getElementById('app')
);