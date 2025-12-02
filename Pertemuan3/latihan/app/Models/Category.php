<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    /**
     * Kolom yang dilindungi dari mass assignment (hanya 'id' yang tidak boleh diisi manual)
     */
    protected $guarded = ['id'];

    /**
     * Relasi: Satu category memiliki banyak posts (One-to-Many)
     */
    public function posts(): HasMany
    {
        // 'category_id' adalah foreign key di tabel posts yang menunjuk ke categories.id
        // Artinya: satu kategori bisa memiliki banyak postingan
        return $this->hasMany(Post::class, 'category_id');
    }
}
