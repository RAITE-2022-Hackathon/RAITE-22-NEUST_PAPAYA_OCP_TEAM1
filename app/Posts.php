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
        'date',
        'time',
    ];

    public function getFullNameAttribute()
    {
        return  strtoupper($this->user->fullName);
    }

    public function getDateAttribute()
    {
        return $this->created_at? $this->created_at->format('M-d-Y'): null;
    }

    public function getTimeAttribute()
    {
        return $this->created_at? $this->created_at->format('g:i:s A'): null;
    }


    public function user(){return $this->belongsTo(User::class);}
}
