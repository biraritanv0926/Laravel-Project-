<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function blogPost()
    {
        return $this->belongsTo('App\BolgPost');
    }
}
