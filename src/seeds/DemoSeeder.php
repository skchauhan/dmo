<?php

namespace Websanova\Demo1\Seeds;

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run()
    {
        \DB::table('websanova_demo_items')->insert([
        	'slug' => 'test',
        	'name' => 'Test',
        	'description' => 'My first item test.',
        	'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}