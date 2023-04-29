<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyMessage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function User() {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
