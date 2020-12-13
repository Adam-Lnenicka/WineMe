<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{

    protected $fillable = [

        'picture',
        'restaurant_name',
        'price_range',
        'size',
        'description',
        'price_id',
        'color_id',
        'cuisine_id',


 ];


    /**
     * Run the database seeds.
     *
     @return void//  *
     */
    public function run() 

    {


        //
         // this function file_get_contents() changes contents to string , 
         $json_to_string = file_get_contents(storage_path('restaurant_md.json'));


         //json_decode <- takes json encoded data and converts it into a PHP variable
         $data = json_decode($json_to_string);

        //  dd($data);


          foreach($data as $item){

            $u = new \App\Models\Restaurant;
            $u->picture = $item->picture;
            $u->restaurant_name = $item->restaurant_name;
            $u->price_range = $item->price_range;
            $u->size = $item->size;  
            $u->description = $item->description;
            $u->price_id = $item->price_id;  
            $u->color_id = $item->color_id;
            $u->cuisine_id = $item->cuisine_id;         
            $u->save();
          }
    }
} 