<?php

use App\Models\profile;
use App\User;
use Illuminate\Database\Seeder;

class profileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 4)->create()->each(function($u) {
            $u->profile()->save(factory(profile::class)->make());
        });
    }
}
