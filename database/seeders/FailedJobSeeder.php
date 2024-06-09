<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FailedJob;

class FailedJobSeeder extends Seeder
{
    public function run()
    {
        // توليد 10 سجلات وهمية لجدول failed_jobs
        FailedJob::factory()->count(10)->create();
    }
}
