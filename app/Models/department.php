<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $table = "departments";

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
