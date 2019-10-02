<?php
use Illuminate\Database\Seeder;
use App\Courses;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $newDate =DateTime::createFromFormat('Y-m-d', '2019-02-15');
        $newDate = $newDate->format('d/m/Y');
        $endDate = DateTime::createFromFormat('Y-m-d', '2019-02-25');
        $endDate = $endDate->format('d/m/Y');

        Courses::create([
            'name'=> 'Marketing digital',
            'description'=>'solucion de marketing digital',
            'start_date'=>$newDate,
            'end_date'=>$endDate,
            'course_hours'=> 5
        ]);
    }
}



