<?php

namespace Database\Factories;

use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProvinciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provincia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'poblacion' => $this -> faker -> randomInteger($min = 50, $max = 7000000),
            'provincia' => $this -> faker -> sentence(1),
          
        ];
    }
}
