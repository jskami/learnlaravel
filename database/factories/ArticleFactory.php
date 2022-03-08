<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10), // 사용자 id를 랜덤하게 찾겠다. 이유 : 현재 사용자 테이블에 10명의 더미유저가 있고 그 중에서 찾아야 하니까(있는 데이터에서 찾아야 하니까)
            'title' => $this->faker->sentence(),
            'body' => $this->faker->text(100),
        ];
    }
}
