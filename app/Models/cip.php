<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cip extends Model
{
    use HasFactory;

    protected $fillable = ['content' , 'user_id' , 'read_time'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

