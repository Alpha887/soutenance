<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Affiliate;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'level',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    public function affiliates()
    {
        return $this->hasMany(Affiliate::class);
    }
}
