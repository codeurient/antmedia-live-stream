<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'preview', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
