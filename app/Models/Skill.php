<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }

    public function companies(): BelongsToMany {
        return $this->belongsToMany(Company::class);
    }
}
