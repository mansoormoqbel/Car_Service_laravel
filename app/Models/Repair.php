<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $table = 'repairs';
    protected $fillable = [
        'vehicleID',
        'employeeID',
        'repairDate',
        'cost',
        'description'
    ];
    /* public function  scopeSelection($query)
    {
        return $query -> select('repairs.*')->join('employees', 'employees.id', '=', 'repairs.employeeID')->join('vehicles', 'vehicles.id', '=', 'repairs.vehicleID');
    } */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class,'vehicleID');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'employeeID');
    }
    
}
