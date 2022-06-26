<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    public function departments()
    {
        return $this->belongsTo(Department::class, "id_dept");
    }
}
