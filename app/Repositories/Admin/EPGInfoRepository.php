<?php

namespace App\Repositories\Admin;

use App\Models\Admin\EPGInfo;
use App\Repositories\BaseRepository;

class EPGInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'epg_img',
        'alt'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return EPGInfo::class;
    }
}
