<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="cable-tv-promotions-infos-table">
            <thead>
                <tr>
                    <th>標題</th>
                    <th>封面</th>
                    <th>狀態</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cableTvPromotionsInfos as $cableTvPromotionsInfo)
                    <tr>
                        <td>{{ $cableTvPromotionsInfo->title }}</td>
                        <td>
                            <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . $cableTvPromotionsInfo->cover_front_image }}" class="img-fluid" alt="">
                        </td>
                        <td>{{ $cableTvPromotionsInfo->status }}</td>
                        <td style="width: 120px">
                            {!! Form::open([
                                'route' => ['admin.cableTvPromotionsInfos.destroy', $cableTvPromotionsInfo->id],
                                'method' => 'delete',
                            ]) !!}
                            <div class='btn-group'>
                                {{-- <a href="{{ route('admin.cableTvPromotionsInfos.show', [$cableTvPromotionsInfo->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-eye"></i>
                                </a> --}}
                                <a href="{{ route('admin.cableTvPromotionsInfos.edit', [$cableTvPromotionsInfo->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                    'type' => 'button',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return check(this);",
                                ]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $cableTvPromotionsInfos])
        </div>
    </div>
</div>
