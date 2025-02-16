<div class="card-body p-0">
    <div class="table-responsive p-3">
        <table class="table" id="repair-infos-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>維修項目</th>
                <th>姓名</th>
                <th>電話</th>
                <th>Email</th>
                <th>縣市</th>
                <th>鄉鎮市區</th>
                <th>郵遞區號</th>
                <th>地址</th>
                <th>狀況說明</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($repairInfos as $repairInfo)
                <tr>
                    <td>{{ $repairInfo->id }}</td>
                    <td>{{ $repairInfo->repair_item }}</td>
                    <td>{{ $repairInfo->name }}</td>
                    <td>{{ $repairInfo->tel }}</td>
                    <td>{{ $repairInfo->email }}</td>
                    <td>{{ $repairInfo->city }}</td>
                    <td>{{ $repairInfo->district }}</td>
                    <td>{{ $repairInfo->zipcode }}</td>
                    <td>{{ $repairInfo->address }}</td>
                    <td>{{ $repairInfo->message }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.repairInfos.destroy', $repairInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.repairInfos.show', [$repairInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.repairInfos.edit', [$repairInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a> --}}
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return check(this)"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $repairInfos])
        </div>
    </div> --}}
</div>
