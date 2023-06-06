<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'name',
        'description',
        'amount',
        'currency_id',
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

    public function currency()
    {
        return $this->belongsTo('App\Models\Currency')->withTrashed();
    }
}
