<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    protected $fillable =[
        'user_id',
        'clock_in',
        'title',
        'body',
        'flag',
    ];

    protected $casts = [
        'clock_in' => 'datetime',//Carbonインスタンスに変換
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
