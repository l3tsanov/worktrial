<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Worktrial\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table("users")->delete();

        User::create(['email' => 'test@test.com', 'password'=> bcrypt('test'), 'name'=> 'test']);
    }
}