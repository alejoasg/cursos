<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    protected $table = 'lottery';
    protected $primaryKey ='id_lottery';
    protected $fillable = ['numero1', 'numero2','numero3','numero4','numero5','estrella1','estrella2'];
    protected $guarded = ['id_lottery'];
}
