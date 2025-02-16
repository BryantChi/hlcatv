<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\PdfFileDownloadInfo;
use Illuminate\Foundation\Http\FormRequest;

class CreatePdfFileDownloadInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return PdfFileDownloadInfo::$rules;
    }
}
