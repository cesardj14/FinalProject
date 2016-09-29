<?php

use Illuminate\Database\Seeder;

class UserAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'user@admin.com',
            'password' => bcrypt('123123'),
        ]);

        DB::table('user_has_roles')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
    }



}
