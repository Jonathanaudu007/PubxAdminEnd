<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model
{
    use HasFactory;

    public function getUsers() {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
