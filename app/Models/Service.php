<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rate',
        'serviceid',
        'details'

    ];

    public function Category(){

        return $this->belongsToMany('App\Models\Category');
    }
}
