<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    protected $primaryKey ='id_course';
    protected $fillable = ['name', 'description','start_date','end_date','course_hours'];
    protected $guarded = ['id_course'];
}
