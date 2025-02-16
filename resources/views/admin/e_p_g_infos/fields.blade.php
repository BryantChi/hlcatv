<!-- Epg Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epg_img', '圖片:') !!}
    {{-- {!! Form::text('epg_img', null, ['class' => 'form-control']) !!} --}}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="epg_img" name="epg_img" accept="image/*">
        <label class="custom-file-label" for="epg_img">Choose file</label>
    </div>
    <div class="img-preview-epg mt-2">
        @if ($ePGInfo->epg_img ?? null)
            <p for="">預覽</p>
            <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . $ePGInfo->epg_img }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>

<!-- Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alt', 'Alt:') !!}
    {!! Form::text('alt', null, ['class' => 'form-control']) !!}
</div>

@push('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/1ugon3r0i7rnpx6jhdz4moygn9knxfai212wbqlixzr9hpi8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
    <script src="{!! asset('vendor/tinymce/js/tinymce/tinymce.js') !!}"></script>
@endpush
@push('page_scripts')
<script src="{{ asset('assets/admin/js/news.js') }}" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $(document).on('change', '#epg_img', function () {
            let fileInput = this;
            let fileReader = new FileReader();

            fileReader.onload = function(e) {
                let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                $(fileInput).closest('.form-group').find('.img-preview-epg').html(previewHtml);
            };

            fileReader.readAsDataURL(fileInput.files[0]);
        });
    });
</script>

@endpush
