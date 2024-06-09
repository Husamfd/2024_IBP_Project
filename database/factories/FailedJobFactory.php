<?php

namespace Database\Factories;

use App\Models\FailedJob;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FailedJobFactory extends Factory
{
    protected $model = FailedJob::class;

    public function definition()
    {
        return [
            'uuid' => (string) Str::uuid(),
            'connection' => $this->faker->word,
            'queue' => $this->faker->word,
            'payload' => $this->faker->text,
            'exception' => $this->faker->text,
            'failed_at' => now(),
        ];
    }
}
