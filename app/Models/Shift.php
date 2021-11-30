<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;


    protected $fillable = ['start_time','end_time'];
    /**
     * Get the employee for the shift.
     */
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    /**
     * Get the employee for the shift.
     */
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
