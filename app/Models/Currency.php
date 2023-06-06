<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Currency extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'name',
        'code',
        'rate',
    ];

    public function costs()
    {
        return $this->hasMany('App\Models\Cost');
    }
}
