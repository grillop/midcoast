<?php

namespace Database\Seeders;

use App\Models\Idea;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            Idea::truncate();

            $csvFile = fopen(base_path("database/data/ideas.csv"), "r");

            $firstline = false;
            while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
                if (!$firstline) {
                    $idea = new Idea;
                    $idea->fill([
                        "category" => $data['0'],
                        "description" => $data['1']
                    ]);
                    $idea->save();
                    $a=1;
                    //Idea::create([
                    //     "category" => $data['0'],
                    //     "description" => $data['1']
                    // ]);
                }
                $firstline = false;
            }

            fclose($csvFile);
        }
            //
    }

}
