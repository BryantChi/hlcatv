<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="e-p-g-infos-table">
            <thead>
            <tr>
                <th>數位節目表</th>
                <th>Alt</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ePGInfos as $ePGInfo)
                <tr>
                    <td>
                        <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . $ePGInfo->epg_img }}" style="max-width: 200px; max-height: 200px;" alt="">
                    </td>
                    <td>{{ $ePGInfo->alt }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.ePGInfos.destroy', $ePGInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.ePGInfos.show', [$ePGInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.ePGInfos.edit', [$ePGInfo->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $ePGInfos])
        </div>
    </div>
</div>
