<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
