<?php

use Illuminate\Database\Seeder;

class MicropostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'test name 1',
            'email' => 'test1@test',
            'password' => '12345678',
        ]);
        
        DB::table('users')->insert([
            'id' => '2',
            'name' => 'test name 2',
            'email' => 'test2@test',
            'password' => '12345678',
        ]);
        
    }
}
