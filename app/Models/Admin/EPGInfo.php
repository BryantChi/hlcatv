<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class EPGInfo extends Model
{
    public $table = 'epg_infos';

    public $fillable = [
        'epg_img',
        'alt'
    ];

    protected $casts = [
        'id' => 'integer',
        'epg_img' => 'json',
        'alt' => 'string'
    ];

    public static array $rules = [
        'epg_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'alt' => 'nullable|string',
    ];

    public static array $messages = [
        'epg_img.image' => 'The epg_img field must be an image.',
        'epg_img.mimes' => 'The epg_img field must be a file of type: jpeg, png, jpg, gif, svg.',
        'epg_img.max' => 'The epg_img field may not be greater than 2048 kilobytes.',
    ];


}
