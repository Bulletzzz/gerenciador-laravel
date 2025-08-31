<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['tarefa_id', 'conteudo'];

    public function tarefa()
    {
        return $this->belongsTo(Tarefa::class);
    }
}

