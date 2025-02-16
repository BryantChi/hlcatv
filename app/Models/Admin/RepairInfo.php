<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class RepairInfo extends Model
{
    public $table = 'repair_infos';

    public $fillable = [
        'repair_item',
        'name',
        'tel',
        'email',
        'city',
        'district',
        'zipcode',
        'address',
        'message'
    ];

    protected $casts = [
        'id' => 'integer',
        'repair_item' => 'string',
        'name' => 'string',
        'tel' => 'string',
        'email' => 'string',
        'city' => 'string',
        'district' => 'string',
        'zipcode' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
