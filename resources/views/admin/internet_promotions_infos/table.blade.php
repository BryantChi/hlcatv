<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="internet-promotions-infos-table">
            <thead>
            <tr>
                <th>標題</th>
                <th>封面</th>
                <th>狀態</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($internetPromotionsInfos as $internetPromotionsInfo)
                <tr>
                    <td>{{ $internetPromotionsInfo->title }}</td>
                    <td>
                        <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . $internetPromotionsInfo->cover_front_image }}" class="img-fluid" width="100" alt="">
                    </td>
                    <td>{{ $internetPromotionsInfo->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.internetPromotionsInfos.destroy', $internetPromotionsInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.internetPromotionsInfos.show', [$internetPromotionsInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.internetPromotionsInfos.edit', [$internetPromotionsInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return check(this)"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $internetPromotionsInfos])
        </div>
    </div>
</div>
