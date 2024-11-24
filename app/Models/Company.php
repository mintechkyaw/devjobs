<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'email', 'type', 'location', 'website', 'logo_path', 'verified', 'about'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
