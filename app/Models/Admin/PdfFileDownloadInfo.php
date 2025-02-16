<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PdfFileDownloadInfo extends Model
{
    public $table = 'pdf_file_download_infos';

    public $fillable = [
        'file_name',
        'file'
    ];

    protected $casts = [
        'id' => 'integer',
        'file_name' => 'string',
        'file' => 'json'
    ];

    public static array $rules = [
        'file_name' => 'string',
        'file' => 'max:2048'
    ];

    public static array $messages = [
        'file_name.string' => 'File name must be a string',
        // 'file.mimes' => 'File must be a pdf file',
        'file.max' => 'File size must be less than 2MB'
    ];


}
