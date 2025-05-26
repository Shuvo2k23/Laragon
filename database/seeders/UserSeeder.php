<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        $users = json_decode(file_get_contents('database/json/users.json'));
        foreach($users as $user){
            User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'age'=>$user->age,
                'city'=>$user->city 
            ]);
        }
        
    }
}
