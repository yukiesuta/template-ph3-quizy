<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    // 複数代入時の保護
    protected $fillable = [
        'question_id',
        'name',
        'valid'
    ];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
