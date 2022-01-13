<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faizal=\App\Models\User::factory()->create(['name'=>'Hlaing Min Than','username'=>'faizal']);
        $mgmg=\App\Models\User::factory()->create(['name'=>'Mg Mg','username'=>'mgmg']);

        Tweet::factory(20)->create(['user_id'=>$faizal->id]);
        Tweet::factory(20)->create(['user_id'=>$mgmg->id]);
    }
}
