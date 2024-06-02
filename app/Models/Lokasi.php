<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_lokasi', 'provinsi', 'kabupaten'];
	public $timestamps = true;
    public function event()
    {
        return $this->hasMany(Event::class);
    }
    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
