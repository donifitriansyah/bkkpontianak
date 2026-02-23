<?php

namespace App\Models;

use App\Models\BedesutInfografis;
use App\Models\DashboardInteraktif;
use App\Models\Sunmore;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedesut extends Model
{
    use HasFactory;

    protected $table = 'bedesut';

    protected $fillable = [
        'nama',
        'thumbnail',
        'text',
    ];

    public function infografis()
    {
        return $this->hasMany(BedesutInfografis::class);
    }

    public function dashboard()
    {
        return $this->hasMany(DashboardInteraktif::class);
    }

    public function sunmore()
    {
        return $this->hasMany(Sunmore::class);
    }
}
