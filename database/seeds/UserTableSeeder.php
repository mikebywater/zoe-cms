<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'mike.j.bywater@gmail.com',
            'password' => '$2y$12$sP862TLce4TJpHmhzhAVLOtZ.FjWj0gvTVifu2HmPr2507nzqhW5W',
            'name' => 'Mike Bywater'
        ]);
    }
}
