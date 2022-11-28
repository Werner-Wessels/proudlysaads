<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Location;
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

         \App\Models\User::factory()->create([
             'name' => 'Werner Wessels',
             'email' => 'werner@customcms.co.za',
             'is_admin' => true,
             'password' => Hash::make('9589C@mpC0v3')
         ]);

         $categories = [
            'Vehicle', 'Furniture', 'Power Tools', 'Antiques', 'Electronics', 'Jewelry', 'Camping', 'Appliances'
         ];
         foreach ($categories as $category){
             $category = Category::create([
                 'name' => $category
             ]);
         }


         $provinces = [
             'Gauteng', 'Eastern Cape', 'Free State', 'KwaZulu-Natal', 'Limpopo', 'Mpumbalanga', 'Northern Cape', 'North West', 'Western Cape'
         ];
         foreach($provinces as $province){
             \App\Models\Location::factory()->create([
                 'name' => $province,
             ]);
         }

    }
}
