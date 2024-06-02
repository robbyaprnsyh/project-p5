<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_wisata', 'id_kategori', 'id_lokasi', 'deskripsi', 'cover', 'id_event'];
	public $timestamps = true;
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function event()
    {
        return $this->belongsTo(Event::class, 'id_event');
    }
}
