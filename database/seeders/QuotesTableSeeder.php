<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quotes')->insert([
            ['text' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.', 'author' => 'Nelson Mandela'],
            ['text' => 'The way to get started is to quit talking and begin doing.', 'author' => 'Walt Disney'],
            ['text' => 'Your time is limited, don’t waste it living someone else’s life.', 'author' => 'Steve Jobs'],
            // Add as many as you like
        ]); 
    }
}
