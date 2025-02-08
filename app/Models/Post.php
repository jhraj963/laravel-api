<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
