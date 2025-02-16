<div class="table-responsive">
    <table class="table" id="newsInfos-table">
        <thead>
            <tr>
                <th>標題</th>
                <th>封面</th>
                <th>狀態</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newsInfos as $newsInfo)
                <tr>
                    <td>{{ $newsInfo->title }}</td>
                    <td>
                        <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . $newsInfo->cover_front_image }}" class="img-fluid" width="100" alt="">
                    </td>
                    <td>{{ $newsInfo->status == 1 ? '啟用' : '停用' }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.newsInfos.destroy', $newsInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.newsInfos.show', [$newsInfo->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.newsInfos.edit', [$newsInfo->id]) }}"
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
