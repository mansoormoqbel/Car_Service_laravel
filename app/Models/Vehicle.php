<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = [
        'make',
        'model',
        'licensePlate',
        'user_id',
        'year'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function  scopeSelection($query)
    {
        return $query -> select('vehicles.*', 'users.firstName as UfName','users.lastName as UlName')->join('users', 'users.id', '=', 'vehicles.user_id')->where('users.is_admin','!=',1);
    }
    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}
