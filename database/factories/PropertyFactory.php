<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 51,
            'offer_id' => $this->faker->numberBetween(1, 4),
            'district_id' => 52,
            'thana_id' => 1,
            'region_id' => $this->faker->numberBetween(1, 4),
            'amount_of_land_en' => $amountLand = $this->faker->numberBetween(2, 11),
            'amount_of_land_bn' => $amountLand,
            'near_by_en' => $nearBy = $this->faker->randomElement(['Mosque', 'Primary School', 'Secondery School', 'Named Road']),
            'near_by_bn' => $nearBy,
            'minimum_price_en' => $minPrice = $this->faker->numberBetween(500000, 2500000),
            'minimum_price_bn' => $minPrice,
            'road_en' => $roadNo = $this->faker->numberBetween(1, 10),
            'road_bn' => $roadNo,
            'house_en' => $houseNo = $this->faker->numberBetween(1, 20),
            'house_bn' => $houseNo,
            'floor_en' => $floorNo = $this->faker->randomElement(['1st', '2nd', '3rd', '4th', '5th']),
            'floor_bn' => $floorNo,
            'flat_space_en' => $flatSpace = $this->faker->numberBetween(500, 2500),
            'flat_space_bn' => $flatSpace,
            'no_of_bedroom_en' => $bedRoom = $this->faker->numberBetween(1, 3),
            'no_of_bedroom_bn' => $bedRoom,
            'rent_per_month_en' => $rent = $this->faker->numberBetween(10000, 50000),
            'rent_per_month_bn' => $rent,
            'rent_from_month' => '2021-01-01',
            'description_en' => $description = $this->faker->text,
            'description_bn' => $description,
            'cover_image' => $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg']),
            'status' => $this->faker->numberBetween(0, 1),
            'created_at' => date('Y-m-d')
        ];
    }
}
