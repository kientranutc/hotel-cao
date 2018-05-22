<?php

use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logo')->truncate();
        DB::table('logo')->insert([
            'image' => '',
        ]);
    }
}
