<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            'name'=>'mohamed',
            'spec'=>'programming',
            'image'=>'1.jpg',
        ]);
        Trainer::create([
            'name'=>'ashraf',
            'spec'=>'programming',
            'image'=>'2.jpg',
        ]);
        Trainer::create([
            'name'=>'ali',
            'spec'=>'english',
            'image'=>'3.jpg',
        ]);
        Trainer::create([
            'name'=>'khaled',
            'spec'=>'english',
            'image'=>'4.jpg',
        ]);
        Trainer::create([
            'name'=>'mahmoud',
            'spec'=>'medical',
            'image'=>'5.jpg',
        ]);
        Trainer::create([
            'name'=>'safy',
            'spec'=>'medical',
            'image'=>'6.jpg',
        ]);
    }
}
