<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'tema_event', 'tgl_diselenggarakan', 'id_lokasi'];
	public $timestamps = true;
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }
    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
