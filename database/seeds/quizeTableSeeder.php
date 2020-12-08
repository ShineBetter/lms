<?php

use App\Models\quiz;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class quizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++ ) {
            $time = Carbon::now();
            $addday=$time->addHours(2);
            $quiz = quiz::create([
                'quiz_name' => 'آزمون شماره '.$i,
                'quiz_start' => now(),
                'quiz_exp' => $addday,
                'created_at' => now(),
            ]);
        }
    }
}
