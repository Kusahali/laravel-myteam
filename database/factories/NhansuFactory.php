<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\nhansu;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nhansu>
 */
class NhansuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = nhansu::class;
    public function definition()
    {
        return [
            'hoten' => $this -> faker ->name(),
            'gioithieu' => $this->faker->imageUrl(),
            'bangcap' => $this ->faker -> randomElement(['Cao đẳng','Đại học','Trung cấp']),
            'thongtingioithieu'=> $this -> faker -> paragraph(),
            'kinang'=> $this -> faker -> randomElement(['Node.js','React','Redis','Linux','Github']),
            'kinhnghiem'=>random_int(1,10),
            'team_id'=>random_int(1,5),
        ];
    }
}
