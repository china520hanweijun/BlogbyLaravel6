<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 30)->create();
        $user = \App\User::find(1);
        $user->name = "第一位";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('admin000');
        $user->save();
    }
}
