<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //  protected $table = 'students';
    protected $fillable = [
    'enrollment_no',
    'name',
    'gender',
    'u_id',
    'name',
    'gender',
    'father_name',
    'mother_name',
    'father_cn',
    'permanent_address',
    'temp_address',
    'contact_no',
    'email_id',
    'dob',
    'created_at',
    'updated_at'];
}
