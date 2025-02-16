<?php

namespace App\Repositories\Admin;

use App\Models\Admin\LatestAnnouncementsInfo;
use App\Repositories\BaseRepository;

class LatestAnnouncementsInfoRepository extends BaseRepository
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
        return LatestAnnouncementsInfo::class;
    }
}
