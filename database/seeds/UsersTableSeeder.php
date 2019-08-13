<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Reset the users table
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('users')->truncate();

      // Generate 3 users/authors
      DB::table('users')->insert([

        [
          'name' => 'Makara Chhin',
          'email' => 'makarachhin@test.com',
          'password' => bcrypt('secret')

        ],

        [
          'name' => 'Rotha Chhin',
          'email' => 'rothachhin@test.com',
          'password' => bcrypt('secret')

        ],

        [
          'name' => 'Bopha',
          'email' => 'bopha@test.com',
          'password' => bcrypt('secret')

        ],
      ]);
    }
}
