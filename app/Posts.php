<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'user_id','description',
    ];

    protected $appends = [
        'fullName',
    ];

    public function getFullNameAttribute()
    {
        return  strtoupper($this->user->fullName);
    }

    public function user(){return $this->belongsTo(User::class);}
}
