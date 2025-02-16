<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="pdf-file-download-infos-table">
            <thead>
            <tr>
                <th>名稱</th>
                <th>檔案</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pdfFileDownloadInfos as $pdfFileDownloadInfo)
                <tr>
                    <td>{{ $pdfFileDownloadInfo->file_name }}</td>
                    <td>
                        <a href="{{ env('APP_URL') . '/uploads/' . $pdfFileDownloadInfo->file }}" download>
                            {{ basename($pdfFileDownloadInfo->file) }}
                        </a>
                    </td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.pdfFileDownloadInfos.destroy', $pdfFileDownloadInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.pdfFileDownloadInfos.show', [$pdfFileDownloadInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.pdfFileDownloadInfos.edit', [$pdfFileDownloadInfo->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $pdfFileDownloadInfos])
        </div>
    </div>
</div>
