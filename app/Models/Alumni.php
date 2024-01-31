<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id', 
        'first_name', 
        'last_name', 
        'birthday', 
        'leave_year',
        'join_year', 
        'current_job', 
        'current_company', 
        'address', 
        'city',
        'country', 
        'no_hp', 
        'linkedin',
        'photo',
        'status',
    ];
}
