<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       SiteContent::create([
            "name"=> "banner",
            "content"=> json_encode([
                "title"=> "EVERY STUDENT YEARNS TO LEARN",
                "subtitle"=>"Making Your World Better",
                "desc"=>"Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man"
            ])
       ]);
    }
}
