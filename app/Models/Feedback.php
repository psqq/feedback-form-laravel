<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'name',
        'phone',
        'company',
        'message',
        'user_id',
        'file_id',
    ];

    public function file(){
        return $this->belongsTo('App\Models\File');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
