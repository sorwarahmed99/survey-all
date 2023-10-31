<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceViews extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'current_logged_in_device',
        'view_time',
        'service_id',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

}
