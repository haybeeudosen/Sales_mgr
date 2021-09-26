<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use App\Models\User;
use App\Models\SuperAdminUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin_id = "admin-".substr(sha1(time()), 0, 5);
        SuperAdminUser::create([
            'name' => 'Admin User',
            'role' => 'admin',
            'email'=>'admin@admin.com',
            'id'=> 1,
            "password"=>Hash::make('password')
        ]);
    }
}
