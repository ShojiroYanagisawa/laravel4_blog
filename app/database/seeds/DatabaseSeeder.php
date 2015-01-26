<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::table('posts')->truncate();
		Post::create(['title' => 'First Laravel', 'body' => 'Hello, Laravel']);
		Post::create(['title' => 'Second Laravel', 'body' => 'Hi, Laravel']);
	}

}
