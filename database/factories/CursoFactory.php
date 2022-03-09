<?php

namespace Database\Factories;

use App\Models\Curso;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;//para generar un slug vamos a utilizar un helper importamos esta clase Str

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Curso::class;

    public function definition()
    {
        $name=$this->faker->sentence();
        return [
            'name'=>$name,//para generar un nombre aleatoriamente
            'slug'=>Str::slug($name,'-'),
            'description'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Desarrollo web', 'Diseño Web'])
        ];
    }
}
