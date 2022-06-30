<?php
namespace Modules\Otp\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OtpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Otp\Entities\Otp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "phone_number"=>"09".$this->faker->numerify("#########"),
            "code"=>$this->faker->numerify("#######")
        ];
    }
}

