<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\TipoDocumento;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoDocumento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombreDocumento' => $this->faker->name(),
        ];
    }
}
