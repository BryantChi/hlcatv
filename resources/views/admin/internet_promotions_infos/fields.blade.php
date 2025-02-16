<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', '標題:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12">
    {!! Form::label('content', '內容:') !!}
    {!! Form::text('content', null, ['class' => 'form-control', 'id' => 'contents']) !!}
</div>

<!-- Cover Front Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover_front_image', '封面:') !!}
    {{-- <div class="input-group">
        <div class="custom-file">
            {!! Form::file('cover_front_image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('cover_front_image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div> --}}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="cover_front_image" name="cover_front_image" accept="image/*">
        <label class="custom-file-label" for="cover_front_image">Choose file</label>
    </div>
    <div class="img-preview-cover mt-2">
        @if ($cableTvPromotionsInfo->cover_front_image ?? null)
            <p for="">預覽</p>
            <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . $cableTvPromotionsInfo->cover_front_image }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>
<div class="clearfix"></div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', '狀態:') !!}
    {{-- {!! Form::text('status', null, ['class' => 'form-control']) !!} --}}
    <select name="status" id="status" class="form-control">
        <option value="" selected>請選擇</option>
        <option value="1" {{ $cableTvPromotionsInfo->status ?? '' == 1 ? 'selected' : '' }}>啟用</option>
        <option value="0" {{ $cableTvPromotionsInfo->status ?? '' == 0 ? 'selected' : '' }}>停用</option>
    </select>
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
<script src="{{ asset('assets/admin/js/internet_promotions.js') }}" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $(document).on('change', '#cover_front_image', function () {
            let fileInput = this;
            let fileReader = new FileReader();

            fileReader.onload = function(e) {
                let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                $(fileInput).closest('.form-group').find('.img-preview-cover').html(previewHtml);
            };

            fileReader.readAsDataURL(fileInput.files[0]);
        });
        // $(document).on('change', '[id^="plan_style_"]', function () {
        //     let fileInput = this;
        //     let fileReader = new FileReader();
        //     let id = $(fileInput).attr('id'); // 獲取元素的ID
        //     let previewClass = `.img-preview-s${id.split('_').pop()}`; // 根據ID動態生成對應的預覽class

        //     fileReader.onload = function (e) {
        //         let previewHtml = `<p>預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
        //         $(fileInput).closest('.form-group').find(previewClass).html(previewHtml);
        //     };

        //     fileReader.readAsDataURL(fileInput.files[0]);
        // });
    });
</script>
@endpush
