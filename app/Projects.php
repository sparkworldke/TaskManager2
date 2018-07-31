<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    protected $fillable = [
        'name', 'desc', 'department_id', 'start_date', 'due_date', 'document', 'status',
    ];
}
