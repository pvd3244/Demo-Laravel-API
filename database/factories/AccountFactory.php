<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Account::class;

    public function definition()
    {
        return [
            //
            'userName' => $this->faker->name(),
            'password' => bcrypt(Str::random(10)),
        ];
    }
}
