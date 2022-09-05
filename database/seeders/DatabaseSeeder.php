<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Cliente::factory(10)->create()->each(function ($phone){
            $phone->telefones()->save(\App\Models\Telefone::factory()->make());
        });
    }
}
