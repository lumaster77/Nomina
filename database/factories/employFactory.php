<?php

namespace Database\Factories;

use App\Models\employ;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class employFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = employ::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => Str::random(10),
            'nombre' => $this->faker->name(),
            'apellido_paterno' => $this->faker->name(),
            'apellido_materno' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'tipo_contrato' => $this->faker->randomElement(['administradores','desarrolladores','seguridad']),
            'estado' => $this->faker->randomElement([true,false]),
            'eliminar' => $this->faker->randomElement([true,false])
        ];
    }
}
