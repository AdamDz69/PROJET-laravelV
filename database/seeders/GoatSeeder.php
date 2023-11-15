<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goat;


class GoatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f = new Goat();
        $f->sex = 0;
        $f->name = "Jean";
        $f->price = 8000;
        $f->color = "darkgreen";
        $f->birthday = "2004-04-10";
        $f->save();
    }
}
