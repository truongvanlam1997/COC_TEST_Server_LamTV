<?php

namespace App\Containers\Course\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Tasks\CreateCourseDurationTask;
use App\Containers\Course\Tasks\CreateCourseLearnHourTask;
use App\Containers\Course\Tasks\CreateCourseTask;
use App\Ship\Parents\Seeders\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // seeder Course
        Apiato::call(CreateCourseTask::class,[['name' => 'Php Course','description' => "Php Course"]]);
        Apiato::call(CreateCourseTask::class,[['name' => 'Laravel Course','description' => "Laravel Course"]]);
        Apiato::call(CreateCourseTask::class,[['name' => 'Reactjs Course','description' => "Reactjs Course"]]);
        Apiato::call(CreateCourseTask::class,[['name' => 'Vuejs Course','description' => "Vuejs Course"]]);
        Apiato::call(CreateCourseTask::class,[['name' => 'Git Course','description' => "Git Course"]]);

        // // Seeder Course duration
        Apiato::call(CreateCourseDurationTask::class,[['name' => '3 month','description'=>'3 month', 'duration_month' => 3]]);
        Apiato::call(CreateCourseDurationTask::class,[['name' => '6 month','description'=>'6 month', 'duration_month' => 6]]);
        Apiato::call(CreateCourseDurationTask::class,[['name' => '12 month','description'=>'12 month', 'duration_month' => 12]]);

        // seeder Course Learn Hour
        Apiato::call(CreateCourseLearnHourTask::class,[["name" => "01:00","description"=>"01:00"]]);
        Apiato::call(CreateCourseLearnHourTask::class,[["name" => "02:00","description"=>"02:00"]]);
        Apiato::call(CreateCourseLearnHourTask::class,[["name" => "03:00","description"=>"03:00"]]);
        Apiato::call(CreateCourseLearnHourTask::class,[["name" => "04:00","description"=>"04:00"]]);
        Apiato::call(CreateCourseLearnHourTask::class,[["name" => "05:00","description"=>"05:00"]]);
        Apiato::call(CreateCourseLearnHourTask::class,[["name" => "06:00","description"=>"06:00"]]);


    }
}

