<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PdfFileDownloadInfo;
use App\Repositories\BaseRepository;

class PdfFileDownloadInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'file'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return PdfFileDownloadInfo::class;
    }
}
