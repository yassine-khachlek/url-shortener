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
        factory(App\User::class, 1)->create([
            'name' => 'Yassine Khachlek',
            'email' => 'yassine.khachlek@gmail.com',
            'password' => bcrypt('secret'),
            'is_admin' => true,
        ]);
    }
}
