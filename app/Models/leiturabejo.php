<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leiturabejo extends Model
{
    use HasFactory;
    protected $table = "leiturabejo";

    protected $fillable = [
        'DataLeitura', 'HoraLeitura', 'ValorSensor','Sensor_idSensor', 'Mac_idMac'
    ];

    public function sensor(){
        return $this->belongsTo(Sensor::class,'Sensor_idSensor','id');
    }
    public function mac(){
        return $this->belongsTo(Mac::class,'Mac_idMac','id');
    }
}
