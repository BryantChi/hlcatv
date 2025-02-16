<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CableTvPromotionsInfo;
use App\Repositories\BaseRepository;

class CableTvPromotionsInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'content',
        'cover_front_image',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return CableTvPromotionsInfo::class;
    }
}
