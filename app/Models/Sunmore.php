<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sunmore extends Model
{
    use HasFactory;

    protected $table = 'sunmore';

    protected $fillable = [
        'nama',
        'path_pdf',
        'thumbnail',
        'bedesut_id',
    ];

    public function bedesut()
    {
        return $this->belongsTo(Bedesut::class);
    }
}
