<?php

use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(\App\User::class)->create([
        'email' => 'fernanda@teste.com'
      ]);
      factory(\App\User::class)->create([
        'email' => 'eduarda@teste.com'
      ]);
    }
}
