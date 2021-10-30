<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "created_at" => now(),
                "updated_at" => now(),
                "name" => "Greek Salads",
                "description" => "Please note: Salads's kitchen uses eggs, fish, milk, shellfish, soy, peanuts, tree nuts and wheat ingredients., Contains Milk.
                The star of our elevated Greek salad is tangy feta cheese, with its unparalleled rustic flavor, creamy texture, and salty finish. It's mixed with juicy grape tomatoes, olives, cucumber crescents, red onion, and hearty romaine lettuce. Paired with our Greek dressing, this salad is refreshing and filling at the same time—perfect for a quick, satisfying lunch.
                
                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!",
                "price" => 7.99,
                "image_path" => "Greek Salad.jpg",
            ],
            [
                "created_at" => now(),
                "updated_at" => now(),
                "name" => "Green Salad with Chicken",
                "description" => "For this simply delicious salad, we add slices of grilled chicken (raised without antibiotics) to a bed of tender greens and a rainbow of refreshing veggies, including green beans, tomatoes, carrots, and cucumber. Mix in our tangy dressing for a fresh and tasty salad that makes a quick lunch or dinner entrée.

                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!",
                "price" => 9.99,
                "image_path" => "Green Salad with Chicken.jpg",
            ],
        ];
        DB::table('salads')->insert($data);
    }
}
