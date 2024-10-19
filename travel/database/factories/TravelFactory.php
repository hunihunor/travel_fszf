<?php

namespace Database\Factories;

use App\Models\Airline;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stringable;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evaluation' => Str::random(10),
            'airline_id' => Airline::all()->random()->id,
            'flight_id' => Flight::all()->random()->id, 
        ];
    }
}
