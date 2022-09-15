<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;


class Service extends Model
{
    use HasFactory;
    use HasSEO;

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
