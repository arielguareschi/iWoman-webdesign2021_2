<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement($array = array('male','female'));
        return [
            'nome'=> $this->faker->name($gender),
            'endereco'=>$this->faker->streetAddress(),
            'nascimento'=>$this->faker->dateTimeBetween('-80 years', 'this week'),
            'sexo'=> Str::upper(Str::substr($gender, 0, 1)) ,
            'telefone'=>$this->faker->phoneNumber(),
            'celular'=>$this->faker->phoneNumber(),
            'cpf'=>$this->faker->cpf(),
            'ativo'=>true,
            'cidade_id'=> rand(1, 5564)
        ];
    }
}
