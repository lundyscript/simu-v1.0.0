<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ['kategori', 'penulis', 'status'];
    public function scopeFilter($query, array $cariya)
    {
        $query->when($cariya['cari'] ?? false, function ($query, $cari) {
            return $query->where('judul', 'like', '%' . $cari . '%')->orWhere('isiartikel', 'like', '%' . $cari . '%');
        });

        $query->when($cariya['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('kategori', function ($query) use ($kategori) {
                $query->where('slug', $kategori);
            });
        });

        $query->when($cariya['penulis'] ?? false, fn ($query, $penulis) =>
        $query->whereHas('penulis', fn ($query) =>
        $query->where('username', $penulis)));

        $query->when($cariya['status'] ?? false, fn ($query, $status) =>
        $query->whereHas('status', fn ($query) =>
        $query->where('slug', $status)));
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function penulis()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
