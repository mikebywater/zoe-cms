<?php

use App\Repositories\Page\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(['name' => 'about']);
        Page::create(['name' => 'contact']);
    }
}
