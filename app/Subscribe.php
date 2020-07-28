<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function Thread()
    {
        $this->belongsTo(Thread::class);
    }
}
