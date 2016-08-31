<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User ;
class UserTableSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('users')->truncate();
       
            User::create([
         
                'password'=>'123456',
                'name'=>'ahlang',
                'email'=>'blackwolf0208@hotmail.com.tw'
              ]);
        
    }

}
