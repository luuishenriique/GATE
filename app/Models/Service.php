<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'equipment_id',
        'description',
        'user_id',
        'status_id',
        'support_id',
    ];

    // Relationships
    public function equipments()
    {
    	return $this->hasMany(Equipment::class);
    }

    public function attendances()
    {
    	return $this->hasMany(Attendance::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
