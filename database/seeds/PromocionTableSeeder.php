<?php
use App\promocion;
use Illuminate\Database\Seeder;

class PromocionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            // Let's truncate our existing records to start from scratch.
            promocion::truncate();

            $faker = \Faker\Factory::create();
    
            // And now, let's create a few articles in our database:
            for ($i = 0; $i < 50; $i++) {
                promocion::create([
                    'title' => $faker->sentence,
                    'price' => $faker->randomNumber(2),
                    'address' => $faker->address,
                    'latitude' => $faker->latitude,
                    'longitude' => $faker->longitude,
                ]);
            }
    }
}
