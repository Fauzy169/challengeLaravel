<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Draggable extends Model
{
    /** @use HasFactory<\Database\Factories\DraggableFactory> */
    use HasFactory;

    protected $table = 'cards';
    protected $fillable = ['title', 'content'];

    public function users ()
    {
        $this->belongsTo(User::class);
    }
}
