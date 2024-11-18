<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName'=>'Robervaldo',
            'lastName'=>'Houston',
            'email'=>'robervaldo@houston.com.br',
            'password'=>bcrypt('kjewnwejnfwfjn')
        ]);
    }
}
