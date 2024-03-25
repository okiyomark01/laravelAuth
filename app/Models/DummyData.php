<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DummyData extends Model
{
    protected $table = 'dummy_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_no'
    ];
    use HasFactory;

    protected function casts()
    {
        return [
            'mobile_no' => 'integer',
        ];
    }
}
