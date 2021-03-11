<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'category_id', 'user-id',  'order'];

    public function Category()
    {
        return $this->hasOne(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
