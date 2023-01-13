<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::insert([
            "first_name"=>"Hub",
            "last_name"=>"Suppliers",
            "company"=>"Hub Suppliers",
            "email"=>"hub.suppliers@hub.com",
            "password"=>Hash::make("hubSuppliers"),
            "phone"=>"0034 653 181 825"
        ]);
        $this->call([
            ProductSeeder::class
        ]);
    }
}
