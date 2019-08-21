<?php

use Illuminate\Database\Seeder;
use App\Version;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Version::truncate();

        Version::create([
        	'version' => '1.0.1 Stable',
        ]);
    }
}
