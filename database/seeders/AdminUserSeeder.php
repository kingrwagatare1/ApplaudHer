<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'Firstname'=>'RWAGATARE','Lastname'=>'King','email'=>'ketin1@gmail.com','phone_number'=>'078832930','roleId'=>'1',
            'address'=>'Gasabo','password'=>bcrypt('luxumbourg')

        ]);
    }
}
