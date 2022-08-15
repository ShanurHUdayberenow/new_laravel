<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Gift;

class Gift extends Model
{
    use HasFactory;
    protected $fillable = ['name','userId','giftId'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
    public function gifts() {
        return $this->hasMany(Gift::class, 'giftId');
    }
}
