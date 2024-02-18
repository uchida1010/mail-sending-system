<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class inquiry extends Model
{
    use HasFactory;

    public function user(): belongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function sendUser(): belongsToMany
    {
        return $this->belongsToMany(User::class, 'send_user_id');
    }
}
