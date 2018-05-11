<?php

use Illuminate\Database\Seeder;

class UserSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();
        DB::table('users')->insert([
            'username' => 'kientran',
            'fullname' => 'Trần Chung Kiên',
            'email' => 'kienkienutc95@gmail.com',
            'password' => bcrypt('admin@123'),
            'is_admin' =>1
        ]);
    }
}
