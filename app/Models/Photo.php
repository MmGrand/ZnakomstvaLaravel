<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'path',
        'is_avatar'
    ];

    // Отношения с другими моделями
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
