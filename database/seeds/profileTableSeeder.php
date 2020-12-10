<?php

use App\Models\lesson;
use App\Models\level;
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

        for ($i = 1; $i <= 4; $i++ ) {
            $level = level::create([
                'level_title' => 'پایه '.$i,
                'created_at' => now(),
            ]);
        }
        for ($i = 1; $i <= 4; $i++ ) {
            $level = lesson::create([
                'lesson_title' => 'درس '.$i,
                'level_id' => 1,
                'created_at' => now(),
            ]);
        }

    }
}
