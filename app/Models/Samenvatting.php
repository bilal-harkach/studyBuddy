<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samenvatting extends Model
{
    use HasFactory;

    protected $table = 'samenvattingen';
    protected $fillable = ['titel', 'vak', 'inhoud', 'user_id'];

    public function gebruiker()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}