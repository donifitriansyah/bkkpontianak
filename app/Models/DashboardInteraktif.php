<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardInteraktif extends Model
{
    use HasFactory;

    protected $table = 'dashboard_interaktif';

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
