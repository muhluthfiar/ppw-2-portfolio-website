<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    private $projects = [
        ["ProjectTitle" => "Lorem Ipsum", "ProjectDescription" => "Lorem Ipsum dolor sit amet1"],
        ["ProjectTitle" => "Lorem Ipsum2", "ProjectDescription" => "Lorem Ipsum dolor sit amet2"],
        ["ProjectTitle" => "Lorem Ipsum3", "ProjectDescription" => "Lorem Ipsum dolor sit amet3"],
        ["ProjectTitle" => "Lorem Ipsum", "ProjectDescription" => "Lorem Ipsum dolor sit amet1"],
        ["ProjectTitle" => "Lorem Ipsum2", "ProjectDescription" => "Lorem Ipsum dolor sit amet2"],
        ["ProjectTitle" => "Lorem Ipsum3", "ProjectDescription" => "Lorem Ipsum dolor sit amet3"],
        ["ProjectTitle" => "Lorem Ipsum", "ProjectDescription" => "Lorem Ipsum dolor sit amet1"],
        ["ProjectTitle" => "Lorem Ipsum2", "ProjectDescription" => "Lorem Ipsum dolor sit amet2"],
        ["ProjectTitle" => "Lorem Ipsum3", "ProjectDescription" => "Lorem Ipsum dolor sit amet3"],
        ["ProjectTitle" => "Lorem Ipsum", "ProjectDescription" => "Lorem Ipsum dolor sit amet1"],
        ["ProjectTitle" => "Lorem Ipsum2", "ProjectDescription" => "Lorem Ipsum dolor sit amet2"],
        ["ProjectTitle" => "Lorem Ipsum3", "ProjectDescription" => "Lorem Ipsum dolor sit amet3"],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        foreach ($this->projects as $project) {
            $data[] = [
                'ProjectTitle' => $project['ProjectTitle'],
                'ProjectDescription' => $project['ProjectDescription']
            ];
        }
        DB::table('projects')->insert($data);
    }
}
