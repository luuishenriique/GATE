<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'service_id',
    ];

    // Relationships
    public function statuses()
    {
    	return $this->hasMany(Status::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
