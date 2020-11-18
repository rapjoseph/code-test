<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 \App\Models\Company::factory(5)->create();
    }
}
