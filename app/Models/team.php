<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $table = 'team';
    public $timestamps = false;
    protected $fillable = [
        'team'
    ];
    public function nhansu()
    {
        return $this->hasMany(nhansu::class);
    }
}
