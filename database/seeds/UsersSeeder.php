<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('user')->insert([
			'name'=>'vit',
			'email'=>'vit@tut.by',
			'password'=>'123456',
		]);
    }
}
