<?php

namespace App\Repositories\Admin;

use App\Models\Admin\RepairInfo;
use App\Repositories\BaseRepository;

class RepairInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'repair_item',
        'name',
        'tel',
        'email',
        'city',
        'district',
        'zipcode',
        'address',
        'message'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return RepairInfo::class;
    }
}
