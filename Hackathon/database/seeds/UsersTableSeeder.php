<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->delete();
        User::create([
          'email' => 'admin@showup.id',
          'password' => bcrypt('qwe123'),
          'firstName' => 'Admin',
          'lastName' => 'Show Up',
          'typeId' => '2',
          'address' => 'Bandung',
          'phone' => '082219338123',
        ]);
    }
}
