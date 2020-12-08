<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    protected $fillable = [
        'first_name',
        'last_name',
        'email',


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
         $json_to_string = file_get_contents(storage_path('MOCK_DATA.json'));

         
         //json_decode <- takes json encoded data and converts it into a PHP variable
         $data = json_decode($json_to_string);

        //  dd($data);
          
     
          foreach($data as $item){

            $u = new \App\Models\User;
            $u->first_name = $item->first_name;
            $u->last_name = $item->last_name;
            $u->email = $item->email;
          
            $u->save();
          }
    }
}