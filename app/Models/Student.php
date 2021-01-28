<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static function newStudent($data)
    {
        $student = new static;
        $student->fill($data);
        if ($student->save()) {
            return $student;
        }
        return false;
    }
}
