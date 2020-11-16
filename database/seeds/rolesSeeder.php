<?php

use App\Models\role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



//        $admin = role::create([
//            'title' => 'admin',
//            'name'=>'مدیر',
//            'permissions' => json_encode([
//                'show-students' => true,
//                'show-teachers' => true,
//                'show-parents' => true,
//            ]),
//        ]);
//        $teacher = role::create([
//            'title' => 'teacher',
//            'name'=>'استاد',
//            'permissions' => json_encode([
//                'show-students' => true,
//                'show-teachers' => true,
//                'show-parents' => true,
//            ]),
//        ]);
//        $student = role::create([
//            'title' => 'student',
//            'name'=>'دانشجو',
//            'permissions' => json_encode([
//                'show-students' => true,
//                'show-teachers' => true,
//                'show-parents' => true,
//            ]),
//        ]);
//        $parent = role::create([
//            'title' => 'parent',
//            'name'=>'اولیا',
//            'permissions' => json_encode([
//                'show-students' => true,
//                'show-teachers' => true,
//                'show-parents' => true,
//            ]),
//        ]);
        for ($i = 1; $i <= 4; $i++ ) {
            $user = \App\User::create([
                'name' => Str::random(10),
                'lastName' => Str::random(10),
                'email' => Str::random(12),
                'password' => Hash::make(123456),
                'user_role' => 'teacher',
            ]);
        }

//        $user_role = DB::table('role_user')->insert([
//            ['user_id' => 1, 'role_id' => 1],
//            ['user_id' => 2, 'role_id' => 2],
//            ['user_id' => 3, 'role_id' => 1],
//            ['user_id' => 4, 'role_id' => 4],
//            ['user_id' => 5, 'role_id' => 2],
//            ['user_id' => 6, 'role_id' => 4],
//            ['user_id' => 7, 'role_id' => 3],
//            ['user_id' => 8, 'role_id' => 1],
//            ['user_id' => 9, 'role_id' => 4],
//            ['user_id' => 10, 'role_id' => 2],
//            ['user_id' => 11, 'role_id' => 3]
//        ]);
    }
}
