<!-- File Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_name', '名稱:') !!}
    {!! Form::text('file_name', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', '檔案:') !!}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="file" name="file" accept="application/pdf">
        <label class="custom-file-label" for="file">Choose file</label>
    </div>
</div>
<div class="clearfix"></div>


@push('page_scripts')
    <script>
        $(document).ready(function() {
            $('.custom-file-input').on('change', function() {
                // 取得檔案名稱
                var fileName = $(this).val().split('\\').pop();
                // 更新相鄰的 label
                $(this).next('.custom-file-label').html(fileName);
            });
        });
    </script>
@endpush
