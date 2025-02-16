<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class LatestAnnouncementsInfo extends Model
{
    public $table = 'latest_announcements_infos';

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
