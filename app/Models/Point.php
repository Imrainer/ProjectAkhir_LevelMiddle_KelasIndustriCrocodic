<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = 'point';
    protected $primaryKey= 'id_point';
    protected $fillable = ['points'];
    
    public function user () {
        return $this->belongsTo(User::class, 'id');
    }



}
