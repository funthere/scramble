<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'word_id', 'point'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function word()
    {
        return $this->belongsTo('App\Models\Word', 'word_id');
    }
}
