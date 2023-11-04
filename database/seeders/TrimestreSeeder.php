<?php

namespace Database\Seeders;

use App\Models\Trimestre;
use Illuminate\Database\Seeder;

class TrimestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trimestre::factory()->count(4)->create();
    }
}