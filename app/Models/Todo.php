<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
     /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'todos';
    protected $primary_key='id';
    use HasFactory;
}
