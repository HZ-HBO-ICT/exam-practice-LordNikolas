<?php

namespace Database\Seeders;

use App\Models\Foo;
use Illuminate\Database\Seeder;

class FooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Foo::Factory()
            ->count(50)
            ->create();
    }
}
