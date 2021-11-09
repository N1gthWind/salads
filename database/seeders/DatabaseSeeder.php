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
            [
                "created_at" => now(),
                "updated_at" => now(),
                "name" => "Buffalo Chicken Salad",
                "description" => "Our Buffalo Chicken Salad features all your favorite game day flavors rolled over a bed of crispy greens. We combine shredded Buffalo chicken with crispy carrots, celery, grape tomatoes, and chopped romaine lettuce. Dressed with crumby Gorgonzola, pickled onions, and our blue cheese dressing, this salad is sure to satisfy the pickiest of eaters. So good, you won't miss the wings!
                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!",
                "price" => 6.99,
                "image_path" => "1635633891-Buffalo Chicken Salad.jpg",
            ],
            [
                "created_at" => now(),
                "updated_at" => now(),
                "name" => "Arugula Salad with Beets and Goat Cheese",
                "description" => "We balance peppery arugula with thick and creamy goat cheese, rich toasted walnuts, and the nutty tones of farro, all of which pair perfectly with savory bright-red baby beets and sweet dried cherries. A bright balsamic vinaigrette adds just the right finishing touch to marry the salad's deep flavors.
                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!",
                "price" => 14.99,
                "image_path" => "Arugula Salad with Beets and Goat Cheese.jpg",
            ],
            [
                "created_at" => now(),
                "updated_at" => now(),
                "name" => "Italian Chopped Salad",
                "description" => "Our twist on this Italian classic starts with a bed of crispy romaine, shredded cabbage, and grape tomatoes. We then add sliced Genoa salami, Asiago cheese, marinated chickpeas, our insanely delicious Muffuletta mix, and finish with our homemade Greek dressing. Perfect for lunch, dinner, or as a great addition to pizza night.
                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!",
                "price" => 9.99,
                "image_path" => "Italian Chopped Salad.jpg",
            ],
            [
                "created_at" => now(),
                "updated_at" => now(),
                "name" => "SpinachAppleSalad",
                "description" => "This spring inspired salad will brighten up the dreariest of desk lunches. Asparagus, steamed broccoli, green peas, cucumbers, sliced fennel, and fresh mint are combined atop a bed of peppery arugula. The salad is finished with ricotta salata cheese and our tangy dressing. Who knew eating well could be this delicious?
                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!",
                "price" => 11.99,
                "image_path" => "SpinachAppleSalad.jpg",
            ],
            


        ];

        $users = [
            "name" => "Jozsi",
            "email" => "test@gmail.com",
            "email_verified_at" => now(),
            "password" => "$2y$10\$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha",
            "remember_token" => NULL,
            "created_at" => now(),
            "updated_at" => now(),      
        ];

        DB::table('salads')->insert($data);
        DB::table('users')->insert($users);
    }
}
