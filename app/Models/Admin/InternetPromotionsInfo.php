<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class InternetPromotionsInfo extends Model
{
    public $table = 'internet_promotions';

    public $fillable = [
        'title',
        'content',
        'cover_front_image',
        'status'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'cover_front_image' => 'json',
        'status' => 'boolean'
    ];

    public static $rules = [
        'content' => 'nullable',
        'cover_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'nullable'
    ];



}
