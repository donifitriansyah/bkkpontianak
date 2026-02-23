<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedesutInfografis extends Model
{
    use HasFactory;

    protected $table = 'infografis';

    protected $fillable = [
        'nama',
        'text',
        'link_looker',
        'thumbnail',
        'bedesut_id',
    ];

    public function bedesut()
    {
        return $this->belongsTo(Bedesut::class);
    }
}
