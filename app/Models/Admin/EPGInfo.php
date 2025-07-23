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
        'epg_img' => 'string',
        'alt' => 'string'
    ];

    public static array $rules = [
        // 'epg_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'epg_img' => 'nullable',
        'alt' => 'nullable|string',
    ];

    public static array $messages = [

    ];


}
