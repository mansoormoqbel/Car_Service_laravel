<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'position',
        'image',
        'experience',
        'email'
    ];
    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
    
}
