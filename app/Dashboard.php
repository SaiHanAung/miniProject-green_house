<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = [
        'device_id', 'humid', 'temp', 'port_1', 'port_2', 'port_3', 'port_4', 'port_5', 'port_6', 'port_7', 'port_8'
    ]; 
}
