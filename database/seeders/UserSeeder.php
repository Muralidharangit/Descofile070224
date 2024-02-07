<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        echo '---------------------------------------' . "\n";
        echo '--------User Seeding-------' . "\n";

        $datas = [
            [
                'name' => 'Super Admin',
                'email' => 'developer@syscorp.in',
                'mobile' => '9123456780',
                'password' => Hash::make('skit@12345'),
            ],
            [
                'name' => 'Desco',
                'email' => 'desco@gmail.com',
                'mobile' => '9123456781',
                'password' => Hash::make('desco@123'),
            ],
        ];

            DB::table('users')->insert($datas);

    }
}
